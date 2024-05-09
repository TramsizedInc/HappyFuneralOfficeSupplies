<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderData extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'customer_id',
        'deceased_id',
        'urn_insert_id',
        'urn_kiad_id',
    ];
}
