<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::get('/', [TaskController::class, 'index']);

Route::get('/create', [TaskController::class, 'create']);

Route::get('/show/{todolist}', [TaskController::class, 'show']);
Route::get('/edit/{todolist}', [TaskController::class, 'edit']);
Route::post('/update/', [TaskController::class, 'update']);

Route::get('/delete/{todolist}', [TaskController::class, 'delete']);
Route::post('/delete/{todolist}', [TaskController::class, 'delete']);

Route::post('/store-data', [TaskController::class, 'store']);

