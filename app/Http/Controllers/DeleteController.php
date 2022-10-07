<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\setting;
class DeleteController extends Controller
{
public function deleter(Request $req){
    $data=setting::all();
    return view('bye',["deletes"=>$data]);
}
public function deleterById($id){
    $data=setting::find($id);
   $data->delete();
   return redirect("bye");
}
function showdata($id){
    $data=setting::find($id);
    return view("edit",["data"=>$data]);
}
function update(Request $req){
    $data=setting::find($req->name);

$data->footerdesc=$req->footerdesc;
$data->logo=$req->logo;
$data->websitename=$req->websitename;
$data->save();
return view('/edit',["data"=>$data]);
}

}
