<?php

namespace App\Http\Controllers\Api;

use App\Models\Toll;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = Vehicle::all();

        return response()->json($vehicles, 200);
    }

    public function passToll (string $id, string $toll_id)
    {
        $vehicle = Vehicle::find($id);
        $toll = Toll::find($toll_id);

        $vehicle->total_expenses += $toll->collection;
        $vehicle->save();

        return response()->json($vehicle, 200);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $vehicle = Vehicle::create([
            "license" => $request->license,
            "type_id" => $request->type_id,
            "total_expenses" => 0
        ]);

        return response()->json($vehicle, 201);
    }

}
