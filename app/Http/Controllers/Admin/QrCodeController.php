<?php

namespace App\Http\Controllers\Admin;

use Image;
// use App\Models\Admin\QrCode;
use App\Models\Admin\Qr;
use Illuminate\Support\Str;
use App\Models\Admin\QrData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\QrCodeRequest;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
    public function index()
    {
        return view('user.pages.qr-code.index');
    }

    public function create()
    {
        return view('user.pages.qr-code.create');
    }



    public function store(QrCodeRequest $request)
    {
        dd($request->all());
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

        $logo = $qr_logo ;
        $fileName = uniqid() . '.' . $logo->getClientOriginalExtension();
        $logoPath = $logo->storeAs('public/qr_codes/logos', $fileName);
        $logoFullPath = storage_path('app/' . $logoPath);

        // Store data into the 'qrs' table
        $qr = Qr::create([
            'user_id'                 => Auth::user()->id,
            // 'code'                    => $request->code,
            'qr_type'                 => $qr_type,
            'qr_template'             => $qr_template,
            'qr_logo_size'            => $qr_logo_size,
            'qr_eye_ball'             => $qr_eye_ball,
            'qr_eye_ball_color'       => $qr_eye_ball_color,
            'qr_eye_frame'            => $qr_eye_frame,
            'qr_eye_frame_color'      => $qr_eye_frame_color,
            'qr_pattern'              => $qr_pattern,
            'qr_pattern_color'        => $qr_pattern_color,
            'qr_color_type'           => $qr_color_type,
            'qr_solid_color'          => $qr_solid_color,
            'qr_gradient_color_type'  => $qr_gradient_color_type,
            'qr_gradient_color_start' => $qr_gradient_color_start,
            'qr_gradient_color_end'   => $qr_gradient_color_end,
            'qr_bg_type'              => $qr_bg_type,
            'qr_bg_color'             => $qr_bg_color,
            'qr_bg_image'             => $qr_bg_image,
            'qr_name'                 => $qr_name,
            'qr_image'                => $qr_image,
            'qr_url'                  => $qr_url,
        ]);

        // Store data into the 'qr_data' table
        $qrData = QrData::create([
            'code_id' => $qr->id,
            'qr_data_website_url' => $request->qr_data_website_url,
            'qr_data_pdf' => $request->qr_data_pdf,
            'qr_data_image' => $request->qr_data_image,
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

        // Upload logo file if provided
        if ($request->hasFile('qr_logo')) {
            $logo = $request->file('qr_logo');
            $fileName = uniqid() . '.' . $logo->getClientOriginalExtension();
            $logoPath = $logo->storeAs('public/qr_codes/logos', $fileName);
            $logoFullPath = storage_path('app/' . $logoPath);
            // Save the logo path to the corresponding QR record
            $qr->update(['qr_logo' => $logoFullPath]);
        }


        $qrCode = new QrCode();

        $qrCode->format('png');
        $qrCode->eye($request->eye);
        $qrCode->style($request->style);
        $qrCode->backgroundColor($qr_bg_color['r'], $qr_bg_color['g'], $qr_bg_color['b']);
        $qrCode->color($qr_solid_color['r'], $qr_solid_color['g'], $qr_solid_color['b']);
        $qrCode->merge($logoFullPath, 0.2, true);
        $qrCode->generate($data);

        // Generate SVG QR code with logo
        $qrCode= QrCode::format('png')->size(250)
            ->eye($request->eye)
            ->style($request->style)
            ->backgroundColor($qr_bg_color['r'], $qr_bg_color['g'], $qr_bg_color['b'])
            ->color($qr_solid_color['r'], $qr_solid_color['g'], $qr_solid_color['b'])
            ->merge($logoFullPath, 0.2, true)
            ->generate($data);

            $qrFileName = $qr_name . '.png';
            $qrCodePath = 'public/qr_codes/' . $qrFileName;
            Storage::put($qrCodePath, $qrCode);

            // Return the URL of the generated QR code image
            if ($qrCodePath) {
                if (file_exists(public_path('storage'))) {
                    return response()->json([
                        'qrCodePath' => asset('storage/qr_codes/'.$qrFileName), // Generate URL using asset() helper
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
