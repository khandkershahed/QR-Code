<?php

namespace App\Http\Controllers\Admin;

// use Image;
use Carbon\Carbon;
// use App\Models\Admin\QrCode;
use App\Models\Admin\Qr;
use Illuminate\Support\Str;
use Jenssegers\Agent\Agent;
use App\Models\Admin\QrData;
use App\Models\Admin\QrScan;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Models\RestaurantCategory;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SimpleSoftwareIO\QrCode\Generator;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\QrCodeRequest;
use Stevebauman\Location\Facades\Location;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Intervention\Image\ImageManagerStatic as Image;
use Intervention\Image\Exception\NotReadableException;

class QrCodeController extends Controller
{
    public function index(Request $request)
    {
        $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;
        $user = Auth::user();
        $subscription = $isUserRoute ? Subscription::with('plan')->where('user_id', $user->id)->active()->first() : null;
        $qrs = $isUserRoute ?
            Qr::with('qrData', 'qrScan')->where('user_id', $user->id)->latest('id')->get() :
            Qr::with('qrData', 'qrScan')->latest('id')->get();

        $view = $isUserRoute ? 'user.pages.qr-code.index' : 'admin.pages.qr-code.index';

        // dd($user->subscribed());
        return view($view, [
            'qrs' => $qrs,
            'subscription' => $subscription,
        ]);
    }

    public function create()
    {
        $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;

        $user = Auth::user();

        $createdAtPlus14Days = Carbon::parse($user->created_at)->addDays(14);
        $today = Carbon::now();

        $subscription = $isUserRoute ? Subscription::with('plan')->where('user_id', $user->id)->active()->first() : null;

        // Retrieve QR codes
        $qrs = $isUserRoute
            ? Qr::with('qrData', 'qrScan')->where('user_id', $user->id)->latest('id')->get()
            : Qr::with('qrData', 'qrScan')->latest('id')->get();
        $categories = $isUserRoute
            ? RestaurantCategory::where('user_id', Auth::user()->id)->latest('id')->get()
            : RestaurantCategory::latest('id')->get();
        if ($isUserRoute) {
            if (!empty($subscription->plan)) {
                // Check if the user has remaining QR codes in their subscription plan
                if ($subscription->plan->qr - $qrs->count() > 0) {

                    $view = $isUserRoute ? 'user.pages.qr-code.create' : 'admin.pages.qr-code.create';
                    return view($view, ['categories' => $categories]);
                } else {
                    return redirect()->back()->with('error', 'Your QR limitation is exceeded');
                }
            } else {
                // Check if the user has not exceeded the QR code limit or if 14 days have passed since account creation
                if (10 - $qrs->count() > 0 || $createdAtPlus14Days->lessThan($today)) {
                    $categories = $isUserRoute
                        ? RestaurantCategory::where('user_id', Auth::user()->id)->latest('id')->get()
                        : RestaurantCategory::latest('id')->get();
                    $view = $isUserRoute ? 'user.pages.qr-code.create' : 'admin.pages.qr-code.create';
                    return view($view, ['categories' => $categories]);
                } else {
                    return redirect()->back()->with('error', 'Your QR limitation is exceeded');
                }
            }
        } else {
            return view('admin.pages.qr-code.create', ['categories' => $categories]);
        }
    }

    public function qrTemplate()
    {
        $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;
        $view = $isUserRoute ? 'user.pages.template.qr_template' : 'admin.pages.template.qr_template';
        return view($view);
        // return view('admin.pages.template.qr_template');
    }


    public function qrSummary($Qr)
    {

        $qr = Qr::with('qrData')->where('code', $Qr)->first();
        $maps = QrScan::where('qr_code', $Qr)->get(['ip_address']);
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
            $city = $map->cityName;
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

        // dd($cities);
        return view('user.pages.qr-code.qrSummary', compact('qr', 'maps', 'locations', 'cities', 'totalScans', 'users'));
    }


    public function showQr(Request $request, string $Qr)
    {
        $agent = new Agent();
        if ($agent->isDesktop()) {
            $user_device = $agent->browser();
        } else {
            $user_device = $agent->device();
        }
        $qr = Qr::with('qrData')->where('code', $Qr)->first();

        if (!empty($qr)) {
            QrScan::create([
                'code_id'    => $qr->id,
                'qr_code'    => $qr->code,
                'ip_address' => $request->ip(),
                'user_device' => $user_device,
            ]);
            if (!empty($qr->qrData->qr_data_website_url)) {
                return redirect()->to($qr->qrData->qr_data_website_url);
            } elseif (!empty($qr->qrData->qr_data_call_number)) {
                $phoneNumber = $qr->qrData->qr_data_call_number;
                $telUri = 'tel:' . $phoneNumber;
                return redirect()->to($telUri);
            } elseif (!empty($qr->qrData->qr_data_sms_number) && !empty($qr->qrData->qr_data_sms_message)) {
                $phoneNumber = $qr->qrData->qr_data_sms_number;
                $smsMessage = $qr->qrData->qr_data_sms_message;
                $smsUrl = 'sms:' . $phoneNumber . '?body=' . urlencode($smsMessage);
                return redirect()->to($smsUrl);
            } elseif (!empty($qr->qrData->qr_data_email_id)) {
                $emailId = $qr->qrData->qr_data_email_id;
                $subject = $qr->qrData->qr_data_email_subject ?? '';
                $body = $qr->qrData->qr_data_email_body ?? '';
                $mailtoUrl = 'mailto:' . $emailId . '?subject=' . urlencode($subject) . '&body=' . urlencode($body);
                return redirect()->to($mailtoUrl);
            } elseif (!empty($qr->qrData->qr_app_android)) {
                $androidAppLink = $qr->qrData->qr_app_android;
                return redirect()->to($androidAppLink);
            } elseif (!empty($qr->qrData->qr_data_app_iphone)) {
                $iosAppLink = $qr->qrData->qr_data_app_iphone;
                return redirect()->to($iosAppLink);
            } elseif (!empty($qr->qrData->qr_data_app_ipad)) {
                $ipadAppLink = $qr->qrData->qr_data_app_ipad;
                return redirect()->to($ipadAppLink);
            } elseif (!empty($qr->qrData->qr_data_audio_file) || !empty($qr->qrData->qr_data_audio_link)) {
                return view('user.pages.qr-code.qrFile', compact('qr'));
            } elseif (!empty($qr->qrData->qr_data_location_latitude) && !empty($qr->qrData->qr_data_location_longitude)) {
                $latitude = $qr->qrData->qr_data_location_latitude;
                $longitude = $qr->qrData->qr_data_location_longitude;
                $userAgent = $request->header('User-Agent');
                $isMobile = preg_match("/(android|iphone|ipod|ipad)/i", $userAgent);

                if ($isMobile) {
                    $redirectUrl = "geo:{$latitude},{$longitude}";
                } else {
                    $redirectUrl = "https://www.google.com/maps?q={$latitude},{$longitude}";
                }

                return redirect()->to($redirectUrl);
            } elseif (!empty($qr->qr_type) && $qr->qr_type == 'coupon_code') {
                return view('user.pages.qr-code.show.qrCoupon', compact('qr'));
            } elseif (!empty($qr->qr_type) && $qr->qr_type == 'social') {
                return view('user.pages.qr-code.show.qrSocial', compact('qr'));
            } elseif (!empty($qr->qr_type) && $qr->qr_type == 'business_page') {
                return view('user.pages.qr-code.show.qrBusinessPage', compact('qr'));
            } elseif (!empty($qr->qr_type) && $qr->qr_type == 'restaurant') {
                return view('user.pages.qr-code.show.qrRestaurant', compact('qr'));
            } elseif (!empty($qr->qr_type) && $qr->qr_type == 'facebook_page') {
                return view('user.pages.qr-code.show.qrFacebookPage', compact('qr'));
            } else {
                return view('user.pages.qr-code.qrFile', compact('qr'));
            }
        } else {
            return redirect()->route('homePage')->with('error', 'Sorry No Data Found');
        }
    }




