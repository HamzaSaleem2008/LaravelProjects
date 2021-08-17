<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HamzaController extends Controller
{
    public function hamzaView()
    {
      return view('hamza');
    }

    public function hamza1View()
    {
      return view('hamza1');
    }

    public function hamza2View()
    {
      return view('/hamza2');
    }
}
