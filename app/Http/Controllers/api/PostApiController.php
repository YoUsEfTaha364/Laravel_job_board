<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
class PostApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Post::paginate(10);

        return response($data,200);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=Post::create($request->all());

        return response($data,200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=Post::find($id);

        if(!$data){
            return response(["message"=>"no data is found"]);
        }
        
        return response($data,201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=Post::find($id);
        $data->update($request->all());

        return response($data,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=Post::find($id);
        $data->delete();

        return response(["message"=>"deleted successfully"]);
    }
}
