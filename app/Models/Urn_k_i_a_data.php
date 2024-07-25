<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Urn_k_i_a_data extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
            'exhibition_date',
            'hv_done_status_date',
            'hv_have_status_date',
            'hv_is_done',
            'hv_exhibition_date',
            'choosen_chrematory',
            'urn_inside_form',
            'choosen_cemetary',
            'location',
            'new_or_old',
            'tombstone_number',
            'date_of_funeral',
            'hour_and_minute_of_funeral',
            'deceased_id',
            'customer_id_card_number'
    ];
}
