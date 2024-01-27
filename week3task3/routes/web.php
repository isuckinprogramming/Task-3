<?php

use App\Http\Controllers\DBDisplayController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [TestController::class,'index']);

Route::get('/Dashboard', [TestController::class,'index']);

Route::get('/tests/{$param}','TestController@index');

Route::get('/tableDisplay',[DBDisplayController::class,'show']);
