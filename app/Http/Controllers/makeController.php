<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
class makeController extends Controller
{
    public function getData( Request $req){
$post=new post();
$post->post_id=$req->id;
$post->title=$req->title;
$post->description=$req->description;
$post->category=$req->category;
$post->post_date=$req->category;
$post->post_date=$req->category;
$post->author=$req->authpr;
$post->save();
return redirect('welcome');
    }
}
