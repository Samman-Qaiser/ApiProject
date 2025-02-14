<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    
    function table (Request $request){
       return 'table function';
    }
    function signUp (Request $request){
        return 'signUp function';
     }
}
