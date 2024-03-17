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
        'stand_position_text' => 'required',
        'stand_position_image_path' => 'required',
        'corsor_text' => 'required',
        'corsor_image_path' => 'required',
        'time' => 'required',
        'map_name' => 'required',
        'map_image_path' => 'required',
        'site_image_path' => 'required'
        );
}
