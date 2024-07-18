<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CheckModel extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'type',
        'exhibition_date',
        'expire_date',
        'amount_to_be_paid',
        'customer_code',
        'street_name',
        'zip_code',
        'amount_used',
        'yearly_check_date',
        'office_id',
        'paid'
    ];


}