    public function store(QrCodeRequest $request)
    {
        $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;

        $typePrefix = 'QR'; // Example prefix
        $today = date('dmY');
        $userId = $isUserRoute ? Auth::user()->id : null;

        // Find the last QR code generated for this user today
        $lastCode = Qr::where('code', 'like', $typePrefix . $today . $userId . '%')
            ->orderBy('id', 'desc')
            ->first();

        // Determine the new number for the QR code
        $newNumber = $lastCode ? (int)substr($lastCode->code, -2) + 1 : 1;

        // Generate the new QR code
        $code = $typePrefix . $today . $userId . str_pad($newNumber, 2, '0', STR_PAD_LEFT);




        $qr_type                 = $request->qr_type;
        $qr_template             = $request->qr_template;
        $qr_logo                 = $request->qr_logo;
        $qr_saved_logo           = $request->qr_saved_logo;
        $qr_logo_size            = $request->input('qr_logo_size', 50); // Default size if not provided
        $qr_logo_space           = $request->input('qr_logo_space', 30); // Default size if not provided
        $qr_logo_bg_color        = $this->hexToRgb($request->qr_logo_bg_color);
        $qr_eye_ball             = $request->qr_eye_ball ?? 'square';
        $qr_eye_ball_color       = $this->hexToRgb($request->qr_eye_ball_color ?? '#000000');
        $qr_eye_frame            = $request->qr_eye_frame ?? 'square';
        $qr_eye_frame_color      = $this->hexToRgb($request->qr_eye_frame_color ?? '#000000');
        $qr_pattern              = $request->qr_pattern ?? 'square';
        $qr_pattern_color        = $this->hexToRgb($request->qr_pattern_color ?? '#000000');
        $qr_color_type           = $request->qr_color_type;
        $qr_solid_color          = $this->hexToRgb($request->qr_solid_color ?? '#000000');
        $qr_gradient_color_type  = $request->qr_gradient_color_type;
        $qr_gradient_color_start = $this->hexToRgb($request->qr_gradient_color_start ?? '#000000');
        $qr_gradient_color_end   = $this->hexToRgb($request->qr_gradient_color_end ?? '#000000');
        $qr_bg_type              = $request->qr_bg_type;
        $qr_bg_color             = $this->hexToRgb($request->qr_bg_color ?? '#ffffff00');
        $qr_bg_image             = $request->qr_bg_image;
        $qr_name                 = $request->qr_name;
        $qr_scan_status          = $request->qr_scan_status;




        // Store data into the 'qrs' table
        $qr = Qr::create([
            'user_id'                 => $userId,
            'code'                    => $code,
            'qr_type'                 => $qr_type,
            'qr_template'             => $qr_template,
            'qr_saved_logo'           => $qr_saved_logo,
            'qr_logo_size'            => $qr_logo_size,
            'qr_logo_space'           => $qr_logo_space,
            'qr_logo_bg_color'        => $request->qr_logo_bg_color,
            'qr_eye_ball'             => $qr_eye_ball,
            'qr_eye_ball_color'       => $request->qr_eye_ball_color,
            'qr_eye_frame'            => $qr_eye_frame,
            'qr_eye_frame_color'      => $request->qr_eye_frame_color,
            'qr_pattern'              => $qr_pattern,
            'qr_pattern_color'        => $request->qr_pattern_color,
            'qr_color_type'           => $qr_color_type,
            'qr_solid_color'          => $request->qr_solid_color,
            'qr_gradient_color_type'  => $qr_gradient_color_type,
            'qr_gradient_color_start' => $request->qr_gradient_color_start,
            'qr_gradient_color_end'   => $request->qr_gradient_color_end,
            'qr_bg_type'              => $qr_bg_type,
            'qr_bg_color'             => $request->qr_bg_color,
            'qr_bg_image'             => $qr_bg_image,
            'qr_name'                 => $qr_name,
            'qr_scan_status'          => $qr_scan_status,
            'created_at'              => Carbon::now(),
        ]);

        // // Store data into the 'qr_data' table

        // Upload logo file if provided
        // Handle QR Logo
        if ($request->hasFile('qr_logo')) {
            $logo = $request->file('qr_logo');
            if ($logo->isValid()) {
                $code = $request->input('code');
                $originalImage = imagecreatefromstring(file_get_contents($logo->getPathname()));
                $logoWidth = imagesx($originalImage);
                $logoHeight = imagesy($originalImage);

                // Define padding size
                $padding = $qr_logo_space; // Adjust this value as needed

                // Calculate new dimensions for the image with padding
                $paddedWidth = $logoWidth + (2 * $padding);
                $paddedHeight = $logoHeight + (2 * $padding);

                // Create a new image with a light background and padding
                $background = imagecreatetruecolor($paddedWidth, $paddedHeight);
                $backgroundColor = imagecolorallocate($background,  $qr_logo_bg_color['r'], $qr_logo_bg_color['g'], $qr_logo_bg_color['b']); // Light gray color
                imagefill($background, 0, 0, $backgroundColor);

                // Calculate the position to place the original logo image with padding
                $xPosition = $padding;
                $yPosition = $padding;

                // Merge the original logo with the background
                $fileName = $qr->code . '.' . $logo->getClientOriginalExtension();
                imagecopy($background, $originalImage, $xPosition, $yPosition, 0, 0, $logoWidth, $logoHeight);

                // Save the merged image
                $logoPath = 'public/qr_codes/logos/' . $fileName;
                $logoFPath = $logo->storeAs('public/qr_codes/logos', $fileName);
                $logoFullPath = storage_path('app/' . $logoFPath);
                imagepng($background, storage_path('app/' . $logoPath));

                // Free up memory
                imagedestroy($originalImage);
                imagedestroy($background);

                // Save the logo path to the corresponding QR record
                $qr->update(['qr_logo' => $logoPath]);
            }
        }

        // Handle QR PDF
        $code = $qr->code;
        $uploadedPdfFile = '';
        if ($request->hasFile('qr_data_pdf')) {
            $pdf = $request->file('qr_data_pdf');
            if ($pdf->isValid()) {
                $filename = $code . '_pdf';
                $filepath = 'public/qr_codes/pdfs/';
                $uploadedPdfFile = customUpload($pdf, $filepath, $filename);
                // $pdfFileName = $code . '.' . $pdf->getClientOriginalExtension();
                // $pdfPath = $pdf->storeAs('public/qr_codes/pdfs', $pdfFileName);
                // // $pdfFullPath = url('/storage/qr_codes/pdfs/' . $pdfFileName);
                // $pdfFullPath = storage_path('app/' . $filepath . '/' .$filename);
            }
        } else {
            $uploadedPdfFile = ['status' => 0];
        }

        // Handle QR Data Image
        $uploadedImgFile = '';
        if ($request->hasFile('qr_data_image')) {
            $dataImage = $request->file('qr_data_image');
            if ($dataImage->isValid()) {
                $imagefilename = $code . '_image';
                $imagefilepath = 'public/qr_codes/images/';
                $uploadedImgFile = customUpload($dataImage, $imagefilepath, $imagefilename);
                // $imageFileName = $code . '.' . $dataImage->getClientOriginalExtension();
                // $dataImagePath = $dataImage->storeAs('public/qr_codes/images', $imageFileName);
                // $dataImageFullPath = url('/storage/qr_codes/images/' . $imageFileName);
            }
        } else {
            $uploadedImgFile = ['status' => 0];
        }
        $uploadedAdoFile = '';
        if ($request->hasFile('qr_data_audio_file')) {
            $dataAudio = $request->file('qr_data_audio_file');
            if ($dataAudio->isValid()) {
                $audiofilename = $code . '_audio';
                $audiofilepath = 'public/qr_codes/audios/';
                $uploadedAdoFile = customUpload($dataAudio, $audiofilepath, $audiofilename);
                // $imageFileName = $code . '.' . $dataImage->getClientOriginalExtension();
                // $dataImagePath = $dataImage->storeAs('public/qr_codes/images', $imageFileName);
                // $dataImageFullPath = url('/storage/qr_codes/images/' . $imageFileName);
            }
        } else {
            $uploadedAdoFile = ['status' => 0];
        }
        $uploadedcouponLogoFile = '';
        if ($request->hasFile('qr_data_coupon_logo')) {
            $datacoupon = $request->file('qr_data_coupon_logo');
            if ($datacoupon->isValid()) {
                $couponfilename = $code . '_coupon_logo';
                $couponfilepath = 'public/qr_codes/coupons/';
                $uploadedcouponLogoFile = customUpload($datacoupon, $couponfilepath, $couponfilename);
            }
        } else {
            $uploadedcouponLogoFile = ['status' => 0];
        }
        $uploadedsocialLogoFile = '';
        if ($request->hasFile('qr_data_social_logo')) {
            $datasocial = $request->file('qr_data_social_logo');
            if ($datasocial->isValid()) {
                $socialfilename = $code . '_social_logo';
                $socialfilepath = 'public/qr_codes/socials/';
                $uploadedsocialLogoFile = customUpload($datasocial, $socialfilepath, $socialfilename);
            }
        } else {
            $uploadedsocialLogoFile = ['status' => 0];
        }
        $uploadedsocialbgFile = '';
        if ($request->hasFile('qr_data_social_bg')) {
            $datasocial = $request->file('qr_data_social_bg');
            if ($datasocial->isValid()) {
                $socialfilename = $code . '_social_bg';
                $socialfilepath = 'public/qr_codes/socials/';
                $uploadedsocialbgFile = customUpload($datasocial, $socialfilepath, $socialfilename);
            }
        } else {
            $uploadedsocialbgFile = ['status' => 0];
        }

        $uploadedfacebook_pageLogoFile = '';
        if ($request->hasFile('qr_data_facebook_page_logo')) {
            $datafacebook_page = $request->file('qr_data_facebook_page_logo');
            if ($datafacebook_page->isValid()) {
                $facebook_pagefilename = $code . '_facebook_page_logo';
                $facebook_pagefilepath = 'public/qr_codes/facebook_pages/';
                $uploadedfacebook_pageLogoFile = customUpload($datafacebook_page, $facebook_pagefilepath, $facebook_pagefilename);
            }
        } else {
            $uploadedfacebook_pageLogoFile = ['status' => 0];
        }
        $uploadedfacebook_pagebgFile = '';
        if ($request->hasFile('qr_data_facebook_page_bg')) {
            $datafacebook_page = $request->file('qr_data_facebook_page_bg');
            if ($datafacebook_page->isValid()) {
                $facebook_pagefilename = $code . '_facebook_page_bg';
                $facebook_pagefilepath = 'public/qr_codes/facebook_pages/';
                $uploadedfacebook_pagebgFile = customUpload($datafacebook_page, $facebook_pagefilepath, $facebook_pagefilename);
            }
        } else {
            $uploadedfacebook_pagebgFile = ['status' => 0];
        }

        $uploadedbusiness_pageLogoFile = '';
        if ($request->hasFile('qr_data_business_page_logo')) {
            $databusiness_page = $request->file('qr_data_business_page_logo');
            if ($databusiness_page->isValid()) {
                $business_pagefilename = $code . '_business_page_logo';
                $business_pagefilepath = 'public/qr_codes/business_pages/';
                $uploadedbusiness_pageLogoFile = customUpload($databusiness_page, $business_pagefilepath, $business_pagefilename);
            }
        } else {
            $uploadedbusiness_pageLogoFile = ['status' => 0];
        }

        $qrDataLink = route('showQr', $qr->code);
        // Create QR Data record
        $qrData = QrData::create([
            'code_id'                                    => $qr->id,
            'qr_data_website_url'                        => $request->qr_data_website_url,
            'qr_data_pdf'                                => $uploadedPdfFile['status'] == 1 ? $uploadedPdfFile['file_name'] : null,
            'qr_data_image'                              => $uploadedImgFile['status'] == 1 ? $uploadedImgFile['file_name'] : null,
            'qr_data_image_link'                         => $request->qr_data_image_link,
            'qr_data_sms_number'                         => $request->qr_data_sms_number,
            'qr_data_sms_message'                        => $request->qr_data_sms_message,
            'qr_data_email_id'                           => $request->qr_data_email_id,
            'qr_data_email_subject'                      => $request->qr_data_email_subject,
            'qr_data_email_body'                         => $request->qr_data_email_body,
            'qr_app_android'                             => $request->qr_app_android,
            'qr_data_app_iphone'                         => $request->qr_data_app_iphone,
            'qr_data_app_ipad'                           => $request->qr_data_app_ipad,
            'qr_data_call_number'                        => $request->qr_data_call_number,
            'qr_data_location_latitude'                  => $request->qr_data_location_latitude,
            'qr_data_location_longitude'                 => $request->qr_data_location_longitude,
            'qr_data_coupon_header'                      => $request->qr_data_coupon_header,
            'qr_data_coupon_message'                     => $request->qr_data_coupon_message,
            'qr_data_coupon_description_body'            => $request->qr_data_coupon_description_body,
            'qr_data_coupon_company'                     => $request->qr_data_coupon_company,
            'qr_data_coupon_code'                        => $request->qr_data_coupon_code,
            'qr_data_coupon_logo'                        => $uploadedcouponLogoFile['status'] == 1 ? $uploadedcouponLogoFile['file_name'] : null,
            'qr_data_coupon_expire_date'                 => $request->qr_data_coupon_expire_date,
            'qr_data_coupon_description_header'          => $request->qr_data_coupon_description_header,
            'qr_data_coupon_website'                     => $request->qr_data_coupon_website,
            'qr_data_coupon_background_color'            => $request->qr_data_coupon_background_color,
            'qr_data_coupon_title_color'                 => $request->qr_data_coupon_title_color,
            'qr_data_coupon_button_bg_color'             => $request->qr_data_coupon_button_bg_color,
            'qr_data_coupon_button_title_color'          => $request->qr_data_coupon_button_title_color,
            'qr_data_coupon_policy'                      => $request->qr_data_coupon_policy,
            'qr_data_audio_file'                         => $uploadedAdoFile['status'] == 1 ? $uploadedAdoFile['file_name'] : null,
            'qr_data_audio_link'                         => $request->qr_data_audio_link,
            'qr_data_social_logo'                        => $uploadedsocialLogoFile['status'] == 1 ? $uploadedsocialLogoFile['file_name'] : null,
            'qr_data_social_header'                      => $request->qr_data_social_header,
            'qr_data_social_title'                       => $request->qr_data_social_title,
            'qr_data_social_message'                     => $request->qr_data_social_message,
            'qr_data_social_background_image'            => $uploadedsocialbgFile['status'] == 1 ? $uploadedsocialbgFile['file_name'] : null,
            'qr_data_social_facebook'                    => $request->qr_data_social_facebook,
            'qr_data_social_instagram'                   => $request->qr_data_social_instagram,
            'qr_data_social_linkedin'                    => $request->qr_data_social_linkedin,
            'qr_data_social_twitter'                     => $request->qr_data_social_twitter,
            'qr_data_social_youtube'                     => $request->qr_data_social_youtube,
            'qr_data_social_pinterest'                   => $request->qr_data_social_pinterest,
            'qr_data_social_website'                     => $request->qr_data_social_website,
            'qr_data_social_whatsapp'                    => $request->qr_data_social_whatsapp,
            'qr_data_social_snapchat'                    => $request->qr_data_social_snapchat,
            'qr_data_social_tiktok'                      => $request->qr_data_social_tiktok,
            'qr_data_facebook_page_logo'                 => $uploadedfacebook_pageLogoFile['status'] == 1 ? $uploadedfacebook_pageLogoFile['file_name'] : null,
            'qr_data_facebook_page_header'               => $request->qr_data_facebook_page_header,
            'qr_data_facebook_page_title'                => $request->qr_data_facebook_page_title,
            'qr_data_facebook_page_background_image'     => $uploadedfacebook_pagebgFile['status'] == 1 ? $uploadedfacebook_pagebgFile['file_name'] : null,
            'qr_data_facebook_page_facebook'             => $request->qr_data_facebook_page_facebook,
            'qr_data_business_page_logo'                 => $uploadedbusiness_pageLogoFile['status'] == 1 ? $uploadedbusiness_pageLogoFile['file_name'] : null,
            'qr_data_business_page_business_name'        => $request->qr_data_business_page_business_name,
            'qr_data_business_page_header'               => $request->qr_data_business_page_header,
            'qr_data_business_page_start_time_monday'    => $request->qr_data_business_page_start_time_monday,
            'qr_data_business_page_end_time_monday'      => $request->qr_data_business_page_end_time_monday,
            'qr_data_business_page_start_time_tuesday'   => $request->qr_data_business_page_start_time_tuesday,
            'qr_data_business_page_end_time_tuesday'     => $request->qr_data_business_page_end_time_tuesday,
            'qr_data_business_page_start_time_wednesday' => $request->qr_data_business_page_start_time_wednesday,
            'qr_data_business_page_end_time_wednesday'   => $request->qr_data_business_page_end_time_wednesday,
            'qr_data_business_page_start_time_thursday'  => $request->qr_data_business_page_start_time_thursday,
            'qr_data_business_page_end_time_thursday'    => $request->qr_data_business_page_end_time_thursday,
            'qr_data_business_page_start_time_friday'    => $request->qr_data_business_page_start_time_friday,
            'qr_data_business_page_end_time_friday'      => $request->qr_data_business_page_end_time_friday,
            'qr_data_business_page_start_time_saturday'  => $request->qr_data_business_page_start_time_saturday,
            'qr_data_business_page_end_time_saturday'    => $request->qr_data_business_page_end_time_saturday,
            'qr_data_business_page_start_time_sunday'    => $request->qr_data_business_page_start_time_sunday,
            'qr_data_business_page_end_time_sunday'      => $request->qr_data_business_page_end_time_sunday,
            'qr_data_business_page_website'              => $request->qr_data_business_page_website,
            'qr_data_business_page_business_email'       => $request->qr_data_business_page_business_email,
            'qr_data_business_page_business_phone'       => $request->qr_data_business_page_business_phone,
            'qr_data_business_page_business_location'    => $request->qr_data_business_page_business_location,
            'qr_data_restaurant_logo'                    => $request->qr_data_restaurant_logo,
            'qr_data_restaurant_bg'                      => $request->qr_data_restaurant_bg,
            'qr_data_restaurant_name'                    => $request->qr_data_restaurant_name,
            'qr_data_restaurant_description'             => $request->qr_data_restaurant_description,
            'qr_data_restaurant_phone'                   => $request->qr_data_restaurant_phone,
            'qr_data_restaurant_location'                => $request->qr_data_restaurant_location,
        ]);



        if ($request->hasFile('qr_logo')) {
            $formats = [
                'png' => 'qr_png',
                'jpg' => 'qr_jpg',
                'eps' => 'qr_eps',
                'pdf' => 'qr_pdf',
            ];
        } else {
            $formats = [
                'png' => 'qr_png',
                'svg' => 'qr_svg',
                'eps' => 'qr_eps',
                'jpg' => 'qr_jpg',
                'pdf' => 'qr_pdf',
            ];
        }

        // Loop through each format
        // foreach ($formats as $format => $field) {
        //     if ($format === 'jpg' || $format === 'pdf') {
        //         $qrCode = QrCode::format('png')->size(1000);
        //     } else {
        //         $qrCode = QrCode::format($format)->size(1000);
        //     }

        //     if (!empty($qr_logo)) {
        //         $qrCode->merge($logoFullPath, $qr_logo_size, true);
        //     }
        //     if (!empty($qr_saved_logo)) {
        //         $logoFullPath = '../public/frontend/images/qr_logo/' . $qr_saved_logo . '.png';
        //         $qrCode->merge($logoFullPath, $qr_logo_size, true);
        //     }
        //     if (!empty($qr_eye_ball)) {
        //         $qrCode->eye($qr_eye_ball, 0.5);
        //     }
        //     if (!empty($qr_eye_ball_color)) {
        //         $qrCode->eyeColor(0, $qr_eye_ball_color['r'], $qr_eye_ball_color['g'], $qr_eye_ball_color['b'], $qr_eye_frame_color['r'], $qr_eye_frame_color['g'], $qr_eye_frame_color['b']);
        //         $qrCode->eyeColor(1, $qr_eye_ball_color['r'], $qr_eye_ball_color['g'], $qr_eye_ball_color['b'], $qr_eye_frame_color['r'], $qr_eye_frame_color['g'], $qr_eye_frame_color['b']);
        //         $qrCode->eyeColor(2, $qr_eye_ball_color['r'], $qr_eye_ball_color['g'], $qr_eye_ball_color['b'], $qr_eye_frame_color['r'], $qr_eye_frame_color['g'], $qr_eye_frame_color['b']);
        //     }
        //     if (!empty($qr_pattern)) {
        //         if ($qr_pattern == 'square_0.5') {
        //             $qrCode->style('square', 0.3);
        //         } elseif ($qr_pattern == 'square_0.9') {
        //             $qrCode->style('square', 0.7);
        //         } else {
        //             $qrCode->style($qr_pattern);
        //         }
        //     }
        //     if (!empty($qr_color_type)) {
        //         if ($qr_color_type == 'solid_color' && !empty($qr_solid_color)) {
        //             $qrCode->color($qr_solid_color['r'], $qr_solid_color['g'], $qr_solid_color['b']);
        //         }
        //         if ($qr_color_type == 'gradient_color' && !empty($qr_gradient_color_type)) {
        //             $qrCode->gradient($qr_gradient_color_start['r'], $qr_gradient_color_start['g'], $qr_gradient_color_start['b'], $qr_gradient_color_end['r'], $qr_gradient_color_end['g'], $qr_gradient_color_end['b'], $qr_gradient_color_type);
        //         }
        //     }
        //     if (!empty($qr_bg_type)) {
        //         if ($qr_bg_type == 'color' && !empty($qr_bg_color)) {
        //             $qrCode->backgroundColor($qr_bg_color['r'], $qr_bg_color['g'], $qr_bg_color['b'], 75);
        //         }
        //     }
        //     // Determine the directory and filename
        //     $formatDirectory = 'qr_codes/qrs/' . $format;
        //     $qrFileName = $qr->code . '.' . $format;
        //     $qrCodePath = '../public/storage/' . $formatDirectory . '/' . $qrFileName;

        //     if (!Storage::exists($formatDirectory)) {
        //         Storage::makeDirectory($formatDirectory, 0775, true);
        //     }

        //     // Generate the QR code and save to file
        //     if ($format === 'pdf') {
        //         $qrCodeImageData = $qrCode->generate($qrDataLink);

        //         // Check if QR code image data is empty
        //         if (!$qrCodeImageData) {
        //             continue;
        //         }

        //         $htmlContent = '<div class="text-center"><img width="650px" src="data:image/png;base64,' . base64_encode($qrCodeImageData) . '" /></div>';

        //         // Create DomPDF instance
        //         $pdf = \App::make('dompdf.wrapper');


        //         try {
        //             $pdf->loadHTML($htmlContent, 'UTF-8');
        //         } catch (\Exception $e) {
        //             continue; // Skip PDF generation for this format
        //         }

        //         // Save PDF file to the specified path
        //         try {
        //             $pdf->save($qrCodePath);
        //         } catch (\Exception $e) {
        //             continue; // Skip PDF generation for this format
        //         }
        //     } else {
        //         // Generate QR code for non-PDF formats
        //         $qrCodeString = $qrCode->margin(4)->errorCorrection('H')->encoding('UTF-8')->generate($qrDataLink, $qrCodePath);
        //     }

        //     // Update the QR record
        //     $qr->update([
        //         $field => $qrFileName,
        //         $field . '_url' => asset('storage/' . $formatDirectory . '/' . $qrFileName)
        //     ]);
        // }

        foreach ($formats as $format => $field) {
            // Generate QR code in PNG format for JPG and PDF formats
            if ($format === 'jpg' || $format === 'pdf') {
                $qrCode = QrCode::format('png')->size(1000);
            } else {
                $qrCode = QrCode::format($format)->size(1000);
            }

            if (!empty($qr_logo)) {
                $qrCode->merge($logoFullPath, $qr_logo_size, true);
            }
            if (!empty($qr_saved_logo)) {
                $logoFullPath = '../public/frontend/images/qr_logo/' . $qr_saved_logo . '.png';
                $qrCode->merge($logoFullPath, $qr_logo_size, true);
            }
            if (!empty($qr_eye_ball)) {
                $qrCode->eye($qr_eye_ball, 0.5);
            }
            if (!empty($qr_eye_ball_color)) {
                $qrCode->eyeColor(0, $qr_eye_ball_color['r'], $qr_eye_ball_color['g'], $qr_eye_ball_color['b'], $qr_eye_frame_color['r'], $qr_eye_frame_color['g'], $qr_eye_frame_color['b']);
                $qrCode->eyeColor(1, $qr_eye_ball_color['r'], $qr_eye_ball_color['g'], $qr_eye_ball_color['b'], $qr_eye_frame_color['r'], $qr_eye_frame_color['g'], $qr_eye_frame_color['b']);
                $qrCode->eyeColor(2, $qr_eye_ball_color['r'], $qr_eye_ball_color['g'], $qr_eye_ball_color['b'], $qr_eye_frame_color['r'], $qr_eye_frame_color['g'], $qr_eye_frame_color['b']);
            }
            if (!empty($qr_pattern)) {
                if ($qr_pattern == 'square_0.5') {
                    $qrCode->style('square', 0.3);
                } elseif ($qr_pattern == 'square_0.9') {
                    $qrCode->style('square', 0.7);
                } else {
                    $qrCode->style($qr_pattern);
                }
            }
            if (!empty($qr_color_type)) {
                if ($qr_color_type == 'solid_color' && !empty($qr_solid_color)) {
                    $qrCode->color($qr_solid_color['r'], $qr_solid_color['g'], $qr_solid_color['b']);
                }
                if ($qr_color_type == 'gradient_color' && !empty($qr_gradient_color_type)) {
                    $qrCode->gradient($qr_gradient_color_start['r'], $qr_gradient_color_start['g'], $qr_gradient_color_start['b'], $qr_gradient_color_end['r'], $qr_gradient_color_end['g'], $qr_gradient_color_end['b'], $qr_gradient_color_type);
                }
            }
            if (!empty($qr_bg_type)) {
                if ($qr_bg_type == 'color' && !empty($qr_bg_color)) {
                    $qrCode->backgroundColor($qr_bg_color['r'], $qr_bg_color['g'], $qr_bg_color['b'], 75);
                }
            }

            // Determine the directory and filename
            $formatDirectory = 'qr_codes/qrs/' . $format;
            $qrFileName = $qr->code . '.' . $format;
            $qrCodePath = '../public/storage/' . $formatDirectory . '/' . $qrFileName;

            if (!Storage::exists($formatDirectory)) {
                Storage::makeDirectory($formatDirectory, 0775, true);
            }

            // Generate the QR code and save to file
            if ($format === 'pdf') {
                $qrCodeImageData = $qrCode->generate($qrDataLink);

                // Check if QR code image data is empty
                if (!$qrCodeImageData) {
                    continue;
                }

                $htmlContent = '<div class="text-center"><img width="650px" src="data:image/png;base64,' . base64_encode($qrCodeImageData) . '" /></div>';

                // Create DomPDF instance
                $pdf = \App::make('dompdf.wrapper');

                try {
                    $pdf->loadHTML($htmlContent, 'UTF-8');
                } catch (\Exception $e) {
                    continue; // Skip PDF generation for this format
                }

                // Save PDF file to the specified path
                try {
                    $pdf->save($qrCodePath);
                } catch (\Exception $e) {
                    continue; // Skip PDF generation for this format
                }
            } else {
                // Generate QR code for non-PDF formats
                $qrCodeString = $qrCode->margin(4)->errorCorrection('H')->encoding('UTF-8')->generate($qrDataLink);

                if ($format === 'jpg') {
                    try {
                        // Convert binary data to base64
                        $base64ImageString = base64_encode($qrCodeString);
                        // Decode base64 string to get the image content
                        $imageContent = base64_decode($base64ImageString);
                        // Create image from the binary data
                        $image = Image::make($imageContent);
                        $image->encode('jpg', 100)->save($qrCodePath);
                    } catch (NotReadableException $e) {
                        Log::error('Image source not readable: ' . $e->getMessage());
                        continue;
                    } catch (\Exception $e) {
                        Log::error('General error: ' . $e->getMessage());
                        continue;
                    }
                } else {
                    $qrCode->generate($qrDataLink, $qrCodePath);
                }
            }

            // Update the QR record
            $qr->update([
                $field => $qrFileName,
                $field . '_url' => asset('storage/' . $formatDirectory . '/' . $qrFileName)
            ]);
        }

        //     $formatDirectory = 'qr_codes/qrs/' . $format;
        //     $qrFileName = $qr->code . '.' . $format;
        //     $qrCodePath = '../public/storage/' . $formatDirectory . '/' . $qrFileName;

        //     if (!Storage::exists($formatDirectory)) {
        //         Storage::makeDirectory($formatDirectory, 0775, true);
        //     }

        //     $qrCodeString = $qrCode->margin(4)->errorCorrection('H')->encoding('UTF-8')->generate($qrDataLink, $qrCodePath);

        //     $qr->update([
        //         $field => $qrFileName,
        //         $field . '_url' => asset('storage/' . $formatDirectory . '/' . $qrFileName)
        //     ]);
        // }



        // Return the URL of the generated QR code image
        if ($qr->wasRecentlyCreated) {
            if ($isUserRoute) {
                return redirect()->route('user.qr-code.index')->with('success', 'You have successfully generated QR Code.');
            } else {
                return redirect()->route('admin.qr-code.index')->with('success', 'You have successfully generated QR Code.');
            }
        } else {
            return redirect()->back()->with('error', 'Failed to generate QR code.');
        }
    }


