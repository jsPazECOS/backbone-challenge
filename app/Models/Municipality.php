<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Municipality extends Model
{
    use HasFactory;

    protected $table = 'municipalities';

    protected $casts = [
        'key' => 'integer',
        'name' => 'string',
    ];

    public function zipCodes() : HasMany
    {
        return $this->hasMany(ZipCodes::class);
    }

}
