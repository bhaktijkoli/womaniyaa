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
Route::view('/login', 'login')->name('login');
Route::view('/register', 'register')->name('register');
Route::get('/health/{key}', 'HealthController@index')->name('health');
Route::get('/health/{key}/{slug}', 'HealthController@show')->name('health.show');
Route::get('/fitness/{key}', 'FitnessController@index')->name('fitness');
Route::get('/fitness/{key}/{slug}', 'FitnessController@show')->name('fitness.show');
Route::get('/food/{key}', 'FoodController@index')->name('food');
Route::get('/food/{key}/{slug}', 'FoodController@show')->name('food.show');

Route::get('/general-tip/{slug}', 'GeneralTipController@show')->name('tip.show');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
