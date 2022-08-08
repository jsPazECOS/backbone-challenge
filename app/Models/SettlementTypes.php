<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SettlementTypes extends Model
{
    use HasFactory;

    protected $casts = [
        'name' => 'string'
    ];

    public function settlements(): HasMany
    {
        return $this->hasMany(Settlements::class);
    }
}

