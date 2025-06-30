<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
class CommentController extends Controller
{
       function index(){
        $comments=comment::all();
       
        return view("/comment/index",["comments"=>$comments,"pagetitle"=>"blog_comment"]);
    }

    function create(){
        //  comment::create(["author"=>"yousef"
        //              ,"content"=>"hello, new comment with web"
        //              , "post_id"=>24
        //               ]);
                      
              comment::factory(10)->create();

                    return redirect('/comment');
    }
    
  
    
}
