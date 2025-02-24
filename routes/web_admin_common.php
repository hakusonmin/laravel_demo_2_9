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
                Route::get('{movie}', 'show')->name('show');
                Route::get('{movie}/edit', 'edit')->name('edit');
                Route::put('{movie}', 'update')->name('update');
                Route::delete('{movie}', 'destroy')->name('destroy');
            });

        Route::prefix('date_schedules')
            ->controller(DateScheduleController::class)
            ->as('date_schedules.')
            ->group(function () {
                Route::get('', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('', 'store')->name('store');
                Route::get('{date_schedule}', 'show')->name('show');
                Route::get('{date_schedule}/edit', 'edit')->name('edit');
                Route::put('{date_schedule}', 'update')->name('update');
                Route::delete('{date_schedule}', 'destroy')->name('destroy');
            });

        Route::prefix('time_schedules')
            ->controller(TimeScheduleController::class)
            ->as('time_schedules.')
            ->group(function () {
                Route::get('', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('', 'store')->name('store');
                Route::get('{times_chedule}', 'show')->name('show');
                Route::get('{times_chedule}/edit', 'edit')->name('edit');
                Route::put('{times_chedule}', 'update')->name('update');
                Route::delete('{times_chedule}', 'destroy')->name('destroy');
            });

        Route::resource('halls', HallController::class);

        Route::prefix('sheets')
            ->controller(SheetController::class)
            ->as('sheets.')
            ->group(function () {
                Route::get('', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('', 'store')->name('store');
                Route::get('{sheet}', 'show')->name('show');
                Route::get('{sheet}/edit', 'edit')->name('edit');
                Route::put('{sheet}', 'update')->name('update');
                Route::delete('{sheet}', 'destroy')->name('destroy');
            });

        Route::resource('tickets', TicketController::class);
    });
