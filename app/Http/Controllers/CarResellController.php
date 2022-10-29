<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarSellCreateRequest;
use App\Http\Requests\CarSellUpdateRequest;
use App\Models\CarResell;

class CarResellController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = CarResell::with('owner')->get();
        return view('home', compact(['cars']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarSellCreateRequest $request)
    {
        CarResell::create($request->validated() + ['user_id' => auth()->id()]);
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarResell  $carResell
     * @return \Illuminate\Http\Response
     */
    public function show(CarResell $carResell)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarResell  $carResell
     * @return \Illuminate\Http\Response
     */
    public function edit(CarResell $car)
    {
        return view('cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarResell  $carResell
     * @return \Illuminate\Http\Response
     */
    public function update(CarSellUpdateRequest $request, CarResell $car)
    {
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarResell  $carResell
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarResell $carResell)
    {
        //
    }
}
