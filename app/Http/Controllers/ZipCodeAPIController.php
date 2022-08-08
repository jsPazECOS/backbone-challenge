<?php

namespace App\Http\Controllers;

use App\Models\ZipCodes;
use App\Http\Requests\ShowZipCodesRequest;

class ZipCodeAPIController extends Controller
{

    public function __invoke(ShowZipCodesRequest $request, ZipCodes $zipCodes)
    {

    }

}
