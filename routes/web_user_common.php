<?php

use App\Http\Controllers\User\HallController;
use App\Http\Controllers\User\SheetController;

Route::prefix('user')
    ->middleware('auth')//userはデフォルトなので auth:userとしてはいけない
    ->name('user.')
    ->group(function () {

        //ユーザーダッシュボードへのルーティング
        Route::get('/', function () {
            return view('web.user.index');
        })->name('index');


        Route::resource('halls', HallController::class);
        Route::resource('sheets', SheetController::class);
    });
