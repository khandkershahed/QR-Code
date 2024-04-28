<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\Rule;

class NfcIndividualMessageRequest extends FormRequest
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
        $contact = $this->route('individual-message');  // Assuming 'contact' is the route parameter name for the Contact model instance

        return [
            'user_id'       => 'nullable|exists:users,id',
            'nfc_code'      => 'nullable',
            'code'          => 'nullable|string|max:255|unique:nfc_individual_messages,code,' . $contact,
            'name'          => 'nullable|string|max:150',
            'email'         => 'nullable|email|max:150',
            'phone'         => 'nullable|string|max:20',
            // 'phone' => [
            //     'nullable',
            //     'string',
            //     'max:20',
            //     Rule::regex('/^\+?[0-9]{1,3}-?[0-9]{3,14}$/'), // Example regex pattern, adjust as needed
            // ],
            'headline'       => 'nullable|string|max:255',
            'ip_address'    => 'nullable|ip',
            'message'       => 'nullable|string',

        ];
    }


    public function messages(): array
    {
        return [
            'code.required'     => 'The code field is required.',
            'code.unique'       => 'The code has already been taken.',
            'name.string'       => 'The name must be a string.',
            'email.email'       => 'The email must be a valid email address.',
            'phone.string'      => 'The phone number must be a string.',
            'headline.string'    => 'The headline must be a string.',
            'message.string'    => 'The message must be a string.',
            // 'ip_address.ip'     => 'The IP address must be a valid IP address.',
            // 'status.required'   => 'The status field is required.',
            // 'status.in'         => 'The status must be one of the following: pending, replied, on_going, closed.',
        ];
    }
    public function attributes(): array
    {
        return [
            'name'    => 'Full Name',
            'email'   => 'Email Id',
            'headline' => 'Headline',
        ];
    }

    /**
     * Handle a failed validation attempt.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return void
     */

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
        }
    }
}
