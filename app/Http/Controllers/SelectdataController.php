<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Map;
use App\Models\Site;


class SelectdataController extends Controller
{
    public function map_index()
    {
        return view('DBcreate.map_create');
    }
    
     public function map_add(Request $request)  
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
        
        $site->fill($form);
        $site->save();
            
        
    
        return redirect('map_index');
    }
    
    
     public function site_index()
    {
        return view('DBcreate.site_create');
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
            
        
    
        return redirect('site_index');
    }
}
