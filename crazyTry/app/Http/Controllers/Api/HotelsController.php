<?php

namespace App\Http\Controllers\Api;

use App\Hotel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelsController extends Controller {

    public function index() {

        return response()->json(Hotel::all());
    }

    public function store(Request $request) {

        $hotel = Hotel::create($request->all());
            return response()->json($hotel, 201);
    }

    public function show(Hotel $hotel) {

        return response()->json($hotel);
    }

    public function update(Request $request, Hotel $hotel) {

        $hotel->fill($request->all());
        $hotel->save();
            return response()->json($hotel);
    }

    public function delete(Hotel $hotel) {

        $hotel->delete();
            return response()->noContent();
    }
}
