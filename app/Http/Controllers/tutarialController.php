<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tutarialController extends Controller
{
    function tutorial(){
        return view('front.tutorial');
    }

}
