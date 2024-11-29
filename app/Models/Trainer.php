<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Trainer extends Model
{
    protected $fillable = [
        'name',
        'rank'
    ];
    public function dragon(): HasMany
    {
        return $this->hasMany(Dragon::class);
    }
}
