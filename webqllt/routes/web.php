<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
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
    return view('tables');
});
Route::get('/home', 'App\Http\Controllers\qlcontroller@index')->name('home');

Route::get('/VBdi', 'App\Http\Controllers\vanbandicungController@index');
Route::get('/VBC/VBden', 'App\Http\Controllers\CVanBanDenController@index');
Route::post('/VBC/VBdi/handling', 'App\Http\Controllers\CVanBanDiController@handling');
Route::post('/VBC/VBden/handling', 'App\Http\Controllers\CVanBanDenController@handling');


Route::get('/VBM/VBdi', 'App\Http\Controllers\MVanBanDiController@index');
Route::get('/VBM/VBden', 'App\Http\Controllers\MVanBanDenController@index');
Route::post('/VBM/VBdi/handling', 'App\Http\Controllers\MVanBanDiControlle@handling');
Route::post('/VBM/VBden/handling', 'App\Http\Controllers\MVanBanDenController@handling');


//Route::get('/viewcreate', 'App\Http\Controllers\qlcontroller@viewcreate')->name('home');
Route::get('/delete/{id}', 'App\Http\Controllers\qlcontroller@delete');
