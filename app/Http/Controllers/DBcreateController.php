<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Map;
use App\Models\Site;

class DBcreateController extends Controller
{
    public function mapIndex(Request $request)
    {
        $maps = Map::all();
        return view('DBcreate.map_index',['maps' => $maps]);
    }
    
    public function mapAdd()
    {
        return view('DBcreate.map_create');
    }
    
     public function mapCreate(Request $request)  
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
            
        
    
        return redirect('/DBcreate_map');
    }
    
     public function mapEdit(Request $request)
     {
         $map = Map::find($request->id);
         if (empty($map)) {
             abort(404);
         }
         return view('DBcreate.map_edit' , ['map_form' => $map]);
     }
    
    public function update(Request $request)
    {
        $this->validate($request, Map::$rules);
        $map = Map::find($request->id);
        $map_form = $request->all();
        
        $form = $request->all();
        $map_image_path = $request->file('map_image')->store('public/image/map_image');
        $map->map_image_path = basename($map_image_path);
        
        $impact_id_image_path = $request->file('impact_id_image')->store('public/image/impact_id_image');
        $map->impact_id_image_path = basename($impact_id_image_path);
        
        unset($form['_token']);
        
        unset($form['map_image']);
        
        unset($form['impact_id_image']);
        
        $map->fill($form)->save();
        
        return redirect('/DBcreate_index');
    }
    
     public function siteAdd()
    {
        return view('DBcreate.site_create');
    }
    public function siteCreate(Request $request)  
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
            
        
    
        return redirect('DBcreate_site');
    }
}
