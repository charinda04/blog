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

Route::get('/', 'BlogController@index') ->name('home');

Route::get('/index.php', 'BlogController@index');

Route::get('/contact.php', 'BlogController@contact');

Route::get('/about.php', 'BlogController@about');

Route::get('/post.php', 'BlogController@post');

Route::get('/create.php', 'BlogController@create');

Route::post('/posts', 'BlogController@store');


Route::post('/posts/{blog}/comments', 'CommentsController@store');


Route::get('/register','RegistrationController@create');

Route::post('/register','RegistrationController@store');


Route::get('/login','SessionsController@create');

Route::post('/login','SessionsController@store');

Route::get('/logout','SessionsController@destroy');


 