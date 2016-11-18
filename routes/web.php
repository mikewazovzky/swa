<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return redirect('main');
});

Auth::routes();

//Route::get('/home', 'HomeController@index');

Route::get('/main', 'PagesController@main');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::post('/contact', 'PagesController@handleMessage');
Route::get('/location/{location}', 'PagesController@location');

Route::resource('/news', 'NewsController');

Route::resource('/users', 'UsersController');