<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extras extends Model
{
    use HasFactory;

    protected $fillable = [
        'advertisement_id',
        'single_owner',
        'paid_vehicle_tax',
        'no_trade',
        'with_leasing',
        'licensed',
        'factory_warranty',
        'collector',
        'all_maintenance_at_dealer',
        'service_book',
        'guarantee',
        'adapted_for_disabled',
    ];

    public function advertisement()
    {
        return $this->belongsTo(Advertisement::class);
    }
}
