<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class SettlementsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $type = $this->settlementType;

        return [
            'key' => $this->key,
            'name' => Str::upper($this->name),
            'zone_type' => Str::upper($this->zone_type),
            'settlement_type' => [
                'name' => $type->name
            ],
        ];
    }
}
