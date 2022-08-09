<?php

namespace App\Http\Controllers;

use App\Http\Resources\ZipCodeResource;
use App\Models\ZipCode;
use App\Http\Requests\ShowZipCodesRequest;
use Illuminate\Support\Facades\Cache;

class ZipCodeAPIController extends Controller
{

    public function __invoke(ShowZipCodesRequest $request)
    {
        $input = $request->validated();

        if (!$zipCode = Cache::get($input['zip_code'])) {
            $zipCode = ZipCode::with(['federalEntity', 'municipality'])->findOrFail($input['zip_code']);
            Cache::add($input['zip_code'], $zipCode);
        }
        return response()->json(new ZipCodeResource($zipCode), 200);
    }

}
