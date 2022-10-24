<?php

use App\Http\Controllers\makeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\makeControllers;
use App\Http\Controllers\DeleteController;  
use App\Http\Controllers\QueryBuilder;
use App\Http\Controllers\oneToOne;
use App\Http\Controllers\getVal;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('home');
});
Route::view("/giant","giant");
Route::get("giant",[oneToOne::class,"setter"]);
Route::get('/hello', function () {
  return  view('hello');
});


Route::get('/welcome',function(){

    return view('welcome');
});
// Route::view("about",'welcome');

// Route::get('/askers',function(){
//     return view('askers');
// });
Route::get("user",[Users::class,'jop']);
//*************Later COmpulsion******************* */
// Route::view('/foast','bye');
// Route::get("/foast",[makeController::class,"getData"]);
//*************Later COmpulsion******************* */


Route::get("/delete/{id}",[DeleteController::class,'deleterById']);
Route::view("edit","edit");

Route::get("edit/{id}/",[DeleteController::class,'showdata']);
Route::post("edit",[DeleteController::class,'update']);
Route::get('bye',[DeleteController::class,'deleter']);

Route::view("/new","new");
Route::get("new",[QueryBuilder::class,"qb"]);

// Route::post("/form",function(){
//   return view("form");
// });
// Route::post("form",[getVal::class,"getVals"]); 
// Route::view("form","form");

Route::get("/get/{key:sname}",[CategoryController::class,"na"]);
Route::view("/get","form");