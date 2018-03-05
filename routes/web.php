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
    return view('layout.panel1');
});
Route::get('/docente', function () {
    return view('layouts.paneladmin');
});

/*
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('home');
});


Route::resource('docentes','DocenteController');


Route::get('/tdocentes',['as' => 'docentes.principal','uses' => 'DocenteController@principal']);

