<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/data', 'CRUDController@index');
Route::POST('/tambahdata', 'CRUDController@store');
Route::patch('/updatedata/{id}', 'CRUDController@update');
Route::GET('/printdata/{id}', 'CRUDController@print');
Route::GET('/hapusdata/{id}', 'CRUDController@destroy');
Route::GET('/detaildata/{id}', 'CRUDController@show');
