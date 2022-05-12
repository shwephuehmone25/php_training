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
/*Routes for Ajax Request*/
Route::get('ajaxRequest', 'HomeController@ajaxRequest');
Route::post('ajaxRequest', 'HomeController@ajaxRequestPost')->name('ajaxRequest.post'); 