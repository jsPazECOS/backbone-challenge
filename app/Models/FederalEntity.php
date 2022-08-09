<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FederalEntity extends Model
{
    use HasFactory;

    protected $table = 'federal_entities';

    protected $casts = [
        'key' => 'integer',
        'name' => 'string',
    ];

    public function zipCodes() : HasMany
    {
        return $this->hasMany(ZipCode::class);
    }
}
