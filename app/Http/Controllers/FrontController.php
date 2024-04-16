<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Map;

class FrontController extends Controller
{
    
    public function index()
    {
        return view('top');
    }
    
    public function map_select()
    {
        $maps = Map::all(); 
        
        return view('map.map',[ 'maps' => $maps ]);
        
        
    }
    
    public function site_select()
    {
        return view('map.site.site');
    }
}
