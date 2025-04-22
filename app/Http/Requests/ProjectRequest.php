<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required'],
            'description' => ['required'],
            'company' => ['required'],
            'location' => ['required'],
            'image' => ['required'],
            'url_github' => ['required', 'active_url'],
            'url_demo' => ['required', 'active_url'],
            'tags' => ['nullable'],
            'featured' => ['required', 'boolean']
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'title' => trim($this->input('title')),
            'description' => trim($this->input('description')),
            'company' => trim($this->input('company')),
            'location' => trim($this->input('location')),
            'url_github' => trim($this->input('url_github')),
            'url_demo' => trim($this->input('url_demo')),
            'tags' => $this->input('tags') ? implode(',', array_map('trim', explode(',', $this->input('tags')))) : null,
            'featured' => $this->has('featured')
        ]);
    }
}
