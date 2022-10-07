<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class QueryBuilder extends Controller
{
    public function qb(){
//        $data= DB::table("users")->where("username","madhuri")->get();
// return view("new",["data"=>$data]);

// return DB::table("users")->count();
// return view("new",["data"=>$data]);
return DB::table("users")->insert([
'user_id'=>"201",
'first_name'=>"Abdul Wahid",
'last_name'=>"Momin", 
'username'=>"lion",
'password'=>"jjaj",
'role'=>"1"
]);
    }
}
