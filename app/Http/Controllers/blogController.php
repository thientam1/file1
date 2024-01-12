<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogController extends Controller
{
    function blog(){
        return view('front.blog');
    }
}
