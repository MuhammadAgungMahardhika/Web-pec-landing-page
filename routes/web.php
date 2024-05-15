<?php

use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, "Home"]);

Route::get('/posts', [PageController::class, "Posts"]);
Route::get('/post/{slug}', [PageController::class, "Post"]);
Route::get('/term-and-aggreement', [PageController::class, "TermAndAggreement"]);


Route::prefix('api')->group(function () {
    Route::get('complaints', [ComplaintController::class, "index"]);
    Route::post('submit-complaint', [ComplaintController::class, "store"]);
});
