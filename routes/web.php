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
    return redirect()->route('formSoma');
});

Route::get('/form-soma', 'HomeController@formSoma')->name('formSoma');
Route::post('/soma', 'HomeController@soma')->name('soma');
