<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jobcontroller;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController;





Route::get('/',[IndexController::class,'index']);
Route::get('/about',[IndexController::class,'about']);
Route::get('/contact',[IndexController::class,'contact']);


Route::get("job",[JobController::class, "index"]);

Route::resource("blog",PostController::class);

// Route::get("/blog",[PostController::class,"index"]);
 // Route::delete("/blog/{id}",[PostController::class,"delete"]);
 // Route::post("/blog",[PostController::class,"create"]);
// Route::get("/blog/{id}",[PostController::class,"show"]);


Route::resource("comment",CommentController::class);
// Route::get("/comment",[CommentController::class,"index"]);
//  Route::post("/comment",action: [CommentController::class,"create"]);



Route::resource("tag",TagController::class);
// Route::post("/tag",action: [TagController::class,"create"]);
// Route::get("/tag",[TagController::class,"index"]);
// Route::get("/tag/test",[TagController::class,"test"]);


