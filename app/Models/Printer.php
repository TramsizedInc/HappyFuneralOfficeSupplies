<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Printer extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'type',
        'picture',    
        'documentation',   
        'type_of_toner',              
        'type_of_drumm_unit',
    ];
}
