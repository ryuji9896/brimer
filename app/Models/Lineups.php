<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lineups extends Model
{
    use HasFactory;
    
    protected $guarded = array('id');
    
    public static $rules = array(
        'map_name' => 'required',
        'site_name' => 'required',
        'impact_id' => 'required',
        'standing_position_text' => 'required',
        'standing_position_image_path' => 'required',
        'corsor_text' => 'required',
        'corsor_image_path' => 'required',
        'time' => 'required'
        );
}
