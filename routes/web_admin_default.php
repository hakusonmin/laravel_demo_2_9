<?php

use App\Http\Controllers\Admin\DateScheduleController;
use App\Http\Controllers\Admin\HallController as AdminHallController;
use App\Http\Controllers\Admin\MovieController as AdminMovieController;
use App\Http\Controllers\Admin\MovieSheetController;
use App\Http\Controllers\Admin\SheetController;
use App\Models\MovieSheet;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

Route::resource('movies', AdminMovieController::class)
    ->middleware('auth:admin');

Route::resource('halls', AdminHallController::class)
    ->middleware('auth:admin');

Route::middleware('auth:admin')->get('/{id}/list_by_hall', [SheetController::class, 'listByHall'])->name('sheets.list_by_hall');

Route::middleware('auth:admin')->get('/{id}/date-schedules', [DateScheduleController::class, 'index'])->name('date_schedules.index');


//管理者ダッシュボードへのルーティング
Route::get('/', function () {
    return view('web.admin.index'); //↓ここadmin.indexにしないように注意prefixあるからね..
})->middleware('auth:admin')->name('index');
