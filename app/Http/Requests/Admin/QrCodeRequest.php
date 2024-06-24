<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class QrCodeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $qr = $this->route('qr-code');
        return [
            // Validation rules for fields in the 'qrs' table
            'user_id' => 'nullable|exists:users,id', // Ensure user_id exists in the users table
            'code' => 'nullable|string|max:255|unique:qrs,code,' . $qr,
            'qr_type' => 'nullable|string|max:255', // Validate qr_type as a string with max length 255
            'qr_template' => 'nullable|string|max:255', // Validate qr_template as a string with max length 255
            'qr_logo' => 'nullable|image|mimes:jpeg,png,jpg,|max:2048', // Validate qr_logo as an image file (adjust mime types and max size as needed)
            'qr_logo_size' => 'nullable|string|max:255', // Validate qr_logo_size as a string with max length 255
            'qr_eye_ball' => 'nullable|string|max:255', // Validate qr_eye_ball as a string with max length 255
            'qr_eye_ball_color' => 'nullable|string|max:255', // Validate qr_eye_ball_color as a string with max length 255
            'qr_eye_frame' => 'nullable|string|max:255', // Validate qr_eye_frame as a string with max length 255
            'qr_eye_frame_color' => 'nullable|string|max:255', // Validate qr_eye_frame_color as a string with max length 255
            'qr_pattern' => 'nullable|string|max:255', // Validate qr_pattern as a string with max length 255
            'qr_pattern_color' => 'nullable|string|max:255', // Validate qr_pattern_color as a string with max length 255
            'qr_color_type' => 'nullable|string|max:255', // Validate qr_color_type as a string with max length 255
            'qr_solid_color' => 'nullable|string|max:255', // Validate qr_solid_color as a string with max length 255
            'qr_gradient_color_type' => 'nullable|string|max:255', // Validate qr_gradient_color_type as a string with max length 255
            'qr_gradient_color_start' => 'nullable|string|max:255', // Validate qr_gradient_color_start as a string with max length 255
            'qr_gradient_color_end' => 'nullable|string|max:255', // Validate qr_gradient_color_end as a string with max length 255
            'qr_bg_type' => 'nullable|string|max:255', // Validate qr_bg_type as a string with max length 255
            'qr_bg_color' => 'nullable|string|max:255', // Validate qr_bg_color as a string with max length 255
            'qr_bg_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate qr_bg_image as a string with max length 255
            'qr_name' => 'nullable|string|max:255', // Validate qr_name as a string with max length 255
            'qr_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate qr_image as a string with max length 255
            'qr_url' => 'nullable|url', // Validate qr_url as a valid URL

            // Validation rules for fields in the 'qr_data' table
            'qr_data_website_url' => 'nullable|url', // Validate qr_data_website_url as a valid URL
            // 'qr_data_pdf' => 'nullable|string|max:255', // Validate qr_data_pdf as a string with max length 255
            // 'qr_data_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate qr_data_image as an image file (adjust mime types and max size as needed)
            'qr_data_image_link' => 'nullable|url', // Validate qr_data_image_link as a valid URL
            'qr_data_sms_number' => 'nullable|string|max:255', // Validate qr_data_sms_number as a string with max length 255
            'qr_data_sms_message' => 'nullable|string', // Validate qr_data_sms_message as a string with max length 255
            'qr_data_email_id' => 'nullable|string|email|max:255', // Validate qr_data_email_id as a valid email address with max length 255
            'qr_data_email_subject' => 'nullable|string|max:255', // Validate qr_data_email_subject as a string with max length 255
            'qr_data_email_body' => 'nullable|string', // Validate qr_data_email_body as a string
            'qr_app_android' => 'nullable|url', // Validate qr_app_android as a valid URL
            'qr_data_app_iphone' => 'nullable|url', // Validate qr_data_app_iphone as a valid URL
            'qr_data_app_ipad' => 'nullable|url', // Validate qr_data_app_ipad as a valid URL
            'qr_data_call_number' => 'nullable|string|max:255', // Validate qr_data_call_number as a string with max length 255
            'qr_data_location' => 'nullable|string|max:255', // Validate qr_data_location as a string with max length 255
            'qr_data_coupon_code' => 'nullable|string|max:255', // Validate qr_data_coupon_code as a string with max length 255
            'qr_data_coupon_expire_date' => 'nullable|date', // Validate qr_data_coupon_expire_date as a valid date
            'qr_data_coupon_header' => 'nullable|string|max:255', // Validate qr_data_coupon_header as a string with max length 255
            'qr_data_coupon_message' => 'nullable|string|max:255', // Validate qr_data_coupon_message as a string with max length 255
            'qr_data_coupon_description_header' => 'nullable|string', // Validate qr_data_coupon_description_header as a string
            'qr_data_coupon_description_body' => 'nullable|string', // Validate qr_data_coupon_description_body as a string
            'qr_data_coupon_website' => 'nullable|url', // Validate qr_data_coupon_website as a valid URL
            'qr_data_coupon_company' => 'nullable|string|max:255', // Validate qr_data_coupon_company as a string with max length 255
            'qr_data_coupon_policy' => 'nullable|string', // Validate qr_data_coupon_policy as a string
            'qr_data_coupon_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate qr_data_coupon_logo as a string with max length 255
            // 'qr_data_audio_file' => 'nullable|string', // Validate qr_data_audio_file as a string with max length 255
            'qr_data_audio_link' => 'nullable|url', // Validate qr_data_audio_link as a valid URL

        ];
    }

    public function messages(): array
    {
        return [
            'user_id.exists' => 'The selected user does not exist.',
            'user_id.nullable' => 'The user ID must be null or correspond to an existing user.',
            'code.string' => 'The code must be a string.',
            'code.max' => 'The code may not be greater than :max characters.',
            'qr_type.string' => 'The QR type must be a string.',
            'qr_type.max' => 'The QR type may not be greater than :max characters.',
            'qr_template.string' => 'The QR template must be a string.',
            'qr_template.max' => 'The QR template may not be greater than :max characters.',
            'qr_logo.image' => 'The QR logo must be an image file.',
            'qr_logo.mimes' => 'The QR logo must be a JPEG, PNG, JPG, or GIF file.',
            'qr_logo.max' => 'The QR logo may not be greater than :max kilobytes.',
            'qr_logo.nullable' => 'The QR logo must be null or an image file.',
            'qr_logo_size.string' => 'The QR logo size must be a string.',
            'qr_logo_size.max' => 'The QR logo size may not be greater than :max characters.',
            'qr_eye_ball.string' => 'The QR eye ball must be a string.',
            'qr_eye_ball.max' => 'The QR eye ball may not be greater than :max characters.',
            'qr_eye_ball_color.string' => 'The QR eye ball color must be a string.',
            'qr_eye_ball_color.max' => 'The QR eye ball color may not be greater than :max characters.',
            'qr_eye_frame.string' => 'The QR eye frame must be a string.',
            'qr_eye_frame.max' => 'The QR eye frame may not be greater than :max characters.',
            'qr_eye_frame_color.string' => 'The QR eye frame color must be a string.',
            'qr_eye_frame_color.max' => 'The QR eye frame color may not be greater than :max characters.',
            'qr_pattern.string' => 'The QR pattern must be a string.',
            'qr_pattern.max' => 'The QR pattern may not be greater than :max characters.',
            'qr_pattern_color.string' => 'The QR pattern color must be a string.',
            'qr_pattern_color.max' => 'The QR pattern color may not be greater than :max characters.',
            'qr_color_type.string' => 'The QR color type must be a string.',
            'qr_color_type.max' => 'The QR color type may not be greater than :max characters.',
            'qr_solid_color.string' => 'The QR solid color must be a string.',
            'qr_solid_color.max' => 'The QR solid color may not be greater than :max characters.',
            'qr_gradient_color_type.string' => 'The QR gradient color type must be a string.',
            'qr_gradient_color_type.max' => 'The QR gradient color type may not be greater than :max characters.',
            'qr_gradient_color_start.string' => 'The QR gradient color start must be a string.',
            'qr_gradient_color_start.max' => 'The QR gradient color start may not be greater than :max characters.',
            'qr_gradient_color_end.string' => 'The QR gradient color end must be a string.',
            'qr_gradient_color_end.max' => 'The QR gradient color end may not be greater than :max characters.',
            'qr_bg_type.string' => 'The QR background type must be a string.',
            'qr_bg_type.max' => 'The QR background type may not be greater than :max characters.',
            'qr_bg_color.string' => 'The QR background color must be a string.',
            'qr_bg_color.max' => 'The QR background color may not be greater than :max characters.',
            'qr_bg_image.string' => 'The QR background image must be a string.',
            'qr_bg_image.max' => 'The QR background image may not be greater than :max characters.',
            'qr_name.string' => 'The QR name must be a string.',
            'qr_name.max' => 'The QR name may not be greater than :max characters.',
            'qr_image.string' => 'The QR image must be a string.',
            'qr_image.max' => 'The QR image may not be greater than :max characters.',
            'qr_url.url' => 'The QR URL must be a valid URL.',
            // Add custom messages for other fields in the 'qrs' table as needed

            // Validation rules for fields in the 'qr_data' table
            'qr_data_website_url.url' => 'The website URL must be a valid URL.',
            'qr_data_pdf.string' => 'The PDF must be a string.',
            'qr_data_pdf.max' => 'The PDF may not be greater than :max characters.',
            'qr_data_image.image' => 'The QR data image must be an image file.',
            'qr_data_image.mimes' => 'The QR data image must be a JPEG, PNG, JPG, or GIF file.',
            'qr_data_image.max' => 'The QR data image may not be greater than :max kilobytes.',
            'qr_data_image_link.url' => 'The image link must be a valid URL.',
            'qr_data_sms_number.string' => 'The SMS number must be a string.',
            'qr_data_sms_number.max' => 'The SMS number may not be greater than :max characters.',
            'qr_data_sms_message.string' => 'The SMS message must be a string.',
            'qr_data_sms_message.max' => 'The SMS message may not be greater than :max characters.',
            'qr_app_android.url' => 'The QR Android app URL must be a valid URL.',
            'qr_data_app_iphone.url' => 'The QR iPhone app URL must be a valid URL.',
            'qr_data_app_ipad.url' => 'The QR iPad app URL must be a valid URL.',
            'qr_data_call_number.string' => 'The QR call number must be a string.',
            'qr_data_call_number.max' => 'The QR call number may not be greater than :max characters.',
            'qr_data_location.string' => 'The QR location must be a string.',
            'qr_data_location.max' => 'The QR location may not be greater than :max characters.',
            'qr_data_coupon_code.string' => 'The QR coupon code must be a string.',
            'qr_data_coupon_code.max' => 'The QR coupon code may not be greater than :max characters.',
            'qr_data_coupon_expire_date.date' => 'The QR coupon expiration date must be a valid date.',
            'qr_data_coupon_header.string' => 'The QR coupon header must be a string.',
            'qr_data_coupon_header.max' => 'The QR coupon header may not be greater than :max characters.',
            'qr_data_coupon_message.string' => 'The QR coupon message must be a string.',
            'qr_data_coupon_message.max' => 'The QR coupon message may not be greater than :max characters.',
            'qr_data_coupon_description_header.string' => 'The QR coupon description header must be a string.',
            'qr_data_coupon_description_body.string' => 'The QR coupon description body must be a string.',
            'qr_data_coupon_website.url' => 'The QR coupon website must be a valid URL.',
            'qr_data_coupon_company.string' => 'The QR coupon company must be a string.',
            'qr_data_coupon_company.max' => 'The QR coupon company may not be greater than :max characters.',
            'qr_data_coupon_policy.string' => 'The QR coupon policy must be a string.',
            'qr_data_coupon_logo.string' => 'The QR coupon logo must be a string.',
            'qr_data_coupon_logo.max' => 'The QR coupon logo may not be greater than :max characters.',
            'qr_data_audio_file.string' => 'The QR audio file must be a string.',
        ];
    }


    public function attributes(): array
    {
        return [
            // Attributes for fields in the 'qrs' table
            'user_id'                           => 'User ID',
            'code'                              => 'Code',
            'qr_type'                           => 'QR Type',
            'qr_template'                       => 'QR Template',
            'qr_logo'                           => 'QR Logo',
            'qr_logo_size'                      => 'QR Logo Size',
            'qr_eye_ball'                       => 'QR Eye Ball',
            'qr_eye_ball_color'                 => 'QR Eye Ball Color',
            'qr_eye_frame'                      => 'QR Eye Frame',
            'qr_eye_frame_color'                => 'QR Eye Frame Color',
            'qr_pattern'                        => 'QR Pattern',
            'qr_pattern_color'                  => 'QR Pattern Color',
            'qr_color_type'                     => 'QR Color Type',
            'qr_solid_color'                    => 'QR Solid Color',
            'qr_gradient_color_type'            => 'QR Gradient Color Type',
            'qr_gradient_color_start'           => 'QR Gradient Color Start',
            'qr_gradient_color_end'             => 'QR Gradient Color End',
            'qr_bg_type'                        => 'QR Background Type',
            'qr_bg_color'                       => 'QR Background Color',
            'qr_bg_image'                       => 'QR Background Image',
            'qr_name'                           => 'QR Name',
            'qr_image'                          => 'QR Image',
            'qr_url'                            => 'QR URL',

            // Attributes for fields in the 'qr_data' table
            'qr_data_website_url'               => 'Website URL',
            'qr_data_pdf'                       => 'PDF',
            'qr_data_image'                     => 'Image',
            'qr_data_image_link'                => 'Image Link',
            'qr_data_sms_number'                => 'SMS Number',
            'qr_data_sms_message'               => 'SMS Message',
            'qr_data_email_id'                  => 'QR Email ID',
            'qr_data_email_subject'             => 'Email Subject',
            'qr_data_email_body'                => 'Email Body',
            'qr_app_android'                    => 'Android App',
            'qr_data_app_iphone'                => 'iPhone App',
            'qr_data_app_ipad'                  => 'iPad App',
            'qr_data_call_number'               => 'Call Number',
            'qr_data_location'                  => 'Location',
            'qr_data_coupon_code'               => 'Coupon Code',
            'qr_data_coupon_expire_date'        => 'Coupon Expiry Date',
            'qr_data_coupon_header'             => 'Coupon Header',
            'qr_data_coupon_message'            => 'Coupon Message',
            'qr_data_coupon_description_header' => 'Coupon Description Header',
            'qr_data_coupon_description_body'   => 'Coupon Description Body',
            'qr_data_coupon_website'            => 'Coupon Website',
            'qr_data_coupon_company'            => 'Coupon Company',
            'qr_data_coupon_policy'             => 'Coupon Policy',
            'qr_data_coupon_logo'               => 'Coupon Logo',
            'qr_data_audio_file'                => 'Audio File',
            'qr_data_audio_link'                => 'Audio Link',
        ];
    }


    protected function failedValidation(Validator $validator)
    {
        $this->recordErrorMessages($validator);
        parent::failedValidation($validator);
    }

    /**
     * Record the error messages displayed to the user.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return void
     */
    protected function recordErrorMessages(Validator $validator)
    {
        $errorMessages = $validator->errors()->all();
        foreach ($errorMessages as $errorMessage) {
            flash()->addError($errorMessage);
            // session()->flash('error', ['message' => $errorMessage]);
        }
    }
}
