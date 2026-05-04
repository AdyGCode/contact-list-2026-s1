<?php

namespace App\Http\Requests\Admin;

use App\Models\Topic;
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
                'required',
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
        parent::validateResolved();

        if (!$this->route('topic') instanceof Topic) {
            abort(404, 'Topic not found');
        }
    }

}
