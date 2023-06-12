<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
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
        $id = $this->route('category');
        return [
            'name' => 'required|string|min:2|max:255|unique:categories,name,' . $id,
            'slug' => 'required|string|min:2|max:255|unique:categories,slug,' . $id,
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5024',
        ];
    }
}
