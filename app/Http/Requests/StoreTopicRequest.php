<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreTopicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:16'
            ],
            'description' => [
                'nullable',
                'string'
            ],
            'available' => [
                'required',
                'boolean'
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Please give a value for :attribute',
            'nullable' => 'You may leave :attribute empty',
            'string' => ':attribute must contain text',
            'max' => 'Maximum length of :attribute is :max',
        ];
    }

    protected function prepareForValidation(): void
    {
        if (!$this->filled('available')) {
            $this->merge([
                'available' => false,
            ]);
        }
    }

}
