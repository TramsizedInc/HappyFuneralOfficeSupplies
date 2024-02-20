<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OfficeSupply extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'amount_of_toners',
        'amount_of_drumms',
        'level_of_toners',
        'level_of_drumms',
    ];
}
