<?php

namespace App\Http\Controllers;

use App\Models\Origin;
use Illuminate\Http\Request;

class OriginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $origin = Origin::orderBy('id','desc')->get();

        return view('origin.index', compact('origin'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('origin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $origin = new Origin();
        $origin->nombre= $request->nombre;
        $origin->otros_datos = $request->otros_datos;
        $origin->save();
        return redirect()->route('origin.index'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Origin $origin)
    {
        return view('origin.show', compact('origin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Origin $origin)
    {
        return view('origin.edit',compact('origin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Origin $origin)
    {
        $origin->nombre= $request->nombre;
        $origin->otros_datos = $request->otros_datos;
        $origin->save();
        return redirect()->route('origin.index'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Origin $origin)
    {
        $origin->delete();
        return redirect()->route('origin.index');
    }
}
