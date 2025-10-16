<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CnCodeController extends Controller
{
    public function show(Request $request) {
        $cn_code = $request->input('cn_code');
        $result = \App\Models\CnCode::with(['aggregatedCategory','quantity', 'mainCategory'])->where('cn_code', $cn_code)->first();

        $country = $request->input('country');
        $origin_country = \App\Models\OriginCountries::where('id', $country)->first();
        $country_is_cbam = $origin_country->cbam;
        $result->origin_country = $origin_country->country_name;
        $value = $request->input('imported-goods-value');
        $value_is_cbam = ($value === '1' ? 1 : 0);
        $purpose = $request->input('imported-goods-purpose');
        $purpose_is_cbam = ($purpose === '0' ? 1 : 0);

        $cbam_applies = ($result && $result->cbam_applies && $country_is_cbam && $value_is_cbam && $purpose_is_cbam) ? true : false;
        if ($result) {
            $result->cbam_applies = $cbam_applies;
        }   

        return view('pages/index', compact('result'));
    }
    public function index() {
        $countries = \App\Models\OriginCountries::all();
        return view('pages/index', compact('countries'));
    }
}
