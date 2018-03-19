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
    echo database_path();
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('posts', 'PostController');

Route::resource('periods', 'PeriodController');

Route::resource('contentTypes', 'ContentTypeController');

Route::resource('purchaseModels', 'PurchaseModelController');

Route::resource('socials', 'SocialController');