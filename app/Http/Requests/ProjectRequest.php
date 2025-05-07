<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ProjectRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required'],
            'description' => ['required'],
            'company' => ['required'],
            'location' => ['required'],
            'image' => ['required', 'image', 'mimes:jpg,png,jpg,gif,webp', 'max:2048'],
            'image_alt' => ['nullable'],
            'url_github' => ['required', 'active_url'],
            'url_demo' => ['nullable', 'active_url'],
            'tags' => ['nullable'],
            'tech_stack' => ['nullable'],
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
            'image' => $this->hasFile('image') ? $this->file('image') : null,
            'image_alt' => trim($this->input('image_alt')),
            'url_github' => trim($this->input('url_github')),
            'url_demo' => trim($this->input('url_demo')),
            'tags' => $this->input('tags') ? implode(',', array_map('trim', explode(',', $this->input('tags')))) : null,
            'tech_stack' => $this->input('tech_stack') ? implode(',', array_map('trim', explode(',', $this->input('tech_stack')))) : null,
            'featured' => $this->has('featured')
        ]);
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            redirect()->back()->withErrors($validator)->withInput()
        );
    }
}
