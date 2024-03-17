<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brimer;

class LineupController extends Controller
{
   public function index_create()
   {
       return view('lineup.create');
   }
 
   public function create(Request $request)
    {
        $this->validate($request, Brimer::$rules);
        
        $brimer = new Brimer;
        $form = $request->all();
        
        
            $stand_post_img_path= $request->file('image')->store('public/image');
            $brimer->stand_posi_img_path = basename($stand_post_img_path);
        
    
        return view('top');
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
