<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Reseller;
use Illuminate\Validation\Rule;
use Illuminate\Contracts\Validation\Validator;

class ResellerProfileUpdateRequest extends FormRequest
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

        return [
            'name'              => ['string', 'max:255'],
            'email'             => ['email', 'max:255', Rule::unique(Reseller::class)->ignore($this->user()->id)],
            'profile_image'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'company_logo'      => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
            session()->flash('error', ['message' => $errorMessage]);
        }
    }
}
