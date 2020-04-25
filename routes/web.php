<?php

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

Route::view('/', 'home')->name('home');
Route::view('/home', 'home');
Route::get('/health/{key}', 'HealthController@index')->name('health');
Route::get('/health/{key}/{slug}', 'HealthController@show')->name('health.show');
Route::get('/fitness/{key}', 'FitnessController@index')->name('fitness');
Route::get('/fitness/{key}/{slug}', 'FitnessController@show')->name('fitness.show');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
