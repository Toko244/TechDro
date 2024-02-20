<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComponentRequest extends FormRequest
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
            'type_id' => 'required|integer|in:' . implode(',', getContentTypeIds('componentTypes')),
            'name' => 'required|string|max:255|unique:components,name,' . ($this->component ? $this->component->id : 'NULL') . 'id',
            'component_data_type' => 'required|string|in:manual,connected',
            'data_type' => 'nullable',
            'section_id' => 'nullable|integer|exists:sections,id',
            'section_data_type' => 'nullable|string|in:manual,automate',
            'posts' => 'nullable:array',
            'shared_locale' => 'nullable',
            'sort' => 'nullable:array',
            'deleted_files' => 'nullable:array',
            'additional' => [
                'nullable',
                'array'
            ],
            'image' => 'nullable',
        ];
        foreach (config('app.locales') as $locale) {
            $validation = $validation + [
                "{$locale}" => 'array',
                "{$locale}.title" => 'nullable|string|max:255',
                "{$locale}.image" => 'nullable|file',
                "{$locale}.short_title" => 'nullable|string|max:255',
            ];
        }
        if ($this->filled('name')) {
            // Apply unique rule only if 'name' is filled
            $validation['name'] .= '|unique:components,name,' . ($this->component ? $this->component->id : 'NULL') . 'id';
        }
        // dd($validation);
        return $validation;
    }
}
