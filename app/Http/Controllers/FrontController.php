<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Map;

use App\Models\Site;

class FrontController extends Controller
{
    
    public function index()
    {
        return view('top');
    }
    
    public function mapSelect()
    {
        $maps = Map::all(); 
        
        return view('map.map',[ 'maps' => $maps ]);
        
        
    }
    
    public function siteSelect()
    {
        $sites = Site::all();
        
        return view('map.site.site',[ 'sites' => $sites ]);
    }
}
