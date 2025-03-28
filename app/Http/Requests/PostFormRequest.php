<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class PostFormRequest extends FormRequest
{

    protected function prepareForValidation(): void
    {
        $this->merge([
            'slug' => Str::slug($this->slug ?? $this->title),
        ]);
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'between:3,255'],
            'slug' => ['string', 'between:3,255', 'unique:posts'],
            'content' => ['required', 'string', 'between:3,255'],
            'status' => ['required', 'string'],
        ];
    }
}
