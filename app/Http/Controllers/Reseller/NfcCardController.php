<?php

namespace App\Http\Controllers\Reseller;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\NfcCardRequest;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;
use App\Models\Admin\NfcCard;
use App\Models\Admin\NfcData;
use Carbon\Carbon;

class NfcCardController extends Controller
{
    public function index()
    {
        $data = [
            'nfc_cards' => NfcCard::with('nfcData', 'nfcMessages')->where('reseller_id', Auth::guard('reseller')->user()->id)->latest('id')->get(),
        ];
        return view('reseller.pages.nfc-card.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reseller.pages.nfc-card.create');
    }

    public function store(NfcCardRequest $request)
    {
        // Generate NFC code
        $code = $this->generateNfcCode();


        // Image Upload
        $files = [
            'banner_image' => $request->file('banner_image'),
            'profile_image' => $request->file('profile_image'),
            'service_one_image' => $request->file('service_one_image'),
            'service_two_image' => $request->file('service_two_image'),
            'service_three_image' => $request->file('service_three_image'),
        ];

        $filePath = 'public/nfc/';
        // $filePath = storage_path('app/public/nfc/' . $code . '/'); // Corrected $filePath

        $uploadedFiles = [];
        foreach ($files as $key => $file) {
            if (!empty($file)) {
                $uploadedFiles[$key] = customUpload($file, $filePath, $name= $code.'_'.$key);
                if ($uploadedFiles[$key]['status'] === 0) {
                    return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                }
            } else {
                $uploadedFiles[$key] = ['status' => 0];
            }
        }




        // Generate NFC URL and QR code
        $nfc_url = route('nfc.page', ['name' => $request->first_name . '-' . $request->last_name, 'code' => $code]);

        $qrCodeString = '';

        $qrFileName = $code . '_nfc_qr.png';
        $qrCodePath = '../public/storage/nfc/qrs/' . $qrFileName;
        // Generate QR code
        $qrCodeString = QrCode::size(300)->format('png')->margin(2)->errorCorrection('H')->encoding('UTF-8')->generate($nfc_url, $qrCodePath);
        // Save the QR code to storage

        // Storage::put($qrCodePath, $qrCodeString);
        // $field . '_url' => asset('storage/qr_codes/' . $format . '/' . $qrFileName)

        // Create NFC card
        $nfc_card = NfcCard::create([
            'reseller_id'        => Auth::guard('reseller')->user()->id,
            'code'               => $code,
            'nfc_type'           => $request->nfc_type,
            'nfc_template'       => $request->nfc_template,
            'primary_color'      => $request->primary_color,
            'text_color'         => $request->text_color,
            'title_color'        => $request->title_color,
            'background_color'   => $request->background_color,
            'button_bg_color'    => $request->button_bg_color,
            'button_title_color' => $request->button_title_color,
            'frame_color'        => $request->frame_color,
            'font_family'        => $request->font_family,
            'font_size'          => $request->font_size,
            'nfc_qr'             => $qrFileName,
            'nfc_url'            => $nfc_url,
            'scan_count'         => $request->scan_count,
            'created_at'         => Carbon::now(),
        ]);

        // Upload images

        $nfc_data = NfcData::create([
            'card_id'                     => $nfc_card->id,
            'banner_image'                => $uploadedFiles['banner_image']['status'] == 1 ? $uploadedFiles['banner_image']['file_name'] : null,
            'profile_image'               => $uploadedFiles['profile_image']['status'] == 1 ? $uploadedFiles['profile_image']['file_name'] : null,
            'service_one_image'           => $uploadedFiles['service_one_image']['status'] == 1 ? $uploadedFiles['service_one_image']['file_name'] : null,
            'service_two_image'           => $uploadedFiles['service_two_image']['status'] == 1 ? $uploadedFiles['service_two_image']['file_name'] : null,
            'service_three_image'         => $uploadedFiles['service_three_image']['status'] == 1 ? $uploadedFiles['service_three_image']['file_name'] : null,
            'first_name'                  => $request->first_name,
            'last_name'                   => $request->last_name,
            'designation'                 => $request->designation,
            'address_line_one'            => $request->address_line_one,
            'address_line_two'            => $request->address_line_two,
            'phone_work'                  => $request->phone_work,
            'phone_personal'              => $request->phone_personal,
            'email_work'                  => $request->email_work,
            'email_personal'              => $request->email_personal,
            'facebook_url'                => $request->facebook_url,
            'instagram_url'               => $request->instagram_url,
            'twitter_url'                 => $request->twitter_url,
            'youtube_url'                 => $request->youtube_url,
            'google_url'                  => $request->google_url,
            'pinterest_url'               => $request->pinterest_url,
            'linkedin_url'                => $request->linkedin_url,
            'google_plus_url'             => $request->google_plus_url,
            'gmail_url'                   => $request->gmail_url,
            'apple_url'                   => $request->apple_url,
            'bio_title'                   => $request->bio_title,
            'bio_description'             => $request->bio_description,
            'service_section_title'       => $request->service_section_title,
            'service_section_description' => $request->service_section_description,
            'service_one_title'           => $request->service_one_title,
            'service_one_description'     => $request->service_one_description,
            'service_two_title'           => $request->service_two_title,
            'service_two_description'     => $request->service_two_description,
            'service_three_title'         => $request->service_three_title,
            'service_three_description'   => $request->service_three_description,
            'company_title'               => $request->company_title,
            'company_name'                => $request->company_name,
            'company_address_line_one'    => $request->company_address_line_one,
            'company_address_line_two'    => $request->company_address_line_two,
            'company_email'               => $request->company_email,
            'company_about_title'         => $request->company_about_title,
            'company_about_description'   => $request->company_about_description,
            'qr_code'                     => $request->qr_code,
            'created_at'                  => Carbon::now(),
        ]);

        return redirect()->route('user.nfc-card.index')->with('success', 'NFC Created successfully.');
    }

    private function generateNfcCode()
    {
        $typePrefix = 'NFC'; // Example prefix
        $today = now()->format('dmY');
        $userId = Auth::user()->id;
        $lastCode = NfcCard::where('code', 'like', $typePrefix . $today . $userId . '%')->orderByDesc('id')->first();
        $newNumber = $lastCode ? (int)substr($lastCode->code, -2) + 1 : 1;
        
        return $typePrefix . $today . $userId . str_pad($newNumber, 2, '0', STR_PAD_LEFT);
    }




    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        return view('user.pages.nfc-card.edit');
    }


    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        $nfc = NfcCard::findOrFail($id);
        $folderPath = storage_path('app/public/nfc/' . $nfc->code);
        if (File::exists($folderPath)) {
            File::deleteDirectory($folderPath);
        }
        $nfc->delete();
        $nfc_data = NfcData::where('card_id', $id)->first();
        if (!empty($nfc_data)) {
            $nfc_data->delete();
        }
    }

    public function updateNFCTemplateSession(Request $request)
    {
        $nfcTemplateValue = $request->input('nfc_template');
        Session::forget('nfc_template');
        Session::put('nfc_template', $nfcTemplateValue);

        return response()->json(['success' => true]);
    }
}
