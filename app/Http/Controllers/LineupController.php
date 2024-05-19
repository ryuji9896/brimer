<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lineups;
use App\Models\Map;
use App\Models\Site;

class LineupController extends Controller
{
   public function lineupAdd(Request $request)
   {
        
        $maps = Map::all();
        
        $sites = Site::all();
        
        $site_id = $request->id;
        
        $site_form = Site::find($site_id);
        
        $map_form = Map::find($site_form->map_name);
        
        $map_name = $map_form->id;
        
        $site_name = Site::where('map_name',$map_name)->get();
        
        
        
        return view('lineup.create',compact('maps' , 'sites' , 'site_id' , 'map_form' , 'map_id' , 'site_name' , 'site_form'));
   }
 
   public function lineupCreate(Request $request)
    {
        $this->validate($request, Lineups::$rules);
        
        $lineups = new Lineups;
        
        $form = $request->all();
        $standing_position_image_path = $request->file('standing_position_image')->store('public/image/standing_position_image');
        $lineups->standing_position_image_path = basename($standing_position_image_path);
        
        $corsor_image_path = $request->file('corsor_image')->store('public/image/corsor_image');
        $lineups->corsor_image_path = basename($corsor_image_path);
       
        
        
        unset($form['_token']);
        
        unset($form['standing_position_image']);
        
        unset($form['corsor_image']);
        
        $lineups->fill($form);
        $lineups->save();
            
        
    
        return redirect('/');
    }
    
    public function lineupEdit()
    {
        return view('lineup.edit');
    }
    
    public function lineupUpdate(Request $request)
    {
        return view('top');
    }
    
    public function lineup()
    {
        $posts = Lineups::all();
        
        $impact_id_image_path = new Map;
        
        return view('lineup.lineup', ['posts' => $posts]);
    }
}