<?php

use App\Http\Controllers\ComplaintController;
use Illuminate\Support\Facades\Route;

Route::prefix('api')->group(function () {
    // Route::get('complaints', [ComplaintController::class, "index"]);
    // Route::post("submit_complaint", [ComplaintController::class, "store"]);
});
