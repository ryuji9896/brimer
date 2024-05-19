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
    
    public function siteSelect(Request $request)
    {
        $map_form = $request->id;
        
        $site_form = Site::where('map_name',$map_form)->get(); 
        
        return view('map.site.site' , compact('map_form' , 'site_form'));
    }
}
