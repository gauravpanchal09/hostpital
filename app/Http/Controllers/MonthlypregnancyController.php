<?php

namespace App\Http\Controllers;

use App\Models\Monthlypregnancy;
use App\Http\Requests\Monthlypregnancy as MonthlypregnancyRequest;

class MonthlypregnancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pregnancys = Monthlypregnancy::orderBy('id', 'DESC')->get();
        return view('monthlypregnancy.index', compact('pregnancys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('monthlypregnancy.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Monthlypregnancy  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MonthlypregnancyRequest $request)
    {
        $pregnancy = new Monthlypregnancy();
        $pregnancy->fill($request->validated());
        $pregnancy->save();

        return redirect()->route('monthlypregnancy.index')->with(['success' => 'Record added succesfully!']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Monthlypregnancy  $Monthlypregnancy
     * @return \Illuminate\Http\Response
     */
    public function edit(Monthlypregnancy $monthlypregnancy)
    {
        return view('monthlypregnancy.edit', compact('monthlypregnancy'));

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Monthlypregnancy  $request
     * @param  \App\Models\Monthlypregnancy  $monthlypregnancy
     * @return \Illuminate\Http\Response
     */
    public function update(MonthlypregnancyRequest $request, Monthlypregnancy $monthlypregnancy)
    {
        
     $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'result_pregnancy' => 'required',
        'type_pregnancy' => 'required'
    ]);

    $monthlypregnancy->update($request->all());
        return redirect()->route('monthlypregnancy.index')->with(['success' => 'Record updated succesfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Monthlypregnancy  $Monthlypregnancy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Monthlypregnancy $Monthlypregnancy)
    {
        $Monthlypregnancy->delete();
        return redirect()->route('monthlypregnancy.index')->with(['success' => 'Record deleted succesfully!']);
    }
}
