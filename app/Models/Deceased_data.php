<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Deceased_data extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'exhibiting_office',
        'deceased_first_name',
        'deceased_last_name',
        'deceased_name_prefix',
        'birth_name',
        'mother_name',
        'zip_code',
        'street',
        'house_number',
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
        'order_uuid',
    ];

}
