<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view("index",["pagetitle"=>"Dashboeard"]);
    }

    
    public function about(){
        return view("about",["title"=>"about","pagetitle"=>"about"]);
    }

    public function contact(){
        return view("contact",["title"=>"contact","pagetitle"=>"contact"]);
    }


}

