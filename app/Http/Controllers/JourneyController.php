<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Journey;
use App\Models\Origin;
use App\Models\Traveler;
use Illuminate\Http\Request;

class JourneyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $journey = Journey::orderBy('id','desc')->get();

        return view('journey.index', compact('journey'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $travelers = Traveler::all();
        $origins = Origin::all();
        $destinations = Destination::all();
        return view('journey.create',compact('travelers','origins','destinations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $journey = new Journey();
        $journey->num_plazas= $request->num_plazas;
        $journey->fecha= $request->fecha;
        $journey->otros_datos = $request->otros_datos;
        $journey->traveler_id = $request->traveler_id;
        $journey->origin_id = $request->origin_id;
        $journey->destination_id = $request->destination_id;
        $journey->save();
        return redirect()->route('journey.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Journey $journey)
    {
        return view('journey.show', compact('journey'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Journey $journey)
    {
        return view('journey.edit',compact('journey'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Journey $journey)
    {
        $journey->num_plazas= $request->num_plazas;
        $journey->fecha = $request->fecha;
        $journey->otros_datos = $request->otros_datos;
        $journey->traveler_id = $request->traveler_id;
        $journey->origin_id = $request->origin_id;
        $journey->destination_id = $request->destination_id;
        $journey->save();
        return redirect()->route('journey.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Journey $journey)
    {
        $journey->delete();
        return redirect()->route('journey.index');
    }
}
