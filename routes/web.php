<?php

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
Route::get('/hakkimizda', function(){
    return view('about');
})->name('about');
Route::get('/akademikkadro', function(){
    return view('akademikkadro');
})->name('akademik');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
