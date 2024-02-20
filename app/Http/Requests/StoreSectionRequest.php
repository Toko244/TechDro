<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSectionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'type_id' => 'required',
            // Add more validation rules here for other fields if needed
        ];
    }

    public function messages()
    {
        return [
            'type_id.required' => 'The Type field is required.',
            // Define custom error messages for other fields here
        ];
    }

    public function attributes()
    {
        return [
            'type_id' => 'Type',
            // Define custom attribute names for other fields here
        ];
    }
}
