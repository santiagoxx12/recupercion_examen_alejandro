<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Goal;
use App\Models\Player;
use Illuminate\Http\Request;

class GoalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $goal = Goal::orderBy('id','desc')->get();

        return view('goal.index', compact('goal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $players = Player::all();
        $games = Game::all();
        return view('goal.create',compact('players','games'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $goal = new Goal();
        $goal->min= $request->min;
        $goal->desc = $request->desc;
        $goal->player_id = $request->player_id;
        $goal->game_id = $request->game_id;
        $goal->save();
        return redirect()->route('goal.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Goal $goal)
    {
        return view('goal.show', compact('goal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Goal $goal)
    {
        return view('goal.edit',compact('goal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Goal $goal)
    {
        $goal->min= $request->min;
        $goal->desc = $request->desc;
        $goal->player_id = $request->player_id;
        $goal->game_id = $request->game_id;
        $goal->save();
        return redirect()->route('goal.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Goal $goal)
    {
        $goal->delete();
        return redirect()->route('goal.index');
    }
}
