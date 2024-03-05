<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    
    public function index()
    {
        return view('top');
    }
    
    public function map_select()
    {
        return view('map.map');
    }
    
    public function site_select()
    {
        return view('map.site.site');
    }
}
