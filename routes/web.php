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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/page1', 'Page1Controller@show')->name('page1');

Route::match(['get', 'post'], '/edit_blog_post', function () {
    return view('edit_blog_post');
})->middleware('auth')->name('edit_blog_post');

Route::any('/blog', 'BlogController@edit');
