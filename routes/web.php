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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/upload','UploadController@uploadForm');
Route::post('/upload','UploadController@uploadSubmit');
Route::get('/g', function (){return 'ugug';});


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/adds/create','addcontroller@create');

Route::post('/adds','addcontroller@store')->name('add.store');

Auth::routes();

Route::get('/info/create','infocontroller@create');

Route::post('/info','infocontroller@store')->name('info.store');

