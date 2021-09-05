<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cars = Car::all();
      return view('cars.index', compact('cars'));
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
    public function store(Request $request)
    {
      $carData = new Car();
      $carData->make = $request->CarName;
      $carData->model = $request->CarModel;
      $carData->year_of_make = $request->CarYearOfMake;
      $carData->no_plate_allot = $request->CarNoPlateAllot;
      $carData->Vin = $request->CarVin;
      $carData->save();
      return redirect('/cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $carData = Car::findOrFail($id);
      return view('cars.show', compact('carData'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $carData = Car::findOrFail($id);
      return view('cars.edit', compact('carData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $carData = Car::findOrFail($id);
      $carData->make = $request->CarName;
      $carData->model = $request->CarModel;
      $carData->year_of_make = $request->CarYearOfMake;
      $carData->vin = $request->CarVin;
      $carData->no_plate_allot = $request->CarNoPlateAllot;
      $carData->save();
      return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $carData = Car::findOrFail($id);
      $carData->delete();
      return redirect('/cars');
    }
}
