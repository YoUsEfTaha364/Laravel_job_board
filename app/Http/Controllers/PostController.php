<?php

namespace App\Http\Controllers;
 use  App\Http\Requests\BlogPostRequest;

use Illuminate\Http\Request;

use App\Models\Post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts=Post::latest()->paginate(10);

        return view("/post/index",["posts"=>$posts,"pagetitle"=>"blog"]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          return view("post/create",["pagetitle"=>"blog_create post"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogPostRequest $request)
    {
        $post=new Post();
        $post->title=$request->input("title");
        $post->author=$request->input("author");
        $post->body=$request->input("body");
        $post->published=$request->has("published");

       
        $post->save();

         return redirect("blog")->with("success","Post Created Successfully");
         
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $posts=Post::findOrFail($id);

       return view("post/show",["posts"=>$posts,"pagetitle"=>"show"]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post=Post::findOrFail($id);

        return view('post/edit',["post"=>$post,"pagetitle"=>"Blog -Edit Post : ".$post->title ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogPostRequest $request, string $id)
    {  
       
        $oldpost=Post::findOrFail($id);
        $oldpost->update($request->all());

        return redirect("/blog")->with("update","post updated successfully");   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         
         $oldpost=Post::findOrFail($id);
         $oldpost->delete();

         return redirect("/blog")->with("delete","post has deleted successfully");
    }
}
