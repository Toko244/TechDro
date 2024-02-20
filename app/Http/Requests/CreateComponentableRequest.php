<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateComponentableRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {

        $validation = [
            'section_id' => 'nullable|integer|exists:sections,id',
            'post_id' => 'nullable|integer|exists:posts,id',
            'component_id' => 'required|integer',
            'active' => 'nullable|boolean',
            'additional' => [
                'nullable',
                'array'
            ],
        ];
        foreach (config('app.locales') as $locale) {
            $validation = $validation + [
                "{$locale}" => 'array',
                "{$locale}.title" => 'nullable|string|max:255',
                "{$locale}.short_title" => 'nullable|string|max:255',
            ];
        }
        // dd($validation);

        return $validation;
    }
}
