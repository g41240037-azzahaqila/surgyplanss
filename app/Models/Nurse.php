<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Nurse extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nurse_type',
        'origin_unit',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
