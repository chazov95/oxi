<?php

use App\Http\Controllers\BuildController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ZoneController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/builds', [BuildController::class, 'index']);
Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'build'], function () {
    Route::get('level/zone/room/{room}',[RoomController::class, 'show']);
    Route::get('level/zone/{zone}',[ZoneController::class, 'show']);
    Route::get('/level/{level}',[LevelController::class, 'show']);
    Route::get('/{build}', [BuildController::class, 'show']);
    /*Route::get('/level/{level}',[LevelController::class, 'show']);*/
});

Route::post('/create', [BuildController::class, 'store'])->name('buildCreate');
Route::view('/newBuild', 'newBuild');
/*Route::get('/projects',[BuildController::class, 'index']);*/
