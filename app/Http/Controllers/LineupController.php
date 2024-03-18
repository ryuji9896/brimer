<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lineups;

class LineupController extends Controller
{
   public function index_create()
   {
       return view('lineup.create');
   }
 
   public function create(Request $request)
    {
        $this->validate($request, Lineups::$rules);
        
        $lineups = new Lineups;
        $form = $request->all();
        
        
            $standing_position_image_path= $request->file('image')->store('public/image');
            $lineups->standing_position_image_path = basename($standing_position_image_path);
        
    
        return redirect('/');
    }
    
    public function index_edit()
    {
        return view('lineup.edit');
    }
    
    public function edit(Request $request)
    {
        return view('top');
    }
    
    public function lineup()
    {
        return view('lineup.lineup');
    }
}