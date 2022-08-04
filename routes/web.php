<?php

use App\Http\Controllers\BuildController;
use App\Http\Controllers\RoomController;
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

Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'project'], function () {
    Route::get('/',[BuildController::class, 'getBuild']);
    Route::get('/',[BuildController::class, 'index']);
    /*Route::get('/', function () {
        $builds = \App\Models\Build::all();

        foreach ($builds as $build) {
            echo $build->name . '<br/>';
            foreach ($build->rooms as $room) {
                echo $room->build_id .',';
            }
            echo '<br/>';
        }
    });*/
});
