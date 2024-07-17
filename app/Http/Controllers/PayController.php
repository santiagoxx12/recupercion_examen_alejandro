<?php

namespace App\Http\Controllers;

use App\Models\Collaborator;
use App\Models\Pay;
use App\Models\Type_Pay;
use Illuminate\Http\Request;

class PayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pay = Pay::orderBy('id','desc')->get();

        return view('pay.index', compact('pay'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $collaborators = Collaborator::all();
        $type_pays = Type_Pay::all();
        return view('pay.create',compact('collaborators','type_pays'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pay = new Pay();
        $pay->cantidad= $request->cantidad;
        $pay->concepto = $request->concepto;
        $pay->fecha_pg = $request->fecha_pg;
        $pay->collaborator_id = $request->collaborator_id;
        $pay->type__pay_id = $request->type__pay_id;
        $pay->save();
        return redirect()->route('pay.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pay $pay)
    {
        return view('pay.show', compact('pay'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pay $pay)
    {
        return view('pay.edit',compact('pay'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pay $pay)
    {
        $pay->cantidad= $request->cantidad;
        $pay->concepto = $request->concepto;
        $pay->fecha_pg = $request->fecha_pg;
        $pay->collaborator_id = $request->collaborator_id;
        $pay->type__pay_id = $request->type__pay_id;
        $pay->save();
        return redirect()->route('pay.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pay $pay)
    {
        $pay->delete();
        return redirect()->route('pay.index');
    }
}
