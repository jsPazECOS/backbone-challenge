<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ZipCode extends Model
{
    use HasFactory;

    protected $table = 'zip_codes';

    protected $primaryKey = 'zip_code';

    protected $casts = [
        'zip_code' => 'string',
        'locality' => 'string',
        'municipality_id' => 'integer',
        'federal_entity_id' => 'integer',
    ];

    public function federalEntity(): BelongsTo
    {
        return $this->belongsTo(FederalEntity::class, 'federal_entity_key', 'key');
    }

    public function municipality(): BelongsTo
    {
        return $this->belongsTo(Municipality::class, 'municipality_key', 'key');
    }

    public function settlements(): HasMany
    {
        return $this->hasMany(Settlement::class, 'zip_code', 'zip_code')
            ->with('settlementType');

    }


}
