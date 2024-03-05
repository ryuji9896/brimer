<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LineupController extends Controller
{
   public function create()
    {
        return view('lineup.create');
    }
    
    public function edit()
    {
        return view('lineup.edit');
    }
    
    public function lineup()
    {
        return view('lineup.lineup');
    }
}
