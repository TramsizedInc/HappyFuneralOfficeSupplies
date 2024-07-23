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
        'customer_data_id',
        'deceased_data_id',
        'birth_certificate_id',
        '_urn_k_i_a_datas_id',
        'inner_uuid',
    ];
}
