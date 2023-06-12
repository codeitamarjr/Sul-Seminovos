<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdvertisementsUpdateRequest extends FormRequest
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
            'car_year_reg' => 'required|string|min:4|max:4',
            'price' => 'required|string|min:2|max:255',
            'is_negotiable' => 'required|string|max:255',
            'car_mileage' => 'required|string|min:2|max:255',
            'car_color' => 'required|string|min:2|max:255',
            'description' => 'nullable|string|min:2|max:255',
        ];
    }
}
