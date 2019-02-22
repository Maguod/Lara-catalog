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
//
//Route::get('/', function () {
//
//  factory(App\Category::class, 3)->create();
//    return view('welcome');
//});

Route::get('/', 'HomeController@index');
Route::get('/category/{id}', 'HomeController@category');
Route::get('/single/{id}', 'HomeController@singleCard');
Route::get('/login', 'HomeController@login');
Route::get('/register', 'HomeController@register');