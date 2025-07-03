<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments=Comment::paginate(14);

        return view("/comment/index",["comments"=>$comments,"pagetitle"=>"blog_comment"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view("comment/create",["pagetitle"=>"create- comment"]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentRequest $request)
    {
        $comment=new comment;
        $comment->author=$request->author;
        $comment->content=$request->content;
        $comment->post_id=$request->post_id;

        $comment->save();

        return redirect("blog/{$request->post_id}");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comment=Comment::find($id);

        return view("/comment/show",["comment"=>$comment,"pagetitle"=>"show comment"]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Show the form for editing the specified resource
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
