<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demoController extends Controller
{
    public function basic(){
        return view('front.demosite.basic_site');
    }
    public function practice(){
        return view('front.demosite.practice_site');
    }
    public function actions(){
        return view('front.demosite.actions_site');
    }
    public function ecommerce(){
        return view('front.demosite.ecommerce_site');
    }
}
