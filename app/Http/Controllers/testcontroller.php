<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testcontroller extends Controller
{
    function Test(){
        echo "hello";
    }
}

function funForm(Request $request){
    $fname=$request['uname'];
    $password=$request['password'];
    echo($fname);
    echo($password);

}
