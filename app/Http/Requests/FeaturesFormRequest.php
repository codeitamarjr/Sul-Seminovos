<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeaturesFormRequest extends FormRequest
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
            'abs' => 'nullable|string|max:5',
            'air_conditioning' => 'nullable|string|max:5',
            'air_heater' => 'nullable|string|max:5',
            'airbags' => 'nullable|string|max:5',
            'alarm' => 'nullable|string|max:5',
            'alloy_wheels' => 'nullable|string|max:5',
            'am_fm_radio' => 'nullable|string|max:5',
            'cd_player' => 'nullable|string|max:5',
            'central_locking' => 'nullable|string|max:5',
            'child_safety_locks' => 'nullable|string|max:5',
            'climate_control' => 'nullable|string|max:5',
            'cruise_control' => 'nullable|string|max:5',
            'cup_holders' => 'nullable|string|max:5',
            'driver_airbag' => 'nullable|string|max:5',
            'fog_lights' => 'nullable|string|max:5',
            'front_fog_lights' => 'nullable|string|max:5',
            'heated_seats' => 'nullable|string|max:5',
            'immobilizer' => 'nullable|string|max:5',
            'keyless_entry' => 'nullable|string|max:5',
            'leather_seats' => 'nullable|string|max:5',
            'onboard_computer' => 'nullable|string|max:5',
            'power_mirrors' => 'nullable|string|max:5',
            'power_steering' => 'nullable|string|max:5',
            'power_windows' => 'nullable|string|max:5',
            'rear_defogger' => 'nullable|string|max:5',
            'rear_parking_sensors' => 'nullable|string|max:5',
            'rear_seat_headrest' => 'nullable|string|max:5',
            'remote_boot_fuel_lid' => 'nullable|string|max:5',
            'seat_belt_warning' => 'nullable|string|max:5',
            'steering_adjustment' => 'nullable|string|max:5',
            'sun_roof' => 'nullable|string|max:5',
            'turn_indicator_on_orvm' => 'nullable|string|max:5',
            'usb_and_auxiliary_input' => 'nullable|string|max:5',
            'wheel_covers' => 'nullable|string|max:5',
        ];
    }
}
