<?php

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
    
    return view('upload')->withRaju('');
});
Route::resource('uploader','uploadcontroller');
//Route::get('/upload','uploadcontroller@index');
// Route::post('/upload','uploadcontroller@store');
