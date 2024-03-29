<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maps;
use App\Models\Sites;


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
    
     public function map_add(Request $request)  
    {
        $this->validate($request, Map::$rules);
        
        $map = new Map;
        
        $form = $request->all();
        $map_image_path = $request->file('map_image')->store('public/image/map_image');
        $map->map_image_path = basename($map_image_path);
    
        unset($form['_token']);
        
        unset($form['map_image']);
        
        unset($form['impact_id_image']);
        
        $site->fill($form);
        $site->save();
            
        
    
        return redirect('index_home');
    }
    
    public function site_add(Request $request)  
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
            
        
    
        return redirect('index_home');
    }
}
