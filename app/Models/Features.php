<?php

namespace App\Models;

use App\Models\Advertisements;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Features extends Model
{
    use HasFactory;

    protected $fillable = [
        'advertisement_id',
        'abs',
        'air_conditioning',
        'air_heater',
        'airbags',
        'alarm',
        'alloy_wheels',
        'am_fm_radio',
        'cd_player',
        'central_locking',
        'child_safety_locks',
        'climate_control',
        'cruise_control',
        'cup_holders',
        'driver_airbag',
        'fog_lights',
        'front_fog_lights',
        'heated_seats',
        'immobilizer',
        'keyless_entry',
        'leather_seats',
        'onboard_computer',
        'power_mirrors',
        'power_steering',
        'power_windows',
        'rear_defogger',
        'rear_parking_sensors',
        'rear_seat_headrest',
        'remote_boot_fuel_lid',
        'seat_belt_warning',
        'steering_adjustment',
        'sun_roof',
        'turn_indicator_on_orvm',
        'usb_and_auxiliary_input',
        'wheel_covers'
    ];

    public function advertisement()
    {
        return $this->belongsTo(Advertisements::class);
    }
}
