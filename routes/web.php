<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jobcontroller;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController;



Route::get("/blog/delete/{id}",[PostController::class,"delete"]);

Route::get('/',[IndexController::class,'index']);
Route::get('/about',[IndexController::class,'about']);
Route::get('/contact',[IndexController::class,'contact']);
Route::get("job",[JobController::class, "index"]);
Route::get("/blog",[PostController::class,"index"]);
Route::get("/blog/create",[PostController::class,"create"]);
Route::get("/blog/{id}",[PostController::class,"show"]);



Route::get("/comment/create",[CommentController::class,"create"]);
Route::get("/comment",[CommentController::class,"index"]);


Route::get("/tag/create",[TagController::class,"create"]);
Route::get("/tag",[TagController::class,"index"]);

Route::get("/tag/test",[TagController::class,"test"]);