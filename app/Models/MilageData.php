<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Softdeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes as EloquentSoftDeletes;

class MilageData extends Model
{
    use HasFactory;
    use EloquentSoftDeletes;

    protected $fillable = [
        'license_plate',
        'driver',
        'milage',
        'fuel_price',
        'fuel_amount',
    ];
}
