<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GetComponentablesRequest extends FormRequest
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

        return [
            'section_id' => 'required_without:post_id|exists:sections,id',
            'post_id' => 'required_without:section_id|exists:posts,id',
        ];
    }
}