    public function update(QrCodeRequest $request, $id)
    {
        $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;
        $qr = Qr::with('qrData')->where('code', $id)->first();

        $qr_type                 = $request->qr_type;
        $qr_template             = $request->qr_template;
        $qr_logo                 = $request->qr_logo;
        $qr_logo_size            = $request->qr_logo_size;
        $qr_eye_ball             = $request->qr_eye_ball ?? 'square';
        $qr_eye_ball_color       = $this->hexToRgb($request->qr_eye_ball_color ?? '#000000');
        $qr_eye_frame            = $request->qr_eye_frame ?? 'square';
        $qr_eye_frame_color      = $this->hexToRgb($request->qr_eye_frame_color ?? '#000000');
        $qr_pattern              = $request->qr_pattern ?? 'square';
        $qr_pattern_color        = $this->hexToRgb($request->qr_pattern_color ?? '#000000');
        $qr_color_type           = $request->qr_color_type;
        $qr_solid_color          = $this->hexToRgb($request->qr_solid_color ?? '#000000');
        $qr_gradient_color_type  = $request->qr_gradient_color_type;
        $qr_gradient_color_start = $this->hexToRgb($request->qr_gradient_color_start ?? '#000000');
        $qr_gradient_color_end   = $this->hexToRgb($request->qr_gradient_color_end ?? '#000000');
        $qr_bg_type              = $request->qr_bg_type;
        $qr_bg_color             = $this->hexToRgb($request->qr_bg_color ?? '#ffffff00');
        $qr_bg_image             = $request->qr_bg_image;
        $qr_name                 = $request->qr_name;
        $qr_scan_status          = $request->qr_scan_status;




        // Store data into the 'qrs' table
        $qr->update([

            'qr_template'             => $qr_template,
            'qr_logo_size'            => $qr_logo_size,
            'qr_eye_ball'             => $qr_eye_ball,
            'qr_eye_ball_color'       => $request->qr_eye_ball_color,
            'qr_eye_frame'            => $qr_eye_frame,
            'qr_eye_frame_color'      => $request->qr_eye_frame_color,
            'qr_pattern'              => $qr_pattern,
            'qr_pattern_color'        => $request->qr_pattern_color,
            'qr_color_type'           => $qr_color_type,
            'qr_solid_color'          => $request->qr_solid_color,
            'qr_gradient_color_type'  => $qr_gradient_color_type,
            'qr_gradient_color_start' => $request->qr_gradient_color_start,
            'qr_gradient_color_end'   => $request->qr_gradient_color_end,
            'qr_bg_type'              => $qr_bg_type,
            'qr_bg_color'             => $request->qr_bg_color,
            'qr_bg_image'             => $qr_bg_image,
            'qr_name'                 => $qr_name,
            'updated_at'              => Carbon::now(),
        ]);

        // // Store data into the 'qr_data' table

        // Upload logo file if provided
        // Handle QR Logo
        if ($request->hasFile('qr_logo')) {
            $logo = $request->file('qr_logo');
            if ($logo->isValid()) {
                if ($qr->qr_logo) {
                    $oldlogoFile = $qr->qr_logo;
                    if ($oldlogoFile) {
                        Storage::delete('public/qr_codes/logos/' . $oldlogoFile);
                    }
                }
                $code = $request->input('code');
                $fileName = $qr->code . '.' . $logo->getClientOriginalExtension();

                // Load the original logo image using GD
                $originalImage = imagecreatefromstring(file_get_contents($logo->getPathname()));
                $logoWidth = imagesx($originalImage);
                $logoHeight = imagesy($originalImage);

                // Create a new image with a light background
                $background = imagecreatetruecolor($logoWidth, $logoHeight);
                $backgroundColor = imagecolorallocate($background, 175, 175, 175); // Light gray color
                imagefill($background, 0, 0, $backgroundColor);

                // Merge the original logo with the background
                imagecopy($background, $originalImage, 0, 0, 0, 0, $logoWidth, $logoHeight);

                // Save the merged image
                $logoPath = 'public/qr_codes/logos/' . $fileName;
                $logoFPath = $logo->storeAs('public/qr_codes/logos', $fileName);
                $logoFullPath = storage_path('app/' . $logoFPath);
                imagepng($background, storage_path('app/' . $logoPath));

                // Free up memory
                imagedestroy($originalImage);
                imagedestroy($background);

                // Save the logo path to the corresponding QR record
                $qr->update(['qr_logo' => $logoPath]);
            }
        }

        // Handle QR PDF
        $code = $qr->code;
        $uploadedPdfFile = '';
        if ($request->hasFile('qr_data_pdf')) {
            $pdf = $request->file('qr_data_pdf');
            if ($pdf->isValid()) {
                $oldpdfFile = $qr->qrData->qr_data_pdf;
                if ($oldpdfFile) {
                    Storage::delete('public/qr_codes/pdfs/' . $oldpdfFile);
                }
                $filename = $code . '_pdf';
                $filepath = 'public/qr_codes/pdfs/';
                $uploadedPdfFile = customUpload($pdf, $filepath, $filename);
            }
        } else {
            $uploadedPdfFile = ['status' => 0];
        }

        // Handle QR Data Image
        $uploadedImgFile = '';
        if ($request->hasFile('qr_data_image')) {
            $dataImage = $request->file('qr_data_image');
            if ($dataImage->isValid()) {
                $oldimageFile = $qr->qrData->qr_data_image;
                if ($oldimageFile) {
                    Storage::delete('public/qr_codes/images/' . $oldimageFile);
                }
                $imagefilename = $code . '_image';
                $imagefilepath = 'public/qr_codes/images/';
                $uploadedImgFile = customUpload($dataImage, $imagefilepath, $imagefilename);
            }
        } else {
            $uploadedImgFile = ['status' => 0];
        }
        $uploadedAdoFile = '';
        if ($request->hasFile('qr_data_audio_file')) {
            $dataAudio = $request->file('qr_data_audio_file');
            if ($dataAudio->isValid()) {
                $oldaudioFile = $qr->qrData->qr_data_audio_file;
                if ($oldaudioFile) {
                    Storage::delete('public/qr_codes/audios/' . $oldaudioFile);
                }
                $audiofilename = $code . '_pdf';
                $audiofilepath = 'public/qr_codes/audios/';
                $uploadedAdoFile = customUpload($dataAudio, $audiofilepath, $audiofilename);
            }
        } else {
            $uploadedAdoFile = ['status' => 0];
        }
        $uploadedcouponLogoFile = '';
        if ($request->hasFile('qr_data_coupon_logo')) {
            $datacoupon = $request->file('qr_data_coupon_logo');
            if ($datacoupon->isValid()) {
                $oldcouponFile = $qr->qrData->qr_data_coupon_logo;
                if ($oldcouponFile) {
                    Storage::delete('public/qr_codes/coupons/' . $oldcouponFile);
                }
                $couponfilename = $code . '_pdf';
                $couponfilepath = 'public/qr_codes/coupons/';
                $uploadedcouponLogoFile = customUpload($datacoupon, $couponfilepath, $couponfilename);
            }
        } else {
            $uploadedcouponLogoFile = ['status' => 0];
        }
        $uploadedsocialLogoFile = '';
        if ($request->hasFile('qr_data_social_logo')) {
            $datasocial = $request->file('qr_data_social_logo');
            if ($datasocial->isValid()) {
                $oldsocial_logoFile = $qr->qrData->qr_data_social_logo;
                if ($oldsocial_logoFile) {
                    Storage::delete('public/qr_codes/socials/' . $oldsocial_logoFile);
                }
                $socialfilename = $code . '_pdf';
                $socialfilepath = 'public/qr_codes/socials/';
                $uploadedsocialLogoFile = customUpload($datasocial, $socialfilepath, $socialfilename);
            }
        } else {
            $uploadedsocialLogoFile = ['status' => 0];
        }
        $uploadedsocialbgFile = '';
        if ($request->hasFile('qr_data_social_bg')) {
            $datasocial = $request->file('qr_data_social_bg');
            if ($datasocial->isValid()) {
                $oldsocial_bgFile = $qr->qrData->qr_data_social_bg;
                if ($oldsocial_bgFile) {
                    Storage::delete('public/qr_codes/socials/' . $oldsocial_bgFile);
                }
                $socialfilename = $code . '_pdf';
                $socialfilepath = 'public/qr_codes/socials/';
                $uploadedsocialbgFile = customUpload($datasocial, $socialfilepath, $socialfilename);
            }
        } else {
            $uploadedsocialbgFile = ['status' => 0];
        }

        $uploadedfacebook_pageLogoFile = '';
        if ($request->hasFile('qr_data_facebook_page_logo')) {
            $datafacebook_page = $request->file('qr_data_facebook_page_logo');
            if ($datafacebook_page->isValid()) {
                $oldfacebook_page_logoFile = $qr->qrData->qr_data_facebook_page_logo;
                if ($oldfacebook_page_logoFile) {
                    Storage::delete('public/qr_codes/facebook_pages/' . $oldfacebook_page_logoFile);
                }
                $facebook_pagefilename = $code . '_pdf';
                $facebook_pagefilepath = 'public/qr_codes/facebook_pages/';
                $uploadedfacebook_pageLogoFile = customUpload($datafacebook_page, $facebook_pagefilepath, $facebook_pagefilename);
            }
        } else {
            $uploadedfacebook_pageLogoFile = ['status' => 0];
        }
        $uploadedfacebook_pagebgFile = '';
        if ($request->hasFile('qr_data_facebook_page_bg')) {
            $datafacebook_page = $request->file('qr_data_facebook_page_bg');
            if ($datafacebook_page->isValid()) {
                $oldfacebook_page_bgFile = $qr->qrData->qr_data_facebook_page_bg;
                if ($oldfacebook_page_bgFile) {
                    Storage::delete('public/qr_codes/facebook_pages/' . $oldfacebook_page_bgFile);
                }
                $facebook_pagefilename = $code . '_pdf';
                $facebook_pagefilepath = 'public/qr_codes/facebook_pages/';
                $uploadedfacebook_pagebgFile = customUpload($datafacebook_page, $facebook_pagefilepath, $facebook_pagefilename);
            }
        } else {
            $uploadedfacebook_pagebgFile = ['status' => 0];
        }

        $uploadedbusiness_pageLogoFile = '';
        if ($request->hasFile('qr_data_business_page_logo')) {
            $databusiness_page = $request->file('qr_data_business_page_logo');
            if ($databusiness_page->isValid()) {
                $oldbusiness_page_logoFile = $qr->qrData->qr_data_business_page_logo;
                if ($oldbusiness_page_logoFile) {
                    Storage::delete('public/qr_codes/business_pages/' . $oldbusiness_page_logoFile);
                }
                $business_pagefilename = $code . '_pdf';
                $business_pagefilepath = 'public/qr_codes/business_pages/';
                $uploadedbusiness_pageLogoFile = customUpload($databusiness_page, $business_pagefilepath, $business_pagefilename);
            }
        } else {
            $uploadedbusiness_pageLogoFile = ['status' => 0];
        }

        $qrDataLink = route('showQr', $qr->code);
        // Create QR Data record
        $qrData = $qr->qrData;
        $qrData->update([
            'code_id'                                    => $qr->id,
            'qr_data_website_url'                        => $request->qr_data_website_url,
            'qr_data_pdf'                                => $uploadedPdfFile['status'] == 1 ? $uploadedPdfFile['file_name'] : $qrData->qr_data_pdf,
            'qr_data_image'                              => $uploadedImgFile['status'] == 1 ? $uploadedImgFile['file_name'] : $qrData->qr_data_image,
            'qr_data_image_link'                         => $request->qr_data_image_link,
            'qr_data_sms_number'                         => $request->qr_data_sms_number,
            'qr_data_sms_message'                        => $request->qr_data_sms_message,
            'qr_data_email_id'                           => $request->qr_data_email_id,
            'qr_data_email_subject'                      => $request->qr_data_email_subject,
            'qr_data_email_body'                         => $request->qr_data_email_body,
            'qr_app_android'                             => $request->qr_app_android,
            'qr_data_app_iphone'                         => $request->qr_data_app_iphone,
            'qr_data_app_ipad'                           => $request->qr_data_app_ipad,
            'qr_data_call_number'                        => $request->qr_data_call_number,
            'qr_data_location_latitude'                  => $request->qr_data_location_latitude,
            'qr_data_location_longitude'                 => $request->qr_data_location_longitude,
            'qr_data_coupon_header'                      => $request->qr_data_coupon_header,
            'qr_data_coupon_message'                     => $request->qr_data_coupon_message,
            'qr_data_coupon_description_body'            => $request->qr_data_coupon_description_body,
            'qr_data_coupon_company'                     => $request->qr_data_coupon_company,
            'qr_data_coupon_code'                        => $request->qr_data_coupon_code,
            'qr_data_coupon_logo'                        => $uploadedcouponLogoFile['status'] == 1 ? $uploadedcouponLogoFile['file_name'] : $qrData->qr_data_coupon_logo,
            'qr_data_coupon_expire_date'                 => $request->qr_data_coupon_expire_date,
            'qr_data_coupon_description_header'          => $request->qr_data_coupon_description_header,
            'qr_data_coupon_website'                     => $request->qr_data_coupon_website,
            'qr_data_coupon_background_color'            => $request->qr_data_coupon_background_color,
            'qr_data_coupon_title_color'                 => $request->qr_data_coupon_title_color,
            'qr_data_coupon_button_bg_color'             => $request->qr_data_coupon_button_bg_color,
            'qr_data_coupon_button_title_color'          => $request->qr_data_coupon_button_title_color,
            'qr_data_coupon_policy'                      => $request->qr_data_coupon_policy,
            'qr_data_audio_file'                         => $uploadedAdoFile['status'] == 1 ? $uploadedAdoFile['file_name'] : $qrData->qr_data_audio_file,
            'qr_data_audio_link'                         => $request->qr_data_audio_link,
            'qr_data_social_logo'                        => $uploadedsocialLogoFile['status'] == 1 ? $uploadedsocialLogoFile['file_name'] : $qrData->qr_data_social_logo,
            'qr_data_social_header'                      => $request->qr_data_social_header,
            'qr_data_social_title'                       => $request->qr_data_social_title,
            'qr_data_social_message'                     => $request->qr_data_social_message,
            'qr_data_social_background_image'            => $uploadedsocialbgFile['status'] == 1 ? $uploadedsocialbgFile['file_name'] : $qrData->qr_data_social_background_image,
            'qr_data_social_facebook'                    => $request->qr_data_social_facebook,
            'qr_data_social_instagram'                   => $request->qr_data_social_instagram,
            'qr_data_social_linkedin'                    => $request->qr_data_social_linkedin,
            'qr_data_social_twitter'                     => $request->qr_data_social_twitter,
            'qr_data_social_youtube'                     => $request->qr_data_social_youtube,
            'qr_data_social_pinterest'                   => $request->qr_data_social_pinterest,
            'qr_data_social_website'                     => $request->qr_data_social_website,
            'qr_data_social_whatsapp'                    => $request->qr_data_social_whatsapp,
            'qr_data_social_snapchat'                    => $request->qr_data_social_snapchat,
            'qr_data_social_tiktok'                      => $request->qr_data_social_tiktok,
            'qr_data_facebook_page_logo'                 => $uploadedfacebook_pageLogoFile['status'] == 1 ? $uploadedfacebook_pageLogoFile['file_name'] : $qrData->qr_data_facebook_page_logo,
            'qr_data_facebook_page_header'               => $request->qr_data_facebook_page_header,
            'qr_data_facebook_page_title'                => $request->qr_data_facebook_page_title,
            'qr_data_facebook_page_background_image'     => $uploadedfacebook_pagebgFile['status'] == 1 ? $uploadedfacebook_pagebgFile['file_name'] : $qrData->qr_data_facebook_page_background_image,
            'qr_data_facebook_page_facebook'             => $request->qr_data_facebook_page_facebook,
            'qr_data_business_page_logo'                 => $uploadedbusiness_pageLogoFile['status'] == 1 ? $uploadedbusiness_pageLogoFile['file_name'] : $qrData->qr_data_business_page_logo,
            'qr_data_business_page_business_name'        => $request->qr_data_business_page_business_name,
            'qr_data_business_page_header'               => $request->qr_data_business_page_header,
            'qr_data_business_page_start_time_monday'    => $request->qr_data_business_page_start_time_monday,
            'qr_data_business_page_end_time_monday'      => $request->qr_data_business_page_end_time_monday,
            'qr_data_business_page_start_time_tuesday'   => $request->qr_data_business_page_start_time_tuesday,
            'qr_data_business_page_end_time_tuesday'     => $request->qr_data_business_page_end_time_tuesday,
            'qr_data_business_page_start_time_wednesday' => $request->qr_data_business_page_start_time_wednesday,
            'qr_data_business_page_end_time_wednesday'   => $request->qr_data_business_page_end_time_wednesday,
            'qr_data_business_page_start_time_thursday'  => $request->qr_data_business_page_start_time_thursday,
            'qr_data_business_page_end_time_thursday'    => $request->qr_data_business_page_end_time_thursday,
            'qr_data_business_page_start_time_friday'    => $request->qr_data_business_page_start_time_friday,
            'qr_data_business_page_end_time_friday'      => $request->qr_data_business_page_end_time_friday,
            'qr_data_business_page_start_time_saturday'  => $request->qr_data_business_page_start_time_saturday,
            'qr_data_business_page_end_time_saturday'    => $request->qr_data_business_page_end_time_saturday,
            'qr_data_business_page_start_time_sunday'    => $request->qr_data_business_page_start_time_sunday,
            'qr_data_business_page_end_time_sunday'      => $request->qr_data_business_page_end_time_sunday,
            'qr_data_business_page_website'              => $request->qr_data_business_page_website,
            'qr_data_business_page_business_email'       => $request->qr_data_business_page_business_email,
            'qr_data_business_page_business_phone'       => $request->qr_data_business_page_business_phone,
            'qr_data_business_page_business_location'    => $request->qr_data_business_page_business_location,
        ]);



        if ($request->hasFile('qr_logo')) {
            $formats = [
                'png' => 'qr_png',
                'jpg' => 'qr_jpg',
                'eps' => 'qr_eps',
                'pdf' => 'qr_pdf',
            ];
        } else {
            $formats = [
                'png' => 'qr_png',
                'svg' => 'qr_svg',
                'eps' => 'qr_eps',
                'jpg' => 'qr_jpg',
                'pdf' => 'qr_pdf',
            ];
        }

        // Loop through each format
        // foreach ($formats as $format => $field) {
        //     if ($format === 'jpg' || $format === 'pdf') {
        //         $qrCode = QrCode::format('png')->size(1000);
        //     } else {
        //         $qrCode = QrCode::format($format)->size(1000);
        //     }

        //     if (!empty($qr_logo)) {
        //         $qrCode->merge($logoFullPath, $qr_logo_size, true);
        //     }
        //     if (!empty($qr_eye_ball)) {
        //         $qrCode->eye($qr_eye_ball, 0.5);
        //     }
        //     if (!empty($qr_eye_ball_color)) {
        //         $qrCode->eyeColor(0, $qr_eye_ball_color['r'], $qr_eye_ball_color['g'], $qr_eye_ball_color['b'], $qr_eye_frame_color['r'], $qr_eye_frame_color['g'], $qr_eye_frame_color['b']);
        //         $qrCode->eyeColor(1, $qr_eye_ball_color['r'], $qr_eye_ball_color['g'], $qr_eye_ball_color['b'], $qr_eye_frame_color['r'], $qr_eye_frame_color['g'], $qr_eye_frame_color['b']);
        //         $qrCode->eyeColor(2, $qr_eye_ball_color['r'], $qr_eye_ball_color['g'], $qr_eye_ball_color['b'], $qr_eye_frame_color['r'], $qr_eye_frame_color['g'], $qr_eye_frame_color['b']);
        //     }
        //     if (!empty($qr_pattern)) {
        //         if ($qr_pattern == 'square_0.5') {
        //             $qrCode->style('square', 0.3);
        //         } elseif ($qr_pattern == 'square_0.9') {
        //             $qrCode->style('square', 0.7);
        //         } else {
        //             $qrCode->style($qr_pattern);
        //         }
        //     }
        //     if (!empty($qr_color_type)) {
        //         if ($qr_color_type == 'solid_color' && !empty($qr_solid_color)) {
        //             $qrCode->color($qr_solid_color['r'], $qr_solid_color['g'], $qr_solid_color['b']);
        //         }
        //         if ($qr_color_type == 'gradient_color' && !empty($qr_gradient_color_type)) {
        //             $qrCode->gradient($qr_gradient_color_start['r'], $qr_gradient_color_start['g'], $qr_gradient_color_start['b'], $qr_gradient_color_end['r'], $qr_gradient_color_end['g'], $qr_gradient_color_end['b'], $qr_gradient_color_type);
        //         }
        //     }
        //     if (!empty($qr_bg_type)) {
        //         if ($qr_bg_type == 'color' && !empty($qr_bg_color)) {
        //             $qrCode->backgroundColor($qr_bg_color['r'], $qr_bg_color['g'], $qr_bg_color['b'], 75);
        //         }
        //     }

        //     $formatDirectory = 'qr_codes/qrs/' . $format;
        //     $qrFileName = $qr->code . '.' . $format;
        //     $qrCodePath = '../public/storage/' . $formatDirectory . '/' . $qrFileName;

        //     if (!Storage::exists($formatDirectory)) {
        //         Storage::makeDirectory($formatDirectory, 0775, true);
        //     }

        //     if ($format === 'pdf') {
        //         $qrCodeImageData = $qrCode->generate($qrDataLink);

        //         // Check if QR code image data is empty
        //         if (!$qrCodeImageData) {
        //             continue;
        //         }

        //         $htmlContent = '<div class="text-center"><img width="650px" src="data:image/png;base64,' . base64_encode($qrCodeImageData) . '" /></div>';

        //         // Create DomPDF instance
        //         $pdf = \App::make('dompdf.wrapper');


        //         try {
        //             $pdf->loadHTML($htmlContent, 'UTF-8');
        //         } catch (\Exception $e) {
        //             continue; // Skip PDF generation for this format
        //         }

        //         // Save PDF file to the specified path
        //         try {
        //             $pdf->save($qrCodePath);
        //         } catch (\Exception $e) {
        //             continue; // Skip PDF generation for this format
        //         }
        //     } else {
        //         // Generate QR code for non-PDF formats
        //         $qrCodeString = $qrCode->margin(4)->errorCorrection('H')->encoding('UTF-8')->generate($qrDataLink, $qrCodePath);
        //     }

        //     // $qrCodeString = $qrCode->margin(4)->errorCorrection('H')->encoding('UTF-8')->generate($qrDataLink, $qrCodePath);

        //     $qr->update([
        //         $field => $qrFileName,
        //         $field . '_url' => asset('storage/' . $formatDirectory . '/' . $qrFileName)
        //     ]);
        // }
        foreach ($formats as $format => $field) {
            if ($format === 'jpg' || $format === 'pdf') {
                $qrCode = QrCode::format('png')->size(1000);
            } else {
                $qrCode = QrCode::format($format)->size(1000);
            }

            if (!empty($qr_logo)) {
                $qrCode->merge($logoFullPath, $qr_logo_size, true);
            }
            if (!empty($qr_eye_ball)) {
                $qrCode->eye($qr_eye_ball, 0.5);
            }
            if (!empty($qr_eye_ball_color)) {
                $qrCode->eyeColor(0, $qr_eye_ball_color['r'], $qr_eye_ball_color['g'], $qr_eye_ball_color['b'], $qr_eye_frame_color['r'], $qr_eye_frame_color['g'], $qr_eye_frame_color['b']);
                $qrCode->eyeColor(1, $qr_eye_ball_color['r'], $qr_eye_ball_color['g'], $qr_eye_ball_color['b'], $qr_eye_frame_color['r'], $qr_eye_frame_color['g'], $qr_eye_frame_color['b']);
                $qrCode->eyeColor(2, $qr_eye_ball_color['r'], $qr_eye_ball_color['g'], $qr_eye_ball_color['b'], $qr_eye_frame_color['r'], $qr_eye_frame_color['g'], $qr_eye_frame_color['b']);
            }
            if (!empty($qr_pattern)) {
                if ($qr_pattern == 'square_0.5') {
                    $qrCode->style('square', 0.3);
                } elseif ($qr_pattern == 'square_0.9') {
                    $qrCode->style('square', 0.7);
                } else {
                    $qrCode->style($qr_pattern);
                }
            }
            if (!empty($qr_color_type)) {
                if ($qr_color_type == 'solid_color' && !empty($qr_solid_color)) {
                    $qrCode->color($qr_solid_color['r'], $qr_solid_color['g'], $qr_solid_color['b']);
                }
                if ($qr_color_type == 'gradient_color' && !empty($qr_gradient_color_type)) {
                    $qrCode->gradient($qr_gradient_color_start['r'], $qr_gradient_color_start['g'], $qr_gradient_color_start['b'], $qr_gradient_color_end['r'], $qr_gradient_color_end['g'], $qr_gradient_color_end['b'], $qr_gradient_color_type);
                }
            }
            if (!empty($qr_bg_type)) {
                if ($qr_bg_type == 'color' && !empty($qr_bg_color)) {
                    $qrCode->backgroundColor($qr_bg_color['r'], $qr_bg_color['g'], $qr_bg_color['b'], 75);
                }
            }

            $formatDirectory = 'qr_codes/qrs/' . $format;
            $qrFileName = $qr->code . '.' . $format;
            $qrCodePath = '../public/storage/' . $formatDirectory . '/' . $qrFileName;

            if (!Storage::exists($formatDirectory)) {
                Storage::makeDirectory($formatDirectory, 0775, true);
            }

            if ($format === 'pdf') {
                $qrCodeImageData = $qrCode->generate($qrDataLink);

                // Check if QR code image data is empty
                if (!$qrCodeImageData) {
                    continue;
                }

                $htmlContent = '<div class="text-center"><img width="650px" src="data:image/png;base64,' . base64_encode($qrCodeImageData) . '" /></div>';

                // Create DomPDF instance
                $pdf = \App::make('dompdf.wrapper');

                try {
                    $pdf->loadHTML($htmlContent, 'UTF-8');
                } catch (\Exception $e) {
                    continue; // Skip PDF generation for this format
                }

                // Save PDF file to the specified path
                try {
                    $pdf->save($qrCodePath);
                } catch (\Exception $e) {
                    continue; // Skip PDF generation for this format
                }
            } else {
                // Generate QR code for non-PDF formats
                $qrCodeString = $qrCode->margin(4)->errorCorrection('H')->encoding('UTF-8')->generate($qrDataLink);

                if ($format === 'jpg') {
                    try {
                        // Convert binary data to base64
                        $base64ImageString = base64_encode($qrCodeString);
                        $imageContent = base64_decode($base64ImageString);
                        $image = Image::make($imageContent);
                        $image->encode('jpg', 100)->save($qrCodePath);
                    } catch (NotReadableException $e) {
                        Log::error('Image source not readable: ' . $e->getMessage());
                        continue;
                    } catch (\Exception $e) {
                        Log::error('General error: ' . $e->getMessage());
                        continue;
                    }
                } else {
                    $qrCode->generate($qrDataLink, $qrCodePath);
                }
            }

            $qr->update([
                $field => $qrFileName,
                $field . '_url' => asset('storage/' . $formatDirectory . '/' . $qrFileName)
            ]);
        }



        // Return the URL of the generated QR code image

        if ($isUserRoute) {
            return redirect()->route('user.qr-code.index')->with('success', 'You have successfully updated QR Code.');
        } else {
            return redirect()->route('admin.qr-code.index')->with('success', 'You have successfully updated QR Code.');
        }
    }

