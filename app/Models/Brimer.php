<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brimer extends Model
{
    use HasFactory;
    
    protected $guarded = array('id');
    
    public static $rules = array(
        'map_id' => 'required',
        'site_name' => 'required',
        'impact_id' => 'required',
        'stand_posi_txt' => 'required',
        'stand_posi_img_path' => 'required',
        'corsor_txt' => 'required',
        'corsor_img_path' => 'required',
        'time' => 'required',
        'map_name' => 'required',
        'map_img_path' => 'required',
        'site_img_path' => 'required'
        );
}
