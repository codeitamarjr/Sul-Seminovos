<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdvertisementsFormRequest extends FormRequest
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
            'category_id' => 'required|integer|exists:categories,id',
            'condition' => 'required|string|max:255',
            'car_brand' => 'required|int',
            'car_model' => 'required|int',
            'car_year_model' => 'required|string|max:255',
            'fipe_price' => 'required|string|max:255',
            'fipe_brand' => 'required|string|max:255',
            'fipe_model' => 'required|string|max:255',
            'fipe_year_model' => 'required|int',
            'fipe_fuel' => 'required|string|max:255',
            'fipe_code' => 'required|string|max:255',
            'fipe_reference_month' => 'required|string|max:255',
            'fipe_fuel_code' => 'required|string|max:255',
        ];
    }
}
