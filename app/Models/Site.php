<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;
    
    protected $guarded = array('id');

    public static $rules = array(
        'site_name' => 'required',
        'site_image' => 'required',
        'map_name' => 'required'
    );
}
