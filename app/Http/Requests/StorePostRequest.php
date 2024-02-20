<?php

namespace App\Http\Requests;

use App\Repositories\Interfaces\ComponentInterfaceRepository;
use App\Repositories\Interfaces\SectionRepositoryInterface;
use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'author_id' => 'nullable|exists:user,id',
            'sort' => 'nullable|integer',
            'type_id' => 'nullable',
            'thumb' => 'nullable',
            'data_type' => 'nullable',
            'component_id' => 'nullable',
            'type' => 'nullable',
        ];

        foreach (getFields($this->type_id, $this->type, 'nonTrans') as $key => $fields) {

            $validation = $validation + [
                $key => $fields['required'],
            ];
        }

        foreach (getFields($this->type_id, $this->type, 'trans') as $key => $fields) {
            foreach (config('app.locales') as $locale) {
                $validationRules = [];

                // Check if "required" key exists in $fields before accessing it
                if (isset($fields['required'])) {
                    $validationRules = $fields['required'];
                }
                // dd($validation);
                // Add other validation rules as needed
                $validation = $validation + [
                    "{$locale}.{$key}" => $validationRules,
                ];
            }
        }
        // dd($validation);

        return $validation;
    }

    /**
     * Prepare for validation
     */
    protected function prepareForValidation()
    {

        $data = [];

        // Check if it's a section
        if ($this->has('section_id')) {
            foreach (config('app.locales') as $locale) {
                $data[$locale] = $this->{$locale};
                $data[$locale]['slug'] = str_replace(' ', '-', $this->{$locale}['slug']);
            }
            $data['type_id'] = $this->sectionRepository->getSectionType($this->section_id);
            $data['type'] = 'sectionTypes';
        }
        // Check if it's a component
        elseif ($this->has('component_id')) {
            $data['type_id'] = $this->componentRepository->getComponentType($this->component_id);
            $data['data_type'] = $this->componentRepository->getComponentDataType($this->component_id);
            $data['type'] = 'componentTypes';
            $data['component_id'] = $this->component_id;
        }

        $this->merge($data);
    }
}
