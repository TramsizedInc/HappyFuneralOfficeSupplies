<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Office extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'office_name',
        'office_manager',
        'zip_code',
        'city',
        'street',
        'house_number',
        'number_of_workers'
    ];
}
