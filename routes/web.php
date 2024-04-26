<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, "Main"]);
