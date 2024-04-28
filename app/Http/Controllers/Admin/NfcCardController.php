<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Admin\NfcCard;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\NfcCardRequest;
use App\Models\Admin\NfcData;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class NfcCardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.pages.nfc-card.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.pages.nfc-card.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(NfcCardRequest $request)
    // {
    //     $typePrefix = 'NFC'; // Example prefix
    //     $today = date('dmY');
    //     $userId = Auth::user()->id;
    //     $lastCode = NfcCard::where('code', 'like', $typePrefix . $today . $userId . '%')->orderBy('id', 'desc')->first();
    //     $newNumber = $lastCode ? (int)substr($lastCode->code, -1) + 1 : 1;
    //     $code = $typePrefix . $today . $userId . $newNumber;


    //     $name = $request->first_name . '-' . $request->last_name;
    //     $nfc_url = route('nfc.page', ['name' => $name, 'code' => $code]);
    //     $qrCodeString = QrCode::size(300)->generate($nfc_url);
    //     $qrFileName = $code . '_nfc_qr.png';
    //     $qrCodePath = 'public/nfc/' . $code . '/' . $qrFileName;
    //     Storage::put($qrCodePath, $qrCodeString);

    //     $name = $request->first_name . '-' . $request->last_name;
    //     $nfc_url = route('nfc.page', ['name' => $name, 'code' => $code]);

    //     // Generate QR code
    //     $qrCodeString = QrCode::size(300)->format('png')->generate($nfc_url); // Specify the format as PNG
    //     // Define QR code file path
    //     $qrFileName = $code . '_nfc_qr.png';
    //     $qrCodePath = 'public/nfc/' . $code . '/' . $qrFileName; // Append the file name to the path
    //     // Store QR code image
    //     Storage::put($qrCodePath, $qrCodeString);

    //     $nfc_card = NfcCard::create([
    //         'user_id'          => Auth::user()->id,
    //         'code'             => $code,
    //         'nfc_type'         => $request->nfc_type,
    //         'nfc_template'     => $request->nfc_template,
    //         'primary_color'    => $request->primary_color,
    //         'text_color'       => $request->text_color,
    //         'title_color'      => $request->title_color,
    //         'background_color' => $request->background_color,
    //         'button_color'     => $request->button_color,
    //         'frame_color'      => $request->frame_color,
    //         'font_family'       => $request->font_family,
    //         'font_size'        => $request->font_size,
    //         'nfc_qr'           => $qrFileName,
    //         'nfc_url'          => $nfc_url,
    //         'scan_count'       => $request->scan_count,
    //         'created_at'       => Carbon::now(),
    //     ]);

    //     if ($request->hasFile('banner_image')) {
    //         $bannerImage = $request->file('banner_image');
    //         if ($bannerImage->isValid()) {
    //             $bannerImageFileName = 'banner_image.' . $bannerImage->getClientOriginalExtension();
    //             $bannerImagePath = 'public/nfc/' . $code . '/' . $bannerImageFileName;
    //             Storage::put($bannerImagePath, $bannerImage);
    //         }
    //     }

    //     if ($request->hasFile('profile_image')) {
    //         $profileImage = $request->file('profile_image');
    //         if ($profileImage->isValid()) {
    //             $profileImageFileName = 'profile_image.' . $profileImage->getClientOriginalExtension();
    //             $profileImagePath = 'public/nfc/' . $code . '/' . $profileImageFileName;
    //             Storage::put($profileImagePath, $profileImage);
    //         }
    //     }

    //     // Handle service one image upload
    //     if ($request->hasFile('service_one_image')) {
    //         $serviceOneImage = $request->file('service_one_image');
    //         if ($serviceOneImage->isValid()) {
    //             $serviceOneImageFileName = 'service_one_image.' . $serviceOneImage->getClientOriginalExtension();
    //             $serviceOneImagePath = 'public/nfc/' . $code . '/' . $serviceOneImageFileName;
    //             Storage::put($serviceOneImagePath, $serviceOneImage);
    //         }
    //     }

    //     // Handle service two image upload
    //     if ($request->hasFile('service_two_image')) {
    //         $serviceTwoImage = $request->file('service_two_image');
    //         if ($serviceTwoImage->isValid()) {
    //             $serviceTwoImageFileName = 'service_two_image.' . $serviceTwoImage->getClientOriginalExtension();
    //             $serviceTwoImagePath = 'public/nfc/' . $code . '/' . $serviceTwoImageFileName;
    //             Storage::put($serviceTwoImagePath, $serviceTwoImage);
    //         }
    //     }

    //     // Handle service three image upload
    //     if ($request->hasFile('service_three_image')) {
    //         $serviceThreeImage = $request->file('service_three_image');
    //         if ($serviceThreeImage->isValid()) {
    //             $serviceThreeImageFileName = 'service_three_image.' . $serviceThreeImage->getClientOriginalExtension();
    //             $serviceThreeImagePath = 'public/nfc/' . $code . '/' . $serviceThreeImageFileName;
    //             Storage::put($serviceThreeImagePath, $serviceThreeImage);
    //         }
    //     }

    //     $nfc_data = NfcData::create([
    //         'card_id'                     => $nfc_card->id,
    //         'banner_image'                => $bannerImageFileName,
    //         'profile_image'               => $profileImageFileName,
    //         'service_one_image'           => $serviceOneImageFileName,
    //         'service_two_image'           => $serviceTwoImageFileName,
    //         'service_three_image'         => $serviceThreeImageFileName,
    //         'first_name'                  => $request->first_name,
    //         'last_name'                   => $request->last_name,
    //         'designation'                 => $request->designation,
    //         'address_line_one'            => $request->address_line_one,
    //         'address_line_two'            => $request->address_line_two,
    //         'phone_work'                  => $request->phone_work,
    //         'phone_personal'              => $request->phone_personal,
    //         'email_work'                  => $request->email_work,
    //         'email_personal'              => $request->email_personal,
    //         'facebook_url'                => $request->facebook_url,
    //         'instagram_url'               => $request->instagram_url,
    //         'twitter_url'                 => $request->twitter_url,
    //         'youtube_url'                 => $request->youtube_url,
    //         'google_url'                  => $request->google_url,
    //         'pinterest_url'               => $request->pinterest_url,
    //         'linkedin_url'                => $request->linkedin_url,
    //         'google_plus_url'             => $request->google_plus_url,
    //         'gmail_url'                   => $request->gmail_url,
    //         'apple_url'                   => $request->apple_url,
    //         'bio_title'                   => $request->bio_title,
    //         'bio_description'             => $request->bio_description,
    //         'service_section_title'       => $request->service_section_title,
    //         'service_section_description' => $request->service_section_description,
    //         'service_one_title'           => $request->service_one_title,
    //         'service_one_description'     => $request->service_one_description,
    //         'service_two_title'           => $request->service_two_title,
    //         'service_two_description'     => $request->service_two_description,
    //         'service_three_title'         => $request->service_three_title,
    //         'service_three_description'   => $request->service_three_description,
    //         'company_title'               => $request->company_title,
    //         'company_name'                => $request->company_name,
    //         'company_address_line_one'    => $request->company_address_line_one,
    //         'company_address_line_two'    => $request->company_address_line_two,
    //         'company_email'               => $request->company_email,
    //         'company_about_title'         => $request->company_about_title,
    //         'company_about_description'   => $request->company_about_description,
    //         'qr_code'                     => $request->qr_code,
    //         'created_at'                  => Carbon::now(),
    //     ]);

    //     return redirect()->back()->with('success', 'NFC Created successfully.');

    // }

    public function store(NfcCardRequest $request)
    {
        // Generate NFC code
        $code = $this->generateNfcCode();

        // Generate NFC URL and QR code
        $nfc_url = route('nfc.page', ['name' => $request->first_name . '-' . $request->last_name, 'code' => $code]);
        $qrCodeString = QrCode::size(300)->format('png')->generate($nfc_url);
        $qrFileName = $code . '_nfc_qr.png';
        $qrCodePath = 'public/nfc/' . $code . '/' . $qrFileName;
        Storage::put($qrCodePath, $qrCodeString);

        // Create NFC card
        $nfc_card = NfcCard::create([
            'user_id'          => Auth::user()->id,
            'code'             => $code,
            'nfc_type'         => $request->nfc_type,
            'nfc_template'     => $request->nfc_template,
            'primary_color'    => $request->primary_color,
            'text_color'       => $request->text_color,
            'title_color'      => $request->title_color,
            'background_color' => $request->background_color,
            'button_color'     => $request->button_color,
            'frame_color'      => $request->frame_color,
            'font_family'      => $request->font_family,
            'font_size'        => $request->font_size,
            'nfc_qr'           => $qrFileName,
            'nfc_url'          => $nfc_url,
            'scan_count'       => $request->scan_count,
            'created_at'       => Carbon::now(),
        ]);

        // Upload images
        $this->uploadImage($request->file('banner_image'), 'banner_image', $code);
        $this->uploadImage($request->file('profile_image'), 'profile_image', $code);
        $this->uploadImage($request->file('service_one_image'), 'service_one_image', $code);
        $this->uploadImage($request->file('service_two_image'), 'service_two_image', $code);
        $this->uploadImage($request->file('service_three_image'), 'service_three_image', $code);

        // Create NFC data
        $nfc_data = NfcData::create([
            'card_id'                     => $nfc_card->id,
            'banner_image'                => $request->file('banner_image') ? 'banner_image.' . $request->file('banner_image')->getClientOriginalExtension() : null,
            'profile_image'               => $request->file('profile_image') ? 'profile_image.' . $request->file('profile_image')->getClientOriginalExtension() : null,
            'service_one_image'           => $request->file('service_one_image') ? 'service_one_image.' . $request->file('service_one_image')->getClientOriginalExtension() : null,
            'service_two_image'           => $request->file('service_two_image') ? 'service_two_image.' . $request->file('service_two_image')->getClientOriginalExtension() : null,
            'service_three_image'         => $request->file('service_three_image') ? 'service_three_image.' . $request->file('service_three_image')->getClientOriginalExtension() : null,
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

        return redirect()->back()->with('success', 'NFC Created successfully.');
    }

    private function generateNfcCode()
    {
        $typePrefix = 'NFC'; // Example prefix
        $today = now()->format('dmY');
        $userId = Auth::user()->id;
        $lastCode = NfcCard::where('code', 'like', $typePrefix . $today . $userId . '%')->orderByDesc('id')->first();
        $newNumber = $lastCode ? (int)substr($lastCode->code, -1) + 1 : 1;
        return $typePrefix . $today . $userId . $newNumber;
    }

    private function uploadImage($file, $fieldName, $code)
    {
        if ($file && $file->isValid()) {
            $fileName = $fieldName . '.' . $file->getClientOriginalExtension();
            $filePath = 'public/nfc/' . $code . '/' . $fileName;
            Storage::put($filePath, $file);
        }
    }






    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('user.pages.nfc-card.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function updateNFCTemplateSession(Request $request)
    {
        $nfcTemplateValue = $request->input('nfc_template');
        Session::forget('nfc_template');
        Session::put('nfc_template', $nfcTemplateValue);

        return response()->json(['success' => true]);
    }
}
