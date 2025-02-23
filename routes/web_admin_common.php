<?php

use App\Http\Controllers\Admin\DateScheduleController;
use App\Http\Controllers\Admin\HallController as AdminHallController;
use App\Http\Controllers\Admin\SheetController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Admin\TimeScheduleController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')
    ->middleware('auth:admin')
    ->name('admin.')
    ->group(function () {

        Route::resource('halls', AdminHallController::class);

        Route::get('/{id}/list_by_hall', [SheetController::class, 'listByHall'])->name('sheets.list_by_hall');

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

        Route::prefix('movies/{movies}/date_schedules')
            ->controller(DateScheduleController::class)
            ->as('movies.date_schedules.')
            ->group(function () {
                Route::get('', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('', 'store')->name('store');
                Route::get('{date_schedules}', 'show')->name('show');
                Route::get('{date_schedules}/edit', 'edit')->name('edit');
                Route::put('{date_schedules}', 'update')->name('update');
                Route::delete('{date_schedules}', 'destroy')->name('destroy');
            });

        //↓こんな感じで二個づつとっていけばいい
        Route::prefix('date_schedules/{date_schedules}/time_schedules')
            ->controller(TimeScheduleController::class)
            ->as('date_schedules.time_schedules.')
            ->group(function () {
                Route::get('', 'index')->name('index');
                Route::get('', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('', 'store')->name('store');
                Route::get('{times_chedules}', 'show')->name('show');
                Route::get('{times_chedules}/edit', 'edit')->name('edit');
                Route::put('{times_chedules}', 'update')->name('update');
                Route::delete('{times_chedules}', 'destroy')->name('destroy');
            });
    });
