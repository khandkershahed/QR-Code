<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class NfcCardRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $nfc = $this->route('nfc-card');
        return [
            'user_id' => 'nullable|exists:users,id', // Ensure user_id exists in the users table
            'code' => 'nullable|string|max:255|unique:nfc-cards,code,' . $nfc,
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'first_name' => 'nullable|string',
            'last_name' => 'nullable|string',
            'designation' => 'nullable|string',
            'address_line_one' => 'nullable|string',
            'address_line_two' => 'nullable|string',
            'phone_work' => 'nullable|string',
            'phone_personal' => 'nullable|string',
            'email_work' => 'nullable|string|email',
            'email_personal' => 'nullable|string|email',
            'facebook_url' => 'nullable|string|url',
            'instagram_url' => 'nullable|string|url',
            'twitter_url' => 'nullable|string|url',
            'youtube_url' => 'nullable|string|url',
            'google_url' => 'nullable|string|url',
            'pinterest_url' => 'nullable|string|url',
            'linkedin_url' => 'nullable|string|url',
            'google_plus_url' => 'nullable|string|url',
            'gmail_url' => 'nullable|string|url',
            'apple_url' => 'nullable|string|url',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'bio_title' => 'nullable|string',
            'bio_description' => 'nullable|string',
            'service_section_title' => 'nullable|string',
            'service_section_description' => 'nullable|string',
            'service_one_title' => 'nullable|string',
            'service_one_description' => 'nullable|string',
            'service_one_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'service_two_title' => 'nullable|string',
            'service_two_description' => 'nullable|string',
            'service_two_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'service_three_title' => 'nullable|string',
            'service_three_description' => 'nullable|string',
            'service_three_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'company_title' => 'nullable|string',
            'company_name' => 'nullable|string',
            'company_address_line_one' => 'nullable|string',
            'company_address_line_two' => 'nullable|string',
            'company_email' => 'nullable|string|email',
            'company_about_title' => 'nullable|string',
            'company_about_description' => 'nullable|string',

        ];
    }

    public function messages(): array
    {
        return [
            'user_id.exists'   => 'The selected user does not exist.',
            'user_id.nullable' => 'The user ID must be null or correspond to an existing user.',
            'code.string'      => 'The code must be a string.',
            'code.max'         => 'The code may not be greater than: max characters.',
            'email_work.email' => 'The email must be a valid email address.',
            'email_personal.email' => 'The email must be a valid email address.',
            'facebook_url.url' => 'The Facebook URL must be a valid URL.',
            'instagram_url.url' => 'The Instagram URL must be a valid URL.',
            'twitter_url.url' => 'The Twitter URL must be a valid URL.',
            'youtube_url.url' => 'The YouTube URL must be a valid URL.',
            'google_url.url' => 'The Google URL must be a valid URL.',
            'pinterest_url.url' => 'The Pinterest URL must be a valid URL.',
            'linkedin_url.url' => 'The LinkedIn URL must be a valid URL.',
            'google_plus_url.url' => 'The Google Plus URL must be a valid URL.',
            'gmail_url.url' => 'The Gmail URL must be a valid URL.',
            'apple_url.url' => 'The Apple URL must be a valid URL.',
            'company_email.email' => 'The company email must be a valid email address.',

        ];
    }


    public function attributes(): array
    {
        return [
            'banner_image'              => 'Banner Image',
            'first_name'                => 'First Name',
            'last_name'                 => 'Last Name',
            'designation'               => 'Designation',
            'address_line_one'          => 'Address Line One',
            'address_line_two'          => 'Address Line Two',
            'phone_work'                => 'Work Phone',
            'phone_personal'            => 'Personal Phone',
            'email_work'                => 'Work Email',
            'email_personal'            => 'Personal Email',
            'facebook_url'              => 'Facebook URL',
            'instagram_url'             => 'Instagram URL',
            'twitter_url'               => 'Twitter URL',
            'youtube_url'               => 'YouTube URL',
            'google_url'                => 'Google URL',
            'pinterest_url'             => 'Pinterest URL',
            'linkedin_url'              => 'LinkedIn URL',
            'google_plus_url'           => 'Google Plus URL',
            'gmail_url'                 => 'Gmail URL',
            'apple_url'                 => 'Apple URL',
            'profile_image'             => 'Profile Image',
            'bio_title'                 => 'Bio Title',
            'bio_description'           => 'Bio Description',
            'company_title'             => 'Company Title',
            'company_name'              => 'Company Name',
            'company_address_line_one'  => 'Company Address Line One',
            'company_address_line_two'  => 'Company Address Line Two',
            'company_about_title'       => 'Company About Title',
            'company_about_description' => 'Company About Description',
            'qr_code'                   => 'QR Code',
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
            // flash()->addError($errorMessage);
            session()->flash('error',  $errorMessage);
        }
    }
}
