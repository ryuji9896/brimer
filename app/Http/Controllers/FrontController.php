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
    
    public function mapSelect(Request $request)
    {
        $maps = Map::all(); 
        
        $flag = $request->flag;
        
        return view('map.map', compact('maps','flag'));
        
    }
    
    public function siteSelect(Request $request)
    {
        $map_id = $request->id;
        
        $site_data = Site::where('map_name',$map_id)->get(); 
        
         $flag = $request->flag;
        
        return view('map.site.site' , compact('site_data','flag'));
    }
    
    public function mapView(Request $request)
    {
        $maps = Map::all(); 
        
        $flag = true;
        
        return view('map.map', compact('maps','flag'));
    }
    
    public function mapPost(Request $request)
    {
        $maps = Map::all(); 
        
        $flag = false;
        
        return view('map.map', compact('maps','flag'));
    }
    
    public function siteView(Request $request)
    {
        $map_id = $request->id;
        
        $site_data = Site::where('map_name',$map_id)->get(); 
        
         $flag = true;
        
        return view('map.site.site' , compact('site_data','flag'));
    }
    
    public function sitePost(Request $request)
    {
        $map_id = $request->id;
        
        $site_data = Site::where('map_name',$map_id)->get(); 
        
         $flag = false;
        
        return view('map.site.site' , compact('site_data','flag'));
    }
}
