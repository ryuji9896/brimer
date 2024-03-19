<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lineups extends Model
{
    use HasFactory;
    
    protected $guarded = array('id');
    
    public static $rules = array(
        'site_name' => 'required',
        'impact_id' => 'required',
        'standing_position_text' => 'required',
        'standing_position_image' => 'required',
        'corsor_text' => 'required',
        'corsor_image' => 'required',
        'time' => 'required'
        );
}
