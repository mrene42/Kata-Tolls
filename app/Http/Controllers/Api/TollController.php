<?php

namespace App\Http\Controllers\Api;

use App\Models\Toll;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TollController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tolls = Toll::all();

        return response()->json($tolls, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $toll = Toll::create([
            "name" => $request->name,
            "city" => $request->city,
            "collection" => 0
        ]);

        return response()->json($toll, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
