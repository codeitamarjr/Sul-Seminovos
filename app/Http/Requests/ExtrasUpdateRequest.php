<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExtrasUpdateRequest extends FormRequest
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
            'advertisement_id' => 'required|integer|exists:advertisements,id',
            'single_owner' => 'nullable|string|max:5',
            'paid_vehicle_tax' => 'nullable|string|max:5',
            'no_trade' => 'nullable|string|max:5',
            'with_leasing' => 'nullable|string|max:5',
            'licensed' => 'nullable|string|max:5',
            'factory_warranty' => 'nullable|string|max:5',
            'collector' => 'nullable|string|max:5',
            'all_maintenance_at_dealer' => 'nullable|string|max:5',
            'service_book' => 'nullable|string|max:5',
            'guarantee' => 'nullable|string|max:5',
            'adapted_for_disabled' => 'nullable|string|max:5',
        ];
    }
}
