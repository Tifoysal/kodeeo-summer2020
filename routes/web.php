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


//login
Route::get('/', 'UserController@login')->name('login');
Route::post('/do-login', 'UserController@doLogin')->name('do-login');


Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', function () {
        return view('layouts.dashboard');
    })->name('dashboard');

    Route::get('/about', function () {
        return view('layouts.about');
    });
    Route::get('/logout', 'UserController@logout')->name('logout');

//product
    Route::get('/product', 'ProductController@list')->name('product.list');
    Route::get('/product/form', 'ProductController@showCreateForm')->name('product.create');
    Route::post('/product/store', 'ProductController@store')->name('product.store');
    Route::get('/product/view/{id}', 'ProductController@view')->name('product.view');

//category
    Route::get('/category-form', 'CategoryController@create')->name('category.create');
    Route::post('/category-store', 'CategoryController@store')->name('category.store');

//user
    Route::get('/users', 'UserController@list')->name('user.list');
    Route::post('/user/create', 'UserController@create')->name('user.create');

});


