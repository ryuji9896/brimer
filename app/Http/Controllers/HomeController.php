<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Map;
use App\Models\Site;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
     public function map_data_add(Request $request)  
    {
        $this->validate($request, Map::$rules);
        
        $map = new Map;
        
        $form = $request->all();
        $map_image_path = $request->file('map_image')->store('public/image/map_image');
        $map->map_image_path = basename($map_image_path);
        
        $impact_id_image_path = $request->file('impact_id_image')->store('public/image/impact_id_image');
        $map->impact_id_image_path = basename($impact_id_image_path);
        
        unset($form['_token']);
        
        unset($form['map_image']);
        
        unset($form['impact_id_image']);
        
        $map->fill($form);
        $map->save();
            
        
    
        return redirect('home');
    }
    
    public function site_data_add(Request $request)  
    {
        $this->validate($request, Site::$rules);
        
        $site = new Site;
        
        $form = $request->all();
        $site_image_path = $request->file('site_image')->store('public/image/site_image');
        $site->site_image_path = basename($site_image_path);
    
        unset($form['_token']);
        
        unset($form['site_image']);
        
        $site->fill($form);
        $site->save();
            
        
    
        return redirect('home');
    }
}
