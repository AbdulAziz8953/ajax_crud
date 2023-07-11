<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SingleActionController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', 'App\Http\Controllers\StudentController@index');
Route::post('create', 'App\Http\Controllers\StudentController@create')->name('create');
Route::get('show-data', 'App\Http\Controllers\StudentController@show');
Route::get('/edit', 'App\Http\Controllers\StudentController@edit')->name('edit');

Route::get('singleaction',SingleActionController::class);



