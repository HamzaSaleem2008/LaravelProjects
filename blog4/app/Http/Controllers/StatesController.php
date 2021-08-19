<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\States;

class StatesController extends Controller
{
  public function index()
  {
    $states = States::all();
    return view('states.index', compact('states'));
  }

  public function create()
  {
    return view('states.create');
  }

  public function store(Request $request)
  {
    $stateData = new States();
    $stateData->name = $request->StateName;
    $stateData->status = $request->Status;
    $stateData->save();
    return redirect('/states');
  }
}
