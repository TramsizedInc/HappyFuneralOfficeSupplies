<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Car extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'brand',
        'model',
        'year',
        'fuel_type',
        'odometer',
        
        /* registration details */
        'license_plate',
        'engine_id',
        'vin_number',
        'vehicle_operator',
        'registration_number',
        'owner',
        'registration_renewal_date',
        
        /* insurance details */
        'insurance_company',
        'insurance_bond_number',
        'insurance_renewal_date',
    ];

}
