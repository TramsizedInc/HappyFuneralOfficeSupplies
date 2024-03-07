<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deceased_data extends Model
{
    use HasFactory;
    protected $fillable = [
        'exhibiting_office',
        'deceased_name',
        'birth_name',
        'mother_name',
        'address',
        'hospital_code',
        'deceased_birth_day',
        'deceased_birth_place',
        'death_place',
        'death_time',
        'exhibiton_time',
        'pensioner_id',
        'id_card_number',
        'address_id_number',
        'passport_number',
        'driver_licence_number',
        'deceased_weight',
        'weight',
    ];

}
