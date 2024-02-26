<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'exhibition_date',
        'expire_date',
        'amount_to_be_paid',
        'customer_code',
        'street_name',
        'zip_code',
        'amount_used',
        'yearly_check_date'
    ];
}
