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
    return view('auth.login');
});

Auth::routes();
Route::match(['get', 'post'], '/register', function () {
    return redirect("/login");
})->name("register");

// Users Routes
Route::resource('users', 'UserController');

// Categories Routes
Route::resource('categories', 'CategoryController');

Route::get('/home', 'HomeController@index')->name('home');
