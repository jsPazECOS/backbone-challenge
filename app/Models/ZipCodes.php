<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ZipCodes extends Model
{
    use HasFactory;

    protected $table = 'zip_codes';

    protected $casts = [
        'zip_code' => 'integer',
        'locality' => 'string',
        'municipality_id' => 'integer',
        'federal_entity_id' => 'integer',
    ];

    public function federalEntity(): BelongsTo
    {
        return $this->belongsTo(FederalEntity::class);
    }

    public function municipality(): BelongsTo
    {
        return $this->belongsTo(Municipality::class);
    }

    public function settlements(): HasMany
    {
        return $this->hasMany(Settlements::class);
    }


}
