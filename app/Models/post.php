<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    public $timestamps = false;
function conn(){
    return $this->hasOne('App\Models\Setting');
}
    // protected $fillable = [
    //     'id', 'building_name', 'building_information', 'building_image', 
    // ];
}
