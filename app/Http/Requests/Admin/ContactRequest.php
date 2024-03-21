<?php

namespace App\Http\Requests\Admin;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
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
        'code' => [
            'required',
            'string',
            'max:255',
            Rule::unique('contacts', 'code')->ignore($contact ? $contact->id : null),
        ],
        'name' => 'nullable|string|max:150',
        'email' => 'nullable|email|max:150',
        'phone' => 'nullable|string|max:20',
        'address' => 'nullable|string|max:150',
        'subject' => 'nullable|string|max:255',
        'message' => 'nullable|string',
        'ip_address' => 'nullable|ip|max:100',
        'status' => 'required|in:pending,replied,on_going,closed',
        'priority' => 'required|string|in:normal,high,urgent',
        'attachments' => 'nullable|string',
        'assigned_to' => 'nullable|exists:users,id',
        'response' => 'nullable|string',
        'response_at' => 'nullable|date',
        'source' => 'nullable|string|max:50',
        'is_banned' => 'boolean',
    ];
}


    public function messages(): array
    {
        $contact = $this->route('contact');  // Assuming 'contact' is the route parameter name for the Contact model instance

        return [
            'country_id' => 'nullable|exists:countries,id',
            'code' => [
                'required',
                'string',
                'max:255',
                Rule::unique('contacts', 'code')->ignore($contact->id),
            ],
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'nullable|string',
            'ip_address' => 'nullable|ip|max:100',
            'status' => 'required|in:pending,replied,on_going,closed',
        ];
        return [
            'country_id.exists' => 'The selected country is invalid.',
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
            'group_name' => 'permission Group name',
            'name' => 'permission name',
        ];
    }
}
