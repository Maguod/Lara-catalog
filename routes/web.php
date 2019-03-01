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

//Route::get('/', function() {
//    factory(App\Card::class, 25)->create();
//    return view('welcome');
//});

Route::get('/', 'HomeController@index');
Route::get('/categories/{id}', 'HomeController@category');
Route::get('/single/{id}', 'HomeController@singleCard');
Route::get('/login', 'HomeController@loginForm');

Route::get('/register', 'HomeController@registerForm');

Route::group(['prefix' => 'user', 'namespace' => 'user'], function() {
  Route::middleware(['admin'])->group( function () {
   
    
    Route::get('/deleteUser', 'UserController@deleteUser');
    Route::get('/dashboard', 'UserController@dashboardUser')->name('user.home');
    Route::get('/', 'UserController@dashboardUser');
    Route::get('/card/edit/{id}', 'CardsController@showEditForm');
    Route::post('/card/edit/{id}', 'CardsController@editCard');
    Route::get('/createForm', 'CardsController@showCreate');
    Route::get('/deleteCard/{id}', 'CardsController@delete');
    Route::get('/profile', 'UserController@showProfile');
    Route::post('/profile/edit', 'UserController@editProfile');
    Route::get('/categories/create', 'CategoriesController@index');
    Route::post('/categories/create', 'CategoriesController@store');
  
    Route::post('/store', 'CardsController@store');
  });
  Route::post('/login', 'UserController@login');
  Route::post('/register', 'UserController@register');
  Route::get('/logout', 'UserController@logout');
  Route::post('/comment/{id}', 'CommentsController@add');

}) ;

//Route::get('/user/deleteUser', 'user@remove');