<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomerData extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'customer',
        'born_name',
        'zip_code',
        'street',
        'house_number',
        'mother_name',
        'birth_place_with_birth_day',
        'mobile_number',
        'email',
        'id_card_number',
        'id_card_expire_date',
        'id_card_exhibition_place',
        'exhibiting_office',
        'address_id_number',
        'customer_birth_day',
        'birth_place',
    ];
}
