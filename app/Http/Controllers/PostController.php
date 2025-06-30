<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    function index(){
        $posts=post::paginate(10);
       
        return view("/post/index",["posts"=>$posts,"pagetitle"=>"blog"]);
    }

    function create(){
         
        Post::factory(100)->create();
                  
                    return redirect('/blog');
    }
    
    function show($id){
        $posts=Post::find($id);

        return view("post/show",["posts"=>$posts,"pagetitle"=>"show"]);
    }

    function delete($id){
       $posts=Post::destroy($id);

       return redirect('/blog');
    }
    
    
}
