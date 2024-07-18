<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BirthCertificate extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'degree',
        'job',
        'child_count',
        'degree_of_relative',
        'death_place',
        'ash_storage_place',
        'deceased_birth_certificate_number',
        'wedding_birth_certificate_number',
        'wedding_date_and_place',
        'divorced_or_not',
        'dead_husbands_count',
        'legally_binding_autopsy_number',
        'selfemployee_tax_number',
        'name_of_person'
    ];
}
