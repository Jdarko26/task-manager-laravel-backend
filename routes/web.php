<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\taskController;

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

//Route::post('add', 'taskController@add');
//Route::get('get', 'taskController@get');
Route::post('/add', [taskController::class,'add']);

Route::get('/get', [taskController::class,'get']);

Route::post('/delete', [taskController::class,'delete']);

Route::post('/getone', [taskController::class,'getone']);