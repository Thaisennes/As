<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Dragon extends Model
{
    protected $fillable = [
        'name',
        'age',
        'element',
        'image',
        'trainer_id',
    ];
    public function trainer(): BelongsTo
    {
        return $this->belongsTo(Trainer::class);
    }
}
