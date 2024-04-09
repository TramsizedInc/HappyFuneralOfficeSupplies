<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class urn_insert_type extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'normal_price',
        'selling_price'
    ];
}
