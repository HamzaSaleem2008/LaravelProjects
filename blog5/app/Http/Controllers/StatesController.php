<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;

class StatesController extends Controller
{
  public function index()
  {
    $states = State::all();
    return view('states.index', compact('states'));
  }

  public function create()
  {
    return view('states.create');
  }
}
