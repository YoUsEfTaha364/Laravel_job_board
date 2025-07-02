<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts=Post::paginate(10);

        return view("/post/index",["posts"=>$posts,"pagetitle"=>"blog"]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // show form for creating data
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $posts=Post::find($id);

       return view("post/show",["posts"=>$posts,"pagetitle"=>"show"]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //show form with previous data
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
         
         // show view after delete
    }
}
