<?php

use App\Http\Controllers\Admin\HallController as AdminHallController;
use App\Http\Controllers\Admin\MovieController as AdminMovieController;
use Illuminate\Support\Facades\Route;

Route::resource('movies', AdminMovieController::class)
      ->middleware('auth:admin');

Route::resource('halls', AdminHallController::class)
->middleware('auth:admin');