<?php

use App\Http\Controllers\Admin\DateScheduleController;
use App\Http\Controllers\Admin\HallController;
use App\Http\Controllers\Admin\SheetController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Admin\TicketController;
use App\Http\Controllers\Admin\TimeScheduleController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')
    ->middleware('auth:admin')
    ->name('admin.')
    ->group(function () {

        //管理者ダッシュボードへのルーティング
        Route::get('/', function () {
            return view('web.admin.index'); //↓ここadmin.indexにしないように注意prefixあるからね..
        })->name('index');

        Route::prefix('movies')
            ->controller(MovieController::class)
            ->as('movies.')
            ->group(function () {
                Route::get('', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('', 'store')->name('store');
                Route::get('{movies}', 'show')->name('show');
                Route::get('{movies}/edit', 'edit')->name('edit');
                Route::put('{movies}', 'update')->name('update');
                Route::delete('{movies}', 'destroy')->name('destroy');
            });

        Route::prefix('date_schedules')
            ->controller(DateScheduleController::class)
            ->as('date_schedules.')
            ->group(function () {
                Route::get('', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('', 'store')->name('store');
                Route::get('{date_schedules}', 'show')->name('show');
                Route::get('{date_schedules}/edit', 'edit')->name('edit');
                Route::put('{date_schedules}', 'update')->name('update');
                Route::delete('{date_schedules}', 'destroy')->name('destroy');
            });

        Route::prefix('time_schedules')
            ->controller(TimeScheduleController::class)
            ->as('time_schedules.')
            ->group(function () {
                Route::get('', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('', 'store')->name('store');
                Route::get('{times_chedules}', 'show')->name('show');
                Route::get('{times_chedules}/edit', 'edit')->name('edit');
                Route::put('{times_chedules}', 'update')->name('update');
                Route::delete('{times_chedules}', 'destroy')->name('destroy');
            });

        Route::resource('halls', HallController::class);

        Route::prefix('sheets')
            ->controller(SheetController::class)
            ->as('sheets.')
            ->group(function () {
                Route::get('', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('', 'store')->name('store');
                Route::get('{sheets}', 'show')->name('show');
                Route::get('{sheets}/edit', 'edit')->name('edit');
                Route::put('{sheets}', 'update')->name('update');
                Route::delete('{sheets}', 'destroy')->name('destroy');
            });

        Route::resource('tickets', TicketController::class);
    });
