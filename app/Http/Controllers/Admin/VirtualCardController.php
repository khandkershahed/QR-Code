<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\NfcScan;
use App\Models\Admin\NfcData;
use App\Models\Subscription;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Stevebauman\Location\Facades\Location;
use App\Http\Requests\Admin\NfcCardRequest;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;
use App\Models\Admin\NfcCard;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class VirtualCardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;
        $user = Auth::user();
        $subscription = $isUserRoute
            ? Subscription::with('plan')->where('user_id', $user->id)
            ->whereHas('plan', function ($query) {
                $query->where('type', 'nfc');
            })->active()->first()
            : null;
        $nfc_cards = $isUserRoute
            ? NfcCard::with('nfcData', 'nfcMessages', 'virtualCard', 'shippingDetails')->where('user_id', $user->id)->latest('id')->get()
            : NfcCard::with('nfcData', 'nfcMessages', 'virtualCard', 'shippingDetails')->latest('id')->get();

        $view = $isUserRoute ? 'user.pages.nfc-card.index' : 'admin.pages.nfc-card.index';

        return view($view, [
            'nfc_cards' => $nfc_cards,
            'subscription' => $subscription,
        ]);
    }


    public function create(Request $request)
    {

        $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;

        $user = Auth::user();

        $createdAtPlus14Days = Carbon::parse($user->created_at)->addDays(14);
        $today = Carbon::now();

        $subscription = $isUserRoute
            ? Subscription::with('plan')->where('user_id', $user->id)
            ->whereHas('plan', function ($query) {
                $query->where('type', 'nfc');
            })->active()->first()
            : null;

        // Retrieve NFC cards
        $nfc_cards = $isUserRoute
            ? NfcCard::with('nfcData', 'nfcMessages', 'virtualCard', 'shippingDetails')->where('user_id', $user->id)->latest('id')->get()
            : NfcCard::with('nfcData', 'nfcMessages', 'virtualCard', 'shippingDetails')->latest('id')->get();

        if ($isUserRoute) {
            if (!empty($subscription->plan)) {
                // Check if the user has remaining NFC cards in their subscription plan
                if ($subscription->plan->nfc - $nfc_cards->count() > 0) {
                    $view = $isUserRoute ? 'user.pages.nfc-card.create' : 'admin.pages.nfc-card.create';
                    return view($view);
                } else {
                    session()->flash('nfcExceededModal', true);
                    return redirect()->back();
                    // return redirect()->back()->with('error', 'Your NFC Card limitation is exceeded');
                }
            } else {
                // Check if the user has not exceeded the NFC card limit or if 14 days have passed since account creation
                // if (10 - $nfc_cards->count() > 0 || $createdAtPlus14Days->lessThan($today)) {
                //     $view = $isUserRoute ? 'user.pages.nfc-card.create' : 'admin.pages.nfc-card.create';
                //     return view($view);
                // } else {
                //     session()->flash('nfcExceededModal', true);
                //     return redirect()->back();
                //     return redirect()->back()->with('error', 'Your NFC Card limitation is exceeded');
                // }
                session()->flash('nfcExceededModal', true);
                    return redirect()->back();
            }
        } else {
            return view('admin.pages.nfc-card.create');
        }
    }

    public function nfcTemplate()
    {
        $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;
        $view = $isUserRoute ? 'user.pages.template.nfc_template' : 'admin.pages.template.nfc_template';
        return view($view);
    }


    public function store(NfcCardRequest $request)
    {
        $code = $this->generateNfcCode();

        $files = [
            'banner_image' => $request->file('banner_image'),
            'profile_image' => $request->file('profile_image'),
        ];

        $filePath = 'public/nfc/';

        $uploadedFiles = [];
        foreach ($files as $key => $file) {
            if (!empty($file)) {
                $uploadedFiles[$key] = customUpload($file, $filePath, $name = $code . '_' . $key);
                if ($uploadedFiles[$key]['status'] === 0) {
                    return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                }
            } else {
                $uploadedFiles[$key] = ['status' => 0];
            }
        }

        $nfc_url = route('nfc.page', ['name' => $request->url_alias]);

        $qrFileName = $code . '_nfc_qr.png';
        $qrCodePath = '../public/storage/nfc/qrs/' . $qrFileName;

        QrCode::size(300)->format('png')->margin(2)->errorCorrection('H')->encoding('UTF-8')->generate($nfc_url, $qrCodePath);

        $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;
        $userId = $isUserRoute ? Auth::user()->id : null;

        $nfc_card = NfcCard::create([
            'user_id'            => $userId,
            'reseller_id'        => $request->reseller_id,
            'code'               => $code,
            'nfc_type'           => $request->nfc_type,
            'url_alias'          => $request->url_alias,
            'vcard_name'         => $request->vcard_name,
            'slug'               => $request->slug,
            'banner_image'       => $uploadedFiles['banner_image']['status']  == 1 ? $uploadedFiles['banner_image']['file_name']  : null,
            'profile_image'      => $uploadedFiles['profile_image']['status'] == 1 ? $uploadedFiles['profile_image']['file_name'] : null,
            'designation'        => $request->designation,
            'bio_description'    => $request->bio_description,
            'nfc_template'       => !empty($request->nfc_template) ? $request->nfc_template : 'template_one',
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

        session()->forget('error');
        if ($isUserRoute) {
            return redirect()->route('user.virtual-card.edit', $nfc_card->code);
            // return response()->json(['redirect' => route('user.virtual-card.edit',$nfc_card->code)]);
        } else {
            // return response()->json(['redirect' => route('admin.virtual-card.edit',$nfc_card->code)]);
            return redirect()->route('admin.virtual-card.edit', $nfc_card->code);
        }
    }


    // public function store(NfcCardRequest $request)
    // {

    //     $code = $this->generateNfcCode();


    //     $files = [
    //         'banner_image'        => $request->file('banner_image'),
    //         'profile_image'       => $request->file('profile_image'),
    //         'service_one_image'   => $request->file('service_one_image'),
    //         'service_two_image'   => $request->file('service_two_image'),
    //         'service_three_image' => $request->file('service_three_image'),
    //         'card_logo'           => $request->file('card_logo'),
    //         'card_bg_front'       => $request->file('card_bg_front'),
    //         'card_bg_back'        => $request->file('card_bg_back'),
    //     ];

    //     $filePath = 'public/nfc/';

    //     $uploadedFiles = [];
    //     foreach ($files as $key => $file) {
    //         if (!empty($file)) {
    //             $uploadedFiles[$key] = customUpload($file, $filePath, $name = $code . '_' . $key);
    //             if ($uploadedFiles[$key]['status'] === 0) {
    //                 return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
    //             }
    //         } else {
    //             $uploadedFiles[$key] = ['status' => 0];
    //         }
    //     }

    //     $nfc_url = route('nfc.page', ['name' => $request->first_name . '-' . $request->last_name, 'code' => $code]);

    //     $qrCodeString = '';

    //     $qrFileName = $code . '_nfc_qr.png';
    //     $qrCodePath = '../public/storage/nfc/qrs/' . $qrFileName;

    //     $qrCodeString = QrCode::size(300)->format('png')->margin(2)->errorCorrection('H')->encoding('UTF-8')->generate($nfc_url, $qrCodePath);

    //     $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;
    //     $userId = $isUserRoute ? Auth::user()->id : null;

    //     $nfc_card = NfcCard::create([
    //         'user_id'            => $userId,
    //         'code'               => $code,
    //         'nfc_type'           => $request->nfc_type,
    //         'nfc_template'       => $request->nfc_template,
    //         'primary_color'      => $request->primary_color,
    //         'text_color'         => $request->text_color,
    //         'title_color'        => $request->title_color,
    //         'background_color'   => $request->background_color,
    //         'button_bg_color'    => $request->button_bg_color,
    //         'button_title_color' => $request->button_title_color,
    //         'frame_color'        => $request->frame_color,
    //         'font_family'        => $request->font_family,
    //         'font_size'          => $request->font_size,
    //         'nfc_qr'             => $qrFileName,
    //         'nfc_url'            => $nfc_url,
    //         'scan_count'         => $request->scan_count,
    //         'created_at'         => Carbon::now(),
    //     ]);


    //     $nfc_data = NfcData::create([
    //         'card_id'                     => $nfc_card->id,
    //         'banner_image'                => $uploadedFiles['banner_image']['status'] == 1 ? $uploadedFiles['banner_image']['file_name'] : null,
    //         'profile_image'               => $uploadedFiles['profile_image']['status'] == 1 ? $uploadedFiles['profile_image']['file_name'] : null,
    //         'service_one_image'           => $uploadedFiles['service_one_image']['status'] == 1 ? $uploadedFiles['service_one_image']['file_name'] : null,
    //         'service_two_image'           => $uploadedFiles['service_two_image']['status'] == 1 ? $uploadedFiles['service_two_image']['file_name'] : null,
    //         'service_three_image'         => $uploadedFiles['service_three_image']['status'] == 1 ? $uploadedFiles['service_three_image']['file_name'] : null,
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


    //     session()->forget('error');
    //     if ($isUserRoute) {
    //         return redirect()->route('user.nfc-card.index')->with('success', 'NFC Created successfully.');
    //     } else {
    //         return redirect()->route('admin.nfc-card.index')->with('success', 'NFC Created successfully.');
    //     }
    // }

    private function generateNfcCode()
    {

        // $typePrefix = 'NFC'; // Example prefix
        // $today = now()->format('dmY');
        // $userId = Auth::user()->id;
        // $lastCode = NfcCard::where('code', 'like', $typePrefix . $today . $userId . '%')->orderByDesc('id')->first();
        // $newNumber = $lastCode ? (int)substr($lastCode->code, -2) + 1 : 1;
        // return $typePrefix . $today . $userId . str_pad($newNumber, 2, '0', STR_PAD_LEFT);

        $typePrefix = 'NFC'; // Example prefix
        $userId = Auth::user()->id;
        $lastCode = NfcCard::where('code', 'like', $typePrefix . $userId . '%')->orderByDesc('id')->first();
        $newNumber = $lastCode ? (int)substr($lastCode->code, -2) + 1 : 1;
        return $typePrefix . $userId . str_pad($newNumber, 2, '0', STR_PAD_LEFT);
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $maps = NfcScan::where('nfc_code', $id)->get(['ip_address']);
        $unique_ips = $maps->unique('ip_address');

        $users = [];
        foreach ($unique_ips as $unique_ip) {
            $unique_ip = $unique_ip->ip_address;
            $user = Location::get($unique_ip);
            $users[] = $user;
        }
        $locations = [];
        foreach ($maps as $map) {
            $ip = $map->ip_address;
            $location = Location::get($ip);
            $locations[] = $location;
        }

        $cities = [];
        $totalScans = count($maps);

        foreach ($locations as $map) {

            if ($map) {
                $city = $map->cityName ?? 'Not Available';

                if (!isset($cities[$city])) {
                    $cities[$city] = [
                        'state_province' => $map->regionName,
                        'country' => $map->countryName,
                        'scans' => 1,
                    ];
                } else {
                    $cities[$city]['scans']++;
                }
            }
        }

        $data = [
            'nfc_card'   => NfcCard::with('nfcData', 'nfcMessages', 'nfcScan', 'virtualCard')->where('code', $id)->first(),
            'maps'       => $maps,
            'locations'  => $locations,
            'cities'     => $cities,
            'totalScans' => $totalScans,
            'users'      => $users,
        ];
        $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;
        $view = $isUserRoute ? 'user.pages.nfc-card.show' : 'admin.pages.nfc-card.show';
        return view($view, $data);
        // return view('user.pages.nfc-card.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;
        if ($isUserRoute) {
            $data = [
                'nfc_card' => NfcCard::with(
                    'nfcData',
                    'nfcMessages',
                    'virtualCard',
                    'shippingDetails',
                    'nfcCompany',
                    'nfcGallery',
                    'nfcProduct',
                    'nfcService',
                    'nfcTestimonial'
                )->where('user_id', Auth::user()->id)->where('code', $id)->first(),
            ];
            if (!empty($data['nfc_card'])) {
                return view('user.pages.nfc-card.edit', $data);
            } else {
                return redirect()->back()->with('error', 'No Such NFC Card found');
            }
        } else {
            $data = [
                'nfc_card' => NfcCard::with(
                    'nfcData',
                    'nfcCompany',
                    'nfcGallery',
                    'nfcProduct',
                    'nfcService',
                    'nfcTestimonial',
                    'nfcMessages',
                    'nfcScan',
                    'virtualCard',
                    'nfcBanner',
                    'nfcSeo',
                    'shippingDetails'
                )->where('code', $id)->first(),
            ];
            if (!empty($data['nfc_card'])) {
                return view('admin.pages.nfc-card.edit', $data);
            } else {
                return redirect()->back()->with('error', 'No Such NFC Card found');
            }
        }
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(NfcCardRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
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

    // public function checkUrlAlias(Request $request)
    // {
    //     $urlAlias = $request->query('url_alias');
    //     $isUnique = !NfcCard::where('url_alias', $urlAlias)->exists();

    //     return response()->json(['is_unique' => $isUnique]);
    // }
    public function checkUrlAlias(Request $request)
    {
        $urlAlias = $request->query('url_alias');
        $id = $request->query('card_id');

        // Check if url_alias is unique, excluding the current record if updating
        $query = NfcCard::where('url_alias', $urlAlias);
        if ($id) {
            $query->where('id', '!=', $id);
        }

        $isUnique = !$query->exists();

        return response()->json(['is_unique' => $isUnique]);
    }
}
