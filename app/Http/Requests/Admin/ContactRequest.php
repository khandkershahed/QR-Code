<?php

namespace App\Http\Requests\Admin;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class ContactRequest extends FormRequest
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
        $contact = $this->route('contact');  // Assuming 'contact' is the route parameter name for the Contact model instance

        return [
            'code' => 'nullable|string|max:255|unique:contacts,code,' . $contact,
            // 'code' => [
            //     'required',
            //     'string',
            //     'max:255',
            //     Rule::unique('contacts', 'code')->ignore($contact ? $contact->id : null),
            // ],
            'name'        => 'required|string|max:150',
            'email'       => 'required|email|max:150',
            'phone'       => 'nullable|string|max:20',
            'address'     => 'nullable',
            'subject'     => 'nullable|string|max:250',
            'message'     => 'required',
            'ip_address'  => 'nullable|ip|max:100',
            'status'      => 'nullable|in:pending,replied,on_going,closed',
            'priority'    => 'nullable|string|in:normal,high,urgent',
            'attachments' => 'nullable|string',
            'assigned_to' => 'nullable|exists:users,id',
            'response'    => 'nullable|string',
            'response_at' => 'nullable|date',
            'source'      => 'nullable|string|max:50',
            'is_banned'   => 'boolean',
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
            'subject.string'    => 'The subject must be a string.',
            'message.string'    => 'The message must be a string.',
            'ip_address.ip'     => 'The IP address must be a valid IP address.',
            'status.required'   => 'The status field is required.',
            'status.in'         => 'The status must be one of the following: pending, replied, on_going, closed.',
        ];
    }
    public function attributes(): array
    {
        return [
            'name'    => 'Full Name',
            'email'   => 'Email Id',
            'Subject' => 'Subject',
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
        return redirect()->back()->withErrors($errorMessages)->withInput();
    }
}
