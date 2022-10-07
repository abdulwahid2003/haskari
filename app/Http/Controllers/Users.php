<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use App\Models\User;
class Users extends Controller
{
public function jop(){
    // return view('hello',['u;sers'=>['jamila']]);
    // $data=student::all();
    $data=user::paginate(2);
    return view('hello',['users'=>$data]);
}
}
