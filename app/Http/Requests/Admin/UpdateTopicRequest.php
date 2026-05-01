<?php

namespace App\Http\Requests\Admin;

use App\Models\Topic;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateTopicRequest extends FormRequest
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
                'sometimes',
                'string',
                'max:16',
                Rule::unique(Topic::class)
                    ->ignoreModel($this->route('topic'))
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
            'unique' => 'The :attribute has already been taken.',
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
