<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $player = Player::orderBy('id','desc')->get();

        return view('player.index', compact('player'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $equipment = Equipment::all();
        return view('player.create',compact('equipment'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $player = new Player();
        $player->fecha_nac = $request->fecha_nac;
        $player->nombre = $request->nombre;
        $player->posicion = $request->posicion;
        $player->equipment_id = $request->equipment_id;
        $player->save();
        return redirect()->route('player.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Player $player)
    {
        return view('player.show', compact('player'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Player $player)
    {
        return view('player.edit',compact('player'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Player $player)
    {
        $player->fecha_nac = $request->fecha_nac;
        $player->nombre = $request->nombre;
        $player->posicion = $request->posicion;
        $player->equipment_id = $request->equipment_id;

        $player->save();
        return redirect()->route('player.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Player $player)
    {
        $player->delete();
        return redirect()->route('player.index');
    }
}
