<?php

namespace App\Http\Controllers;
use App\Models\Tag;
use App\Models\POst;
use Illuminate\Http\Request;

class TagController extends Controller
{
      function index(){
        $tags=Tag::all();
       
        return view("/tag/index",["tags"=>$tags,"pagetitle"=>"tag"]);
    }

    function create(){
    Tag::create(["title"=>"software tag "


                      ]);
                       
                  
                    return redirect('/tag');
    }
     

    function test(){

        $post1=Post::find(10);
        
        $post2=Post::find(11);
        $post1->tags()->attach([1,2]);
         $post2->tags()->attach([1,2]);

        return response()->json([
            "post1"=>$post1->tags,
            "post2"=>$post2->tags
            
        ]);
    }

}