    public function qrPreview(QrCodeRequest $request)
    {
        $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;
        $typePrefix = 'QR'; // Example prefix
        $today = date('dmY');
        $userId = $userId = $isUserRoute ? Auth::user()->id : Auth::guard('admin')->user()->id;;

        // Find the last QR code generated for this user today
        $lastCode = Qr::where('code', 'like', $typePrefix . $today . $userId . '%')
            ->orderBy('id', 'desc')
            ->first();

        // Determine the new number for the QR code
        $newNumber = $lastCode ? (int)substr($lastCode->code, -2) + 1 : 1;

        // Generate the new QR code
        $code = $typePrefix . $today . $userId . str_pad($newNumber, 2, '0', STR_PAD_LEFT);


        $data = [
            'qr_data_website_url'               => $request->qr_data_website_url,
            'qr_data_pdf'                       => $request->qr_data_pdf,
            'qr_data_image'                     => $request->qr_data_image,
            'qr_data_image_link'                => $request->qr_data_image_link,
            'qr_data_sms_number'                => $request->qr_data_sms_number,
            'qr_data_sms_message'               => $request->qr_data_sms_message,
            'qr_data_email_id'                  => $request->qr_data_email_id,
            'qr_data_email_subject'             => $request->qr_data_email_subject,
            'qr_data_email_body'                => $request->qr_data_email_body,
            'qr_app_android'                    => $request->qr_app_android,
            'qr_data_app_iphone'                => $request->qr_data_app_iphone,
            'qr_data_app_ipad'                  => $request->qr_data_app_ipad,
            'qr_data_call_number'               => $request->qr_data_call_number,
            'qr_data_location'                  => $request->qr_data_location,
            'qr_data_coupon_code'               => $request->qr_data_coupon_code,
            'qr_data_coupon_expire_date'        => $request->qr_data_coupon_expire_date,
            'qr_data_coupon_header'             => $request->qr_data_coupon_header,
            'qr_data_coupon_message'            => $request->qr_data_coupon_message,
            'qr_data_coupon_description_header' => $request->qr_data_coupon_description_header,
            'qr_data_coupon_description_body'   => $request->qr_data_coupon_description_body,
            'qr_data_coupon_website'            => $request->qr_data_coupon_website,
            'qr_data_coupon_company'            => $request->qr_data_coupon_company,
            'qr_data_coupon_policy'             => $request->qr_data_coupon_policy,
            'qr_data_coupon_logo'               => $request->qr_data_coupon_logo,
            'qr_data_audio_file'                => $request->qr_data_audio_file,
            'qr_data_audio_link'                => $request->qr_data_audio_link,
        ];


        $qr_type                 = $request->qr_type;
        $qr_template             = $request->qr_template;
        $qr_logo                 = $request->file('qr_logo');
        $qr_saved_logo           = $request->qr_saved_logo;
        $qr_logo_size            = $request->input('qr_logo_size', 50); // Default size if not provided
        $qr_logo_space           = $request->input('qr_logo_space', 30); // Default size if not provided
        $qr_logo_bg_color        = $this->hexToRgb($request->qr_logo_bg_color);
        $qr_eye_ball             = $request->qr_eye_ball;
        $qr_eye_ball_color       = $this->hexToRgb($request->qr_eye_ball_color);
        $qr_eye_frame            = $request->qr_eye_frame;
        $qr_eye_frame_color      = $this->hexToRgb($request->qr_eye_frame_color);
        $qr_pattern              = $request->qr_pattern;
        $qr_pattern_color        = $this->hexToRgb($request->qr_pattern_color);
        $qr_color_type           = $request->qr_color_type;
        $qr_solid_color          = $this->hexToRgb($request->qr_solid_color);
        $qr_gradient_color_type  = $request->qr_gradient_color_type;
        $qr_gradient_color_start = $this->hexToRgb($request->qr_gradient_color_start);
        $qr_gradient_color_end   = $this->hexToRgb($request->qr_gradient_color_end);
        $qr_bg_type              = $request->qr_bg_type;
        $qr_bg_color             = $this->hexToRgb($request->qr_bg_color);
        $qr_bg_image             = $request->qr_bg_image;
        $qr_name                 = $request->qr_name;
        $qr_scan_status          = $request->qr_scan_status;




        // Store data into the 'qrs' table


        // // Store data into the 'qr_data' table

        // Upload logo file if provided
        // Handle QR Logo
        if ($request->hasFile('qr_logo')) {
            $logo = $request->file('qr_logo');
            if ($logo->isValid()) {
                // Load the original logo image using GD
                $originalImage = imagecreatefromstring(file_get_contents($logo->getPathname()));
                $logoWidth = imagesx($originalImage);
                $logoHeight = imagesy($originalImage);

                // Define padding size
                $padding = $qr_logo_space; // Adjust this value as needed

                // Calculate new dimensions for the image with padding
                $paddedWidth = $logoWidth + (2 * $padding);
                $paddedHeight = $logoHeight + (2 * $padding);

                // Create a new image with a light background and padding
                $background = imagecreatetruecolor($paddedWidth, $paddedHeight);
                $backgroundColor = imagecolorallocate($background,  $qr_logo_bg_color['r'], $qr_logo_bg_color['g'], $qr_logo_bg_color['b']); // Light gray color
                imagefill($background, 0, 0, $backgroundColor);

                // Calculate the position to place the original logo image with padding
                $xPosition = $padding;
                $yPosition = $padding;

                // Merge the original logo with the background
                imagecopy($background, $originalImage, $xPosition, $yPosition, 0, 0, $logoWidth, $logoHeight);

                // Save the merged image
                $logoPath = $qr_logo->getRealPath();
                imagepng($background, $logoPath);

                // Free up memory
                imagedestroy($originalImage);
                imagedestroy($background);
            }
        }


        $qrCode = QrCode::format('png')->size(230);

        if (!empty($qr_eye_ball)) {
            $qrCode->eye($qr_eye_ball, 0.5);
        }

        // Add the logo to the QR code
        if ($qr_logo) {
            $logoPath = $qr_logo->getRealPath();
            $qrCode->merge($logoPath, $qr_logo_size, true);
        }
        if (!empty($qr_saved_logo)) {
            $logoFullPath = '../public/frontend/images/qr_logo/' . $qr_saved_logo . '.png';
            $qrCode->merge($logoFullPath, $qr_logo_size, true);
        }
        if (!empty($qr_eye_ball_color)) {
            $qrCode->eyeColor(0, $qr_eye_ball_color['r'], $qr_eye_ball_color['g'], $qr_eye_ball_color['b'], $qr_eye_frame_color['r'], $qr_eye_frame_color['g'], $qr_eye_frame_color['b'],);
            $qrCode->eyeColor(1, $qr_eye_ball_color['r'], $qr_eye_ball_color['g'], $qr_eye_ball_color['b'], $qr_eye_frame_color['r'], $qr_eye_frame_color['g'], $qr_eye_frame_color['b'],);
            $qrCode->eyeColor(2, $qr_eye_ball_color['r'], $qr_eye_ball_color['g'], $qr_eye_ball_color['b'], $qr_eye_frame_color['r'], $qr_eye_frame_color['g'], $qr_eye_frame_color['b'],);
        }
        if (!empty($qr_pattern)) {
            if ($qr_pattern == 'square_0.5') {
                $qrCode->style('square', 0.3);
            } elseif ($qr_pattern == 'square_0.9') {
                $qrCode->style('square', 0.8);
            } else {
                $qrCode->style($qr_pattern, 0.5);
            }
        }
        if (!empty($qr_color_type)) {
            if ($qr_color_type == 'solid_color') {
                if (!empty($qr_solid_color)) {
                    $qrCode->color($qr_solid_color['r'], $qr_solid_color['g'], $qr_solid_color['b']);
                }
            }
            if ($qr_color_type == 'gradient_color') {
                if (!empty($qr_gradient_color_type)) {

                    $qrCode->gradient($qr_gradient_color_start['r'], $qr_gradient_color_start['g'], $qr_gradient_color_start['b'], $qr_gradient_color_end['r'], $qr_gradient_color_end['g'], $qr_gradient_color_end['b'], $qr_gradient_color_type);
                }
            }
        }

        if (!empty($qr_bg_type)) {
            if ($qr_bg_type == 'color' && !empty($qr_bg_color)) {
                $qrCode->backgroundColor($qr_bg_color['r'], $qr_bg_color['g'], $qr_bg_color['b'], 75);
            }
        }

        $qrCode->errorCorrection('H');


        $qrDataLink = route('showQr', $code);
        switch ($qr_type) {
            case 'website':
                $qrCodeString = $qrCode->generate($data['qr_data_website_url']);
                break;
            case 'pdf':
                $qrCodeString = $qrCode->generate($qrDataLink);
                break;
            case 'image':
                $qrCodeString = $qrCode->generate($qrDataLink);
                break;
            case 'sms':
                $qrCodeString = $qrCode->SMS($data['qr_data_sms_number'], $data['qr_data_sms_message']);
                break;
            case 'email':
                $qrCodeString = $qrCode->email($data['qr_data_email_id'], $data['qr_data_email_subject'], $data['qr_data_email_body']);
                break;
            case 'mobile_app':
                $qrCodeString = $qrCode->generate($data['qr_app_android'], $data['qr_data_app_iphone'], $data['qr_data_app_ipad']);
                break;
            case 'call':
                $qrCodeString = $qrCode->phoneNumber($data['qr_data_call_number']);
                break;
            default:
                $qrCodeString = $qrCode->generate($qrDataLink);
                break;
        }


        $qrCodeDataUrl = 'data:image/png;base64,' . base64_encode($qrCodeString);

        // Return the data URL
        return response()->json(['qr_code' => $qrCodeDataUrl]);
    }

