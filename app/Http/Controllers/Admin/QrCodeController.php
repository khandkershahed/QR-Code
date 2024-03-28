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
use SimpleSoftwareIO\QrCode\Generator;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\QrCodeRequest;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
    public function index()
    {
        $data =[
            'qrs' => Qr::with('qrData')->where('user_id', Auth::user()->id)->get(),
        ];
        return view('user.pages.qr-code.index',$data);
    }

    public function create()
    {
        return view('user.pages.qr-code.create');
    }
    public function showQr($Qr)
    {
        $qr = Qr::with('qrData')->where('code', $Qr)->first();
        if($qr){
            return view('user.pages.qr-code.qrFile', compact('qr'));
        }else{
            return redirect()->route('homePage')->with('error', 'Sorry No Data Found');
        }
    }




    public function store(QrCodeRequest $request)
    {
        // dd($request->all());
        // Assuming the typePrefix and $today variables are defined somewhere in your code
        $typePrefix = 'QR'; // Example prefix
        $today = Carbon::now()->format('dmY');
        $userId = Auth::user()->id;
        $lastCode = Qr::where('code', 'like', $typePrefix . $today . $userId . '%')
            ->orderBy('id', 'desc')
            ->first();

        // Determine the new number for the QR code
        $newNumber = $lastCode ? (int)substr($lastCode->code, -1) + 1 : 1;

        $code = $typePrefix . $today . $userId . $newNumber;

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
        $qr_image                = $request->qr_image;
        $qr_url                  = $request->qr_url;




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
            'qr_image'                => $qr_image,
            'qr_url'                  => $qr_url,
            'created_at'              => Carbon::now(),
        ]);

        // // Store data into the 'qr_data' table

        // Upload logo file if provided
        // Handle QR Logo
        if ($request->hasFile('qr_logo')) {
            $logo = $request->file('qr_logo');
            if ($logo->isValid()) {
                $fileName = $code . '.' . $logo->getClientOriginalExtension();
                $logoPath = $logo->storeAs('public/qr_codes/logos', $fileName);
                $logoFullPath = storage_path('app/' . $logoPath);
                // Save the logo path to the corresponding QR record
                $qr->update(['qr_logo' => $logoFullPath]);
            }
        }
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
        $qrDataLink = route('showQr',$code);
        // Create QR Data record
        $qrData = QrData::create([
            'code_id' => $qr->id,
            'qr_data_website_url' => $request->qr_data_website_url,
            'qr_data_pdf' => $pdfFullPath,
            'qr_data_image' => $dataImageFullPath,
            'qr_data_image_link' => $request->qr_data_image_link,
            'qr_data_sms_number' => $request->qr_data_sms_number,
            'qr_data_sms_message' => $request->qr_data_sms_message,
            'qr_data_email_id' => $request->qr_data_email_id,
            'qr_data_email_subject' => $request->qr_data_email_subject,
            'qr_data_email_body' => $request->qr_data_email_body,
            'qr_app_android' => $request->qr_app_android,
            'qr_data_app_iphone' => $request->qr_data_app_iphone,
            'qr_data_app_ipad' => $request->qr_data_app_ipad,
            'qr_data_call_number' => $request->qr_data_call_number,
            'qr_data_location' => $request->qr_data_location,
            'qr_data_coupon_code' => $request->qr_data_coupon_code,
            'qr_data_coupon_expire_date' => $request->qr_data_coupon_expire_date,
            'qr_data_coupon_header' => $request->qr_data_coupon_header,
            'qr_data_coupon_message' => $request->qr_data_coupon_message,
            'qr_data_coupon_description_header' => $request->qr_data_coupon_description_header,
            'qr_data_coupon_description_body' => $request->qr_data_coupon_description_body,
            'qr_data_coupon_website' => $request->qr_data_coupon_website,
            'qr_data_coupon_company' => $request->qr_data_coupon_company,
            'qr_data_coupon_policy' => $request->qr_data_coupon_policy,
            'qr_data_coupon_logo' => $request->qr_data_coupon_logo,
            'qr_data_audio_file' => $request->qr_data_audio_file,
            'qr_data_audio_link' => $request->qr_data_audio_link,
        ]);
        // $qrCode = QrCode::format('png')->size(230);
        $qrCode = new Generator;
        $qrCode->format('png')->size(230);

        if (!empty($qr_logo)) {
            $qrCode->merge($logoFullPath, 0.3, true);
        }
        if (!empty($qr_eye_ball)) {
            $qrCode->eye($qr_eye_ball, 0.5);
        }
        if (!empty($qr_eye_ball_color)) {
            $qrCode->eyeColor(0, $qr_eye_ball_color['r'], $qr_eye_ball_color['g'], $qr_eye_ball_color['b'], $qr_eye_frame_color['r'], $qr_eye_frame_color['g'], $qr_eye_frame_color['b'],);
            $qrCode->eyeColor(1, $qr_eye_ball_color['r'], $qr_eye_ball_color['g'], $qr_eye_ball_color['b'], $qr_eye_frame_color['r'], $qr_eye_frame_color['g'], $qr_eye_frame_color['b'],);
            $qrCode->eyeColor(2, $qr_eye_ball_color['r'], $qr_eye_ball_color['g'], $qr_eye_ball_color['b'], $qr_eye_frame_color['r'], $qr_eye_frame_color['g'], $qr_eye_frame_color['b'],);
        }
        if (!empty($qr_pattern)) {
            if($qr_pattern == 'square_0.5'){
                $qrCode->style('square', 0.1);
            }elseif($qr_pattern == 'square_0.9'){
                $qrCode->style('square', 0.9875);
            }else{
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

        if ($qr_type == 'website') {
            $qrCodeString = $qrCode->generate($data['qr_data_website_url']);
        }
        elseif ($qr_type == 'pdf') {
            $qrCodeString = $qrCode->generate($qrDataLink);
        }
        elseif ($qr_type == 'image') {
            $qrCodeString = $qrCode->generate($qrDataLink);
        }
        elseif ($qr_type == 'sms') {
            $qrCodeString = $qrCode->SMS($data['qr_data_sms_number'], $data['qr_data_sms_message']);


        }
        elseif ($qr_type == 'email') {
            $qrCodeString = $qrCode->email($data['qr_data_email_id'], $data['qr_data_email_subject'], $data['qr_data_email_body']);
        }
        elseif ($qr_type == 'mobile_app') {
            $qrCodeString = $qrCode->generate($data['qr_app_android'],$data['qr_data_app_iphone'],$data['qr_data_app_ipad']);
        }
        elseif ($qr_type == 'call') {
            $qrCodeString = $qrCode->phoneNumber($data['qr_data_call_number']);
        }
        // elseif ($qr_type == 'location') {
        //     $qrCodeString = $qrCode->geo($data);
        // } elseif ($qr_type == 'coupon_code') {
        //     $qrCodeString = $qrCode->generate($data['']);
        // } elseif ($qr_type == 'social') {
        //     $qrCodeString = $qrCode->generate($data['']);
        // } elseif ($qr_type == 'audio') {
        //     $qrCodeString = $qrCode->generate($data['']);
        // } elseif ($qr_type == 'business_page') {
        //     $qrCodeString = $qrCode->generate($data['']);
        // }
        else {
            $qrCodeString = $qrCode->generate($data['qr_data_website_url']);
            // dd('5');
        }



        $qrFileName = $code . '.png';
        $qrCodePath = 'public/qr_codes/' . $qrFileName;
        Storage::put($qrCodePath, $qrCodeString);
        $qr->update(['qr_image' => $qrFileName,'qr_url' => asset('storage/qr_codes/' . $qrFileName)]);

        // Return the URL of the generated QR code image
        if ($qrCodePath) {
            if (file_exists(public_path('storage'))) {
                return response()->json([
                    'qrCodePath' => asset('storage/qr_codes/' . $qrFileName), // Generate URL using asset() helper
                ]);
            } else {
                return response()->json(['error' => 'Symbolic link not found. Please run php artisan storage:link'], 500);
            }
        } else {
            // Handle failure
            return response()->json(['error' => 'Failed to generate QR code'], 500);
        }
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
}
