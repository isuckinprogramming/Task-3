<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/something', function () {
    return view('something',["somevar" => "contents from variables passed as a parameter."]);
});

Route::get('/tests', function () {
    return ["text" => "this is a string", "this is a json" => "php styled json"];
});
