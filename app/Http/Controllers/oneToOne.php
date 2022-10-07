<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
class oneToOne extends Controller
{
    function setter(){
        return  post::find(36)->post_id ;
    }
}
