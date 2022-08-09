<?php

namespace App\Http\Controllers;

use App\Http\Resources\ZipCodeResource;
use App\Models\ZipCode;
use App\Http\Requests\ShowZipCodesRequest;
use App\Services\JsonResponse;

class ZipCodeAPIController extends Controller
{

    public function __invoke(ShowZipCodesRequest $request)
    {
        $input = $request->validated();
        $zipCode = ZipCode::with(['federalEntity', 'municipality'])
            ->findOrFail($input['zip_code']);

        return response()->json(new ZipCodeResource($zipCode), 200);
    }

}
