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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/daftar_desa', 'DesaController@index');
Route::get('/pendamping_desa', 'PendampingController@index');
Route::get('/tambah_pendamping', 'PendampingController@add');
Route::post('/add_partner', 'PendampingController@store');
Route::get('/pendamping_desa/update/{id}', 'PendampingController@update');
