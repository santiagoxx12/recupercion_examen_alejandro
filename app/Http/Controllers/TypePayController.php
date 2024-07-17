<?php

namespace App\Http\Controllers;

use App\Models\Type_Pay;
use Illuminate\Http\Request;

class TypePayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $type_pay = Type_Pay::orderBy('id','desc')->get();

        return view('type_pay.index', compact('type_pay'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('type_pay.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $type_pay = new Type_Pay();
        $type_pay->tipo= $request->tipo;
        $type_pay->save();
        return redirect()->route('type_pay.index');   
    }

    /**
     * Display the specified resource.
     */
    public function show(Type_Pay $type_Pay)
    {
        return view('type_Pay.show', compact('type_Pay'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type_Pay $type_Pay)
    {
        return view('type_Pay.edit',compact('type_Pay'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type_Pay $type_Pay)
    {
        $type_Pay->tipo= $request->tipo;
        $type_Pay->save();
        return redirect()->route('type_Pay.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type_Pay $type_Pay)
    {
        $type_Pay->delete();
        return redirect()->route('type_Pay.index');
    }
}