    private function hexToRgb($hex)
    {
        $hex = ltrim($hex, '#');
        list($r, $g, $b) = sscanf($hex, "%02x%02x%02x");
        return ['r' => $r, 'g' => $g, 'b' => $b];
    }



    public function edit(string $id)
    {
        $data = [
            'qr' => Qr::with('qrData')->where('code', $id)->first(),
        ];
        $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;
        $view = $isUserRoute ? 'user.pages.qr-code.edit' : 'admin.pages.qr-code.edit';
        return view($view, $data);
    }


    public function destroy(string $id)
    {
        Qr::find($id)->delete();
        $qr_data = QrData::where('code_id', $id)->first();
        if (!empty($qr_data)) {
            $qr_data->delete();
        }
    }
}




// Handle QR PDF
        // $pdfFullPath = '';
        // if ($request->hasFile('qr_data_pdf')) {
        //     $pdf = $request->file('qr_data_pdf');
        //     if ($pdf->isValid()) {
        //         $pdfFileName = $code . '.' . $pdf->getClientOriginalExtension();
        //         $pdfPath = $pdf->storeAs('public/qr_codes/pdfs', $pdfFileName);
        //         $pdfFullPath = url('/storage/qr_codes/pdfs/' . $pdfFileName);
        //         // $pdfFullPath = storage_path('app/' . $pdfPath);
        //     }
        // }

        // // Handle QR Data Image
        // $dataImageFullPath = '';
        // if ($request->hasFile('qr_data_image')) {
        //     $dataImage = $request->file('qr_data_image');
        //     if ($dataImage->isValid()) {
        //         $imageFileName = $code . '.' . $dataImage->getClientOriginalExtension();
        //         $dataImagePath = $dataImage->storeAs('public/qr_codes/images', $imageFileName);
        //         $dataImageFullPath = url('/storage/qr_codes/images/' . $imageFileName);
        //     }
        // }
        // $qrDataLink = route('showQr', $qr->code);
        // Create QR Data record
