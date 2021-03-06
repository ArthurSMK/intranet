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
    return view('pages.homePage');
});


Route::get('home', function () {
    return view('pages.homePage');
});

Route::get('login', [\App\Http\Controllers\HomeController::class, 'login']);

Route::get('ajuda', [\App\Http\Controllers\HomeController::class, 'ajuda']);

Route::get('ramais', [\App\Http\Controllers\HomeController::class, 'ramais']);

Route::get('/center/{name?}', [\App\Http\Controllers\HomeController::class, 'center']);

