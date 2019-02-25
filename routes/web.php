<?php
 use App\User;
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
Route::get('/login', 'HomeController@loginForm');

Route::get('/register', 'HomeController@registerForm');

Route::group(['prefix' => 'user', 'namespace' => 'user'], function() {
  Route::post('/login', 'UserController@login');
  Route::post('/register', 'UserController@register');
  Route::get('/logout', 'UserController@logout');
  Route::get('/deleteUser/{id}', 'UserController@deleteUser');
  Route::get('/dashboard/{id}', 'UserController@dashboardUser');

}) ;
//Route::get('/user/deleteUser', 'user@remove');