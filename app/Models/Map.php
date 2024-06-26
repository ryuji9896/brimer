<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    use HasFactory;
    
    protected $guarded = array('id');
    
    public static $rules = array(
        'map_name' => 'required',
        'map_image' => 'required',
        'impact_id_image' => 'required'
    );
    public function site()
    {
        return $this->hasMany('App\Models\Site');
    }
}
