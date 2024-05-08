<?php


use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, "Main"]);

Route::get('/posts', [PageController::class, "Posts"]);
Route::get('/post/{slug}', [PageController::class, "Post"]);
