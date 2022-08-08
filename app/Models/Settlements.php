<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Settlements extends Model
{
    use HasFactory;

    protected $casts = [
        'zip_code' => 'integer',
        'locality' => 'string',
        'municipality_id' => 'integer',
        'federal_entity_id' => 'integer',
    ];

    public function settlementType(): BelongsTo
    {
        return $this->belongsTo(SettlementTypes::class);
    }


}
