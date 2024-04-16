<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Map;
use App\Models\Site;

class DBcreateController extends Controller
{
    public function DBIndex()
    {
        $maps = Map::all();
        $sites = Site::all();
        return view('DBcreate.DB_index',[ 'maps' => $maps ], [ 'sites' => $sites ]);
    }
    
    public function mapAdd()
    {
        return view('DBcreate.map_create');
    }
    
     public function mapCreate(Request $request)  
    {
        $this->validate($request, Map::$rules);
        
        $map = new Map;
        
        $map_form = $request->all();
        $map_image = $request->file('map_image')->store('public/image/map_image');
        $map_form['map_image_path'] = basename($map_image);
        
        $impact_id_image = $request->file('impact_id_image')->store('public/image/impact_id_image');
        $map_form['impact_id_image_path'] = basename($impact_id_image);
    
        unset($map_form['_token']);
        
        unset($map_form['map_image']);
        
        unset($map_form['impact_id_image']);
        
        $map->fill($map_form);
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
    
    public function mapUpdate(Request $request)
    {
        $map = Map::find($request->id);
        $map_form = $request->all();
        
        if ($request->file('map_image')) {
            $map_image = $request->file('map_image')->store('public/image/map_image');
            $map_form['map_image_path'] = basename($map_image);
        } else {
            $map_form['map_image_path'] = $map->map_image_path;
        }
        
        if ($request->file('impact_id_image')) {
            $impact_id_image = $request->file('impact_id_image')->store('public/image/impact_id_image');
            $map_form['impact_id_image_path'] = basename($impact_id_image);
        } else {
            $map_form['impact_id_image_path'] = $map->impact_id_image_path;
        }
        
        unset($map_form['_token']);
        
        unset($map_form['map_image']);
        
        unset($map_form['impact_id_image']);
        
        $map->fill($map_form)->save();
        
        
        return redirect('/DBcreate_index');
    }
    
    public function mapDelete(Request $request)
    {
        $map = Map::find($request->id);
        
        $map->delete();
        
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
        
        $site_form = $request->all();
        $site_image_path = $request->file('site_image')->store('public/image/site_image');
        $site_form['site_image_path'] = basename($site_image_path);
    
        unset($site_form['_token']);
        
        unset($site_form['site_image']);
        
        $site->fill($site_form)->save();
    
        return redirect('DBcreate_site');
    }
    
    public function siteEdit(Request $request)
     {
         $site = Site::find($request->id);
         if (empty($site)) {
             abort(404);
         }
         return view('DBcreate.site_edit' , ['site_form' => $site]);
     }
    
    public function siteUpdate(Request $request)
    {
        $site = Site::find($request->id);
        $site_form = $request->all();
        
        if ($request->file('site_image')) {
            $site_image = $request->file('site_image')->store('public/image/site_image');
            $site_form['site_image_path'] = basename($site_image);
        } else {
            $site_form['site_image_path'] = $site->site_image_path;
        }
        
        unset($site_form['_token']);
        
        unset($site_form['site_image']);
        
        $site->fill($site_form)->save();
        
        
        return redirect('/DBcreate_index');
    }
    
    public function siteDelete(Request $request)
    {
        $site = Site::find($request->id);
        
        $site->delete();
        
        return redirect('/DBcreate_index');
    }
}
