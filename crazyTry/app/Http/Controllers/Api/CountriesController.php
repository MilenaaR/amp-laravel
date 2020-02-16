<?php

namespace App\Http\Controllers\Api;

use App\Country;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CountriesController extends Controller {

    public function index() {

        return response()->json(Country::all());
    }

    public function store(Request $request) {

        $country = Country::create($request->all());
            return response()->json($country, 201);
    }

    public function show(Country $country) {

        return response()->json($country);
    }

    public function update(Request $request, Country $country) {

        $country->fill($request->all());
        $country->save();
            return response()->json($country);
    }

    public function delete(Country $country) {

        $country->delete();
            return response()->noContent();
    }
}