//Backup Code
// $qrCode = new Generator;
        // $qrCode->format('png')->size(230);

// if ($qr_type == 'website') {
        //     $qrCodeString = $qrCode->generate($data['qr_data_website_url']);
        // } elseif ($qr_type == 'pdf') {
        //     $qrCodeString = $qrCode->generate($qrDataLink);
        // } elseif ($qr_type == 'image') {
        //     $qrCodeString = $qrCode->generate($qrDataLink);
        // } elseif ($qr_type == 'sms') {
        //     $qrCodeString = $qrCode->SMS($data['qr_data_sms_number'], $data['qr_data_sms_message']);
        // } elseif ($qr_type == 'email') {
        //     $qrCodeString = $qrCode->email($data['qr_data_email_id'], $data['qr_data_email_subject'], $data['qr_data_email_body']);
        // } elseif ($qr_type == 'mobile_app') {
        //     $qrCodeString = $qrCode->generate($data['qr_app_android'], $data['qr_data_app_iphone'], $data['qr_data_app_ipad']);
        // } elseif ($qr_type == 'call') {
        //     $qrCodeString = $qrCode->phoneNumber($data['qr_data_call_number']);
        // }
        // // elseif ($qr_type == 'location') {
        // //     $qrCodeString = $qrCode->geo($data);
        // // } elseif ($qr_type == 'coupon_code') {
        // //     $qrCodeString = $qrCode->generate($data['']);
        // // } elseif ($qr_type == 'social') {
        // //     $qrCodeString = $qrCode->generate($data['']);
        // // } elseif ($qr_type == 'audio') {
        // //     $qrCodeString = $qrCode->generate($data['']);
        // // } elseif ($qr_type == 'business_page') {
        // //     $qrCodeString = $qrCode->generate($data['']);
        // // }
        // else {
        //     $qrCodeString = $qrCode->generate($data['qr_data_website_url']);
        //     // dd('5');
        // }
