<?php

namespace App\Http\Controllers\Admin;

use Image;
// use App\Models\Admin\QrCode;
use Carbon\Carbon;
use App\Models\Admin\Qr;
use Illuminate\Support\Str;
use App\Models\Admin\QrData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SimpleSoftwareIO\QrCode\Generator;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\QrCodeRequest;
use App\Models\Admin\QrScan;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
    public function index()
    {
        $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;

        $qrs = $isUserRoute ?
            Qr::with('qrData', 'qrScan')->where('user_id', Auth::user()->id)->latest('id')->get() :
            Qr::with('qrData', 'qrScan')->latest('id')->get();

        $view = $isUserRoute ? 'user.pages.qr-code.index' : 'admin.pages.qr-code.index';

        return view($view, ['qrs' => $qrs]);
    }

    public function create()
    {
        $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;
        $view = $isUserRoute ? 'user.pages.qr-code.create' : 'admin.pages.qr-code.create';
        return view($view);
    }

    public function qrSummary($Qr)
    {

        $qr = Qr::with('qrData')->where('code', $Qr)->first();
        $maps = QrScan::where('qr_code', $Qr)->get(['ip_address']);

        return view('user.pages.qr-code.qrSummary', compact('qr', 'maps'));
    }


    public function showQr(Request $request, string $Qr)
    {
        $qr = Qr::with('qrData')->where('code', $Qr)->first();
        QrScan::create([
            'code_id'    => $qr->id,
            'qr_code'    => $qr->code,
            'ip_address' => $request->ip(),
        ]);
        if ($qr) {
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
            } else {
                return redirect()->route('homePage')->with('error', 'Sorry No Data Found');
            }

            return view('user.pages.qr-code.qrFile', compact('qr'));
        } else {
            return redirect()->route('homePage')->with('error', 'Sorry No Data Found');
        }
    }




    public function store(QrCodeRequest $request)
    {

        $typePrefix = 'QR'; // Example prefix
        // $today = Carbon::now()->format('dmY');
        $today = date('dmY');
        $userId = Auth::user()->id;
        $lastCode = Qr::where('code', 'like', $typePrefix . $today . $userId . '%')
            ->orderBy('id', 'desc')
            ->first();

        // Determine the new number for the QR code
        $newNumber = $lastCode ? (int)substr($lastCode->code, -1) + 1 : 1;

        $code = $typePrefix . $today . $userId . $newNumber;




        $qr_type                 = $request->qr_type;
        $qr_template             = $request->qr_template;
        $qr_logo                 = $request->qr_logo;
        $qr_logo_size            = $request->qr_logo_size;
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
        $qr = Qr::create([
            'user_id'                 => Auth::user()->id,
            'code'                    => $code,
            'qr_type'                 => $qr_type,
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

        // $logo = $request->file('qr_logo');
        // if ($logo->isValid()) {
        //     $fileName = $code . '.' . $logo->getClientOriginalExtension();
        //     $logoPath = $logo->storeAs('public/qr_codes/logos', $fileName);
        //     $logoFullPath = storage_path('app/' . $logoPath);
        //     // Save the logo path to the corresponding QR record
        //     $qr->update(['qr_logo' => $logoFullPath]);
        // }

        // Handle QR PDF
        $pdfFullPath = '';
        if ($request->hasFile('qr_data_pdf')) {
            $pdf = $request->file('qr_data_pdf');
            if ($pdf->isValid()) {
                $pdfFileName = $code . '.' . $pdf->getClientOriginalExtension();
                $pdfPath = $pdf->storeAs('public/qr_codes/pdfs', $pdfFileName);
                $pdfFullPath = url('/storage/qr_codes/pdfs/' . $pdfFileName);
                // $pdfFullPath = storage_path('app/' . $pdfPath);
            }
        }

        // Handle QR Data Image
        $dataImageFullPath = '';
        if ($request->hasFile('qr_data_image')) {
            $dataImage = $request->file('qr_data_image');
            if ($dataImage->isValid()) {
                $imageFileName = $code . '.' . $dataImage->getClientOriginalExtension();
                $dataImagePath = $dataImage->storeAs('public/qr_codes/images', $imageFileName);
                $dataImageFullPath = url('/storage/qr_codes/images/' . $imageFileName);
            }
        }
        $qrDataLink = route('showQr', $qr->code);
        // Create QR Data record
        $qrData = QrData::create([
            'code_id'                           => $qr->id,
            'qr_data_website_url'               => $request->qr_data_website_url,
            'qr_data_pdf'                       => $pdfFullPath,
            'qr_data_image'                     => $dataImageFullPath,
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
            'qr_data_location_latitude'         => $request->qr_data_location_latitude,
            'qr_data_location_longitude'        => $request->qr_data_location_longitude,
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
        foreach ($formats as $format => $field) {
            $qrCode = new Generator;
            if ($format === 'jpg' || $format === 'pdf') {
                $qrCode->format('png')->size(300);
            } else {
                $qrCode->format($format)->size(300);
            }

            if (!empty($qr_logo)) {
                $qrCode->merge($logoFullPath, 0.3, true);
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
                    $qrCode->style('square', 0.5);
                } elseif ($qr_pattern == 'square_0.9') {
                    $qrCode->style('square', 0.8);
                } else {
                    $qrCode->style($qr_pattern, 0.5);
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

            $formatDirectory = 'qr_codes/qrs/' . $format;
            $qrFileName = $qr->code . '.' . $format;
            $qrCodePath = '../public/storage/' . $formatDirectory . '/' . $qrFileName;

            if (!Storage::exists($formatDirectory)) {
                Storage::makeDirectory($formatDirectory, 0775, true);
            }

            $qrCodeString = $qrCode->errorCorrection('H')->generate($qrDataLink, $qrCodePath);

            $qr->update([
                $field => $qrFileName,
                $field . '_url' => asset($formatDirectory . '/' . $qrFileName)
            ]);
        }



        // Return the URL of the generated QR code image
        if ($qrCodeString) {
            return redirect()->route('user.qr-code.index')->with('success', 'You have successfully generated QR Code.');
        } else {
            return redirect()->back()->with('error', 'Failed to generate QR code.');
        }
    }

    public function qrPreview(Request $request)
    {


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
        $qr_logo                 = $request->qr_logo;
        $qr_logo_size            = $request->qr_logo_size;
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
        // if ($request->hasFile('qr_logo')) {
        //     $logo = $request->file('qr_logo');
        //     if ($logo->isValid()) {
        //         $code = $request->input('code');
        //         $fileName = $qr->code . '.' . $logo->getClientOriginalExtension();

        //         // Load the original logo image using GD
        //         $originalImage = imagecreatefromstring(file_get_contents($logo->getPathname()));
        //         $logoWidth = imagesx($originalImage);
        //         $logoHeight = imagesy($originalImage);

        //         // Create a new image with a light background
        //         $background = imagecreatetruecolor($logoWidth, $logoHeight);
        //         $backgroundColor = imagecolorallocate($background, 175, 175, 175); // Light gray color
        //         imagefill($background, 0, 0, $backgroundColor);

        //         // Merge the original logo with the background
        //         imagecopy($background, $originalImage, 0, 0, 0, 0, $logoWidth, $logoHeight);

        //         // Save the merged image
        //         $logoPath = 'public/qr_codes/logos/' . $fileName;
        //         $logoFPath = $logo->storeAs('public/qr_codes/logos', $fileName);
        //         $logoFullPath = storage_path('app/' . $logoFPath);
        //         imagepng($background, storage_path('app/' . $logoPath));

        //         // Free up memory
        //         imagedestroy($originalImage);
        //         imagedestroy($background);

        //         // Save the logo path to the corresponding QR record
        //         $qr->update(['qr_logo' => $logoPath]);
        //     }
        // }

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




        if ($request->hasFile('qr_logo')) {
            $formats = [
                // 'png' => 'qr_png',
                'jpg' => 'qr_jpg',
                'eps' => 'qr_eps',
                'pdf' => 'qr_pdf',
            ];
        } else {
            $formats = [
                // 'png' => 'qr_png',
                'svg' => 'qr_svg',
                'eps' => 'qr_eps',
                'jpg' => 'qr_jpg',
                'pdf' => 'qr_pdf',
            ];
        }

        // Loop through each format
        foreach ($formats as $format => $field) {

            $qrCode = new Generator;
            if ($format === 'jpg' || $format === 'pdf') {
                $qrCode->format('png')->size(230);
            } else {
                $qrCode->format('svg')->size(230);
            }

            // if (!empty($qr_logo)) {
            //     $qrCode->merge($logoFullPath, 0.3, true);
            // }
            if (!empty($qr_eye_ball)) {
                $qrCode->eye($qr_eye_ball, 0.5);
            }
            if (!empty($qr_eye_ball_color)) {
                $qrCode->eyeColor(0, $qr_eye_ball_color['r'], $qr_eye_ball_color['g'], $qr_eye_ball_color['b'], $qr_eye_frame_color['r'], $qr_eye_frame_color['g'], $qr_eye_frame_color['b'],);
                $qrCode->eyeColor(1, $qr_eye_ball_color['r'], $qr_eye_ball_color['g'], $qr_eye_ball_color['b'], $qr_eye_frame_color['r'], $qr_eye_frame_color['g'], $qr_eye_frame_color['b'],);
                $qrCode->eyeColor(2, $qr_eye_ball_color['r'], $qr_eye_ball_color['g'], $qr_eye_ball_color['b'], $qr_eye_frame_color['r'], $qr_eye_frame_color['g'], $qr_eye_frame_color['b'],);
            }
            if (!empty($qr_pattern)) {
                if ($qr_pattern == 'square_0.5') {
                    $qrCode->style('square', 0.5);
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
                if ($qr_bg_type == 'color') {
                    $qrCode->color($qr_bg_color['r'], $qr_bg_color['g'], $qr_bg_color['b']);
                }
            }

            $qrCode->errorCorrection('H');



            switch ($qr_type) {
                case 'website':
                    $qrCodeString = $qrCode->generate($data['qr_data_website_url']);
                    break;
                    // case 'pdf':
                    //     $qrCodeString = $qrCode->generate($qrDataLink);
                    //     break;
                    // case 'image':
                    //     $qrCodeString = $qrCode->generate($qrDataLink);
                    //     break;
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
                    $qrCodeString = $qrCode->generate($data['qr_data_website_url']);
                    break;
            }
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
        return view('user.pages.qr-code.edit');
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
