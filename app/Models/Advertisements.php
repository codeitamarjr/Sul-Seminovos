<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisements extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'subcategory_id',
        'childcategory_id',
        'description',
        'price',
        'is_negotiable',
        'condition',
        'listing_location',
        'state_id',
        'city_id',
        'publish',
        'publish_date',
        'seller_type',
        'link',
        'car_brand',
        'car_model',
        'car_year_model',
        'car_year_reg',
        'car_model_detail',
        'car_mileage',
        'car_transmission',
        'car_fuel_type',
        'car_engine_size',
        'car_color',
        'car_body_type',
        'car_drive_type',
        'car_license_plate',

        'fipe_price',
        'fipe_brand',
        'fipe_model',
        'fipe_year_model',
        'fipe_fuel',
        'fipe_code',
        'fipe_reference_month',
        'fipe_fuel_code',
        'user_id',
    ];

    /* Relationships with user and category */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