// $qrFileName = $code . '.png';
        // $qrCodePath = 'public/qr_codes/' . $qrFileName;
        // Storage::put($qrCodePath, $qrCodeString);
        // $qr->update(['qr_png' => $qrFileName, 'qr_url' => asset('storage/qr_codes/' . $qrFileName)]);

        // $data = [
        //     'qr_data_website_url'               => $request->qr_data_website_url,
        //     'qr_data_pdf'                       => $request->qr_data_pdf,
        //     'qr_data_image'                     => $request->qr_data_image,
        //     'qr_data_image_link'                => $request->qr_data_image_link,
        //     'qr_data_sms_number'                => $request->qr_data_sms_number,
        //     'qr_data_sms_message'               => $request->qr_data_sms_message,
        //     'qr_data_email_id'                  => $request->qr_data_email_id,
        //     'qr_data_email_subject'             => $request->qr_data_email_subject,
        //     'qr_data_email_body'                => $request->qr_data_email_body,
        //     'qr_app_android'                    => $request->qr_app_android,
        //     'qr_data_app_iphone'                => $request->qr_data_app_iphone,
        //     'qr_data_app_ipad'                  => $request->qr_data_app_ipad,
        //     'qr_data_call_number'               => $request->qr_data_call_number,
        //     'qr_data_location'                  => $request->qr_data_location,
        //     'qr_data_coupon_code'               => $request->qr_data_coupon_code,
        //     'qr_data_coupon_expire_date'        => $request->qr_data_coupon_expire_date,
        //     'qr_data_coupon_header'             => $request->qr_data_coupon_header,
        //     'qr_data_coupon_message'            => $request->qr_data_coupon_message,
        //     'qr_data_coupon_description_header' => $request->qr_data_coupon_description_header,
        //     'qr_data_coupon_description_body'   => $request->qr_data_coupon_description_body,
        //     'qr_data_coupon_website'            => $request->qr_data_coupon_website,
        //     'qr_data_coupon_company'            => $request->qr_data_coupon_company,
        //     'qr_data_coupon_policy'             => $request->qr_data_coupon_policy,
        //     'qr_data_coupon_logo'               => $request->qr_data_coupon_logo,
        //     'qr_data_audio_file'                => $request->qr_data_audio_file,
        //     'qr_data_audio_link'                => $request->qr_data_audio_link,
        // ];
