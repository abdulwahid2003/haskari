<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\post;
class setting extends Model
{
    use HasFactory;
    public $timestamps=false;
    public function getwebsitename($value){
return ucfirst($value);
    }
}
