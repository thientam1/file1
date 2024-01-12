<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
        return view('front.layout.admin');
    }
    public function blog_add(){
        return view('front.admin.blog_add');
    }
}
