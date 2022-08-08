<?php

namespace App\Http\Resources;

use App\Models\FederalEntity;
use Illuminate\Http\Resources\Json\JsonResource;

class ZipCodeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $federalEntity = $this->federalEntity;
        $settlements = $this->settlements;
        return [
            'zip_code' => $this->zip_code,
            'locality' => $this->locality,
            'federal_entity' => new FederalEntityResource($federalEntity),
            'settlements' => SettlementsResource::collection($settlements),
            'municipality' => new MunicipalityResource($this->municipality)
        ];
    }
}
