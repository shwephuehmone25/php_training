<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employee\EmployeeController;

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

Route::get('/', [EmployeeController::class, 'index']);

Route::get('/create', [EmployeeController::class, 'create']);

Route::get('/show/{employe}', [EmployeeController::class, 'show']);
Route::get('/edit/{employe}', [EmployeeController::class, 'edit']);
Route::post('/update/{employe}', [EmployeeController::class, 'update']);


Route::get('/delete/{employee}', [EmployeeController::class, 'delete']);

Route::post('/store-data', [EmployeeController::class, 'store']);

/*Routes for export/import */
Route::get('export', 'DemoController@export')->name('export');
Route::get('importExportView', 'DemoController@importExportView');
Route::post('import', 'DemoController@import')->name('import');