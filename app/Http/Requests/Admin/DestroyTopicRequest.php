<?php

namespace App\Http\Requests\Admin;

use App\Models\Topic;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class DestroyTopicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }


    public function rules(): array
    {
        return [
            // future‑proofed: confirmation input
            'confirmation_name' => [
                'nullable',
                'string',
            ],
        ];
    }

    /**
     * Ensure the topic exists.
     * Route model binding already handles this, but this safeguards
     * future non‑bound usage (eg. confirmation step POST).
     */
    public function validateResolved(): void
    {

        if (! $this->route('topic') instanceof Topic) {
            abort(404, 'Topic not found Not instance');
        }

                parent::validateResolved();

    }

}
