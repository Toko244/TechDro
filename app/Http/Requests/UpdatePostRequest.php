<?php

namespace App\Http\Requests;

use App\Repositories\Interfaces\ComponentInterfaceRepository;
use App\Repositories\Interfaces\SectionRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
{
    protected $sectionRepository;

    protected $componentRepository;

    public function __construct(SectionRepositoryInterface $sectionRepository, ComponentInterfaceRepository $componentRepository)
    {
        $this->sectionRepository = $sectionRepository;
        $this->componentRepository = $componentRepository;
    }

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
            'form_id' => 'nullable|integer|exists:forms,id',
            'additional' => 'nullable|array',
            'user_id' => 'nullable|exists:user,id',
            'sort' => 'nullable|integer',
            'type_id' => 'nullable',
            'type' => 'nullable',
            'updated_at' => 'nullable',
            'shared_locale' => 'nullable',
        ];

        foreach (getFields($this->type_id, $this->type, 'nonTrans') as $key => $fields) {
            $validation = $validation + [
                $key => $fields['required'],
            ];
        }

        foreach (getFields($this->type_id, $this->type, 'trans') as $key => $fields) {
            foreach (config('app.locales') as $locale) {
                $validationRules = [];

                if ($key === 'slug') {
                    $validation = $validation + [
                        "{$locale}.slug" => 'unique:slugs,slug,' . ($this->post ? $this->post : 'NULL') . ',slugable_id',
                    ];
                } else {
                    // Check if "required" key exists in $fields before accessing it
                    if (isset($fields['required'])) {
                        $validationRules = $fields['required'];
                    }

                    // Add other validation rules as needed
                    $validation = $validation + [
                        "{$locale}.{$key}" => $validationRules,
                    ];
                }
            }
        }

        return $validation;
    }

    /**
     * Prepare for validation
     */
    protected function prepareForValidation()
    {
        $data = [];
        if ($this->has('section_id')) {
            foreach (config('app.locales') as $locale) {
                $data[$locale] = $this->{$locale};
                $data[$locale]['slug'] = str_replace(' ', '-', $this->{$locale}['slug']);
            }
            $data['type_id'] = $this->sectionRepository->getSectionType($this->section_id);
            $data['type'] = 'sectionTypes';
            $data['updated_at'] = Carbon::now();
        } else {
            $data['type_id'] = $this->componentRepository->getComponentType($this->component_id);
            $data['data_type'] = $this->componentRepository->getComponentDataType($this->component_id);
            $data['type'] = 'componentTypes';
            $data['component_id'] = $this->component_id;
            $data['updated_at'] = Carbon::now();
        }
        $this->merge($data);
    }
}
