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
    return view('welcome');
});

Route::get('/master', function () {
    return view('master');
});

Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/wishlist', function () {
//     return view('wishlist');
// });

Route::get('/about', function () {
    return view('about');
});

Auth::routes();

Route::resource('/wishlist', 'ItemController');
Route::get('/wishlist', 'ItemController@index');
// Route::get('/', 'ItemController@create');
Route::post('/', 'ItemController@store');//insert into db
// Route::get('/wishlist', 'ItemController@show');
Route::delete('/wishlist/{id}', 'ItemController@destroy');

// Route::get('/home', 'HomeController@index')->name('home');
//Route::resource('projects', 'ProjectsController');
// Route::get('/projects/create', 'ProjectsController@create');
// Route::get('/projects/{project}', 'ProjectsController@show');
// Route::post('/projects', 'ProjectsController@store');//insert into db
// Route::get('/projects/{project}/edit', 'ProjectsController@edit');
// Route::patch('/projects/{project}', 'ProjectsController@update'); //update
// Route::delete('/projects/{project}', 'ProjectsController@destroy');
