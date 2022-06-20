<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/loger', function () {
    return view('loger');
})->name('loger');
Route::get('/registre', function () {
    return view('register');
})->name('register');
Auth::routes();


Route::get('/admin', 'App\Http\Controllers\DashBoard@index')->name('admin');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin'], function () {
      /* Routes pour le profile */
    Route::get('/profile', 'App\Http\Controllers\ProfileController@index')->name('profile');

});

Auth::routes();
