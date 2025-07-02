<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jobcontroller;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\api\PostApiController;



 Route::apiResource("post",PostApiController::class);

// Route::delete("/blog/{id}",[PostController::class,"delete"]);
// Route::post("/blog",[PostController::class,"create"]);

// Route::post("/comment",action: [CommentController::class,"create"]);

// Route::post("/tag",action: [TagController::class,"create"]);
