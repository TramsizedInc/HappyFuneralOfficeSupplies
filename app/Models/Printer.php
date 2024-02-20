<?php

namespace App\Models;

use App\Http\Middleware\OfficeMiddleware;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Printer extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand',
        'type',
        'picture',
        'documentation',
        'drumm_percent',
        'toner_percent',
        'office_id'

    ];

    public function office(): BelongsTo {
        return $this->belongsTo(Office::class);
    }
}
