<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'name',
        'phone',
        'phone_additional',
        'CPF',
        'CNPJ',
        'avatar',
        'postal_code',
        'state',
        'city',
        'neighborhood',
        'street',
        'number',
    ];

    /* Relationships with users */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
