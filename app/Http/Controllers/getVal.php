<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class getVal extends Controller
{
function getVals(Request $req){
return(
    $req->input()
);
    echo "Submitted Succesfull";
}
}
