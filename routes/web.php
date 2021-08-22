<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'App\Http\Controllers\UserControllers\HomeController@home');
Route::get('/home', 'App\Http\Controllers\UserControllers\HomeController@home');
Route::get('/menu', 'App\Http\Controllers\UserControllers\HomeController@menu');
Route::get('/login', 'App\Http\Controllers\UserControllers\HomeController@login');
Route::get('/management-account', 'App\Http\Controllers\UserControllers\HomeController@account');
Route::get('/cach-lam-tra-bi-dao', 'App\Http\Controllers\UserControllers\HomeController@view_post');
Route::get('/contact', 'App\Http\Controllers\UserControllers\HomeController@contact');
Route::get('/posting', 'App\Http\Controllers\UserControllers\HomeController@posting');
Route::get('/chi-tiet-san-pham-sushi', 'App\Http\Controllers\UserControllers\HomeController@detail_product');
Route::get('/gio-hang-cua-toi','App\Http\Controllers\UserControllers\HomeController@carts');

Route::prefix('admin')->group( function() {
    // Route::get('/', ); // casi nay de dan toi trang login admin
    Route::get('/dashboard', 'App\Http\Controllers\AdminControllers\HomeController@dashboard');
    Route::get('/management-user', 'App\Http\Controllers\AdminControllers\HomeController@user');

    Route::get('/management-categories', 'App\Http\Controllers\AdminControllers\CategoryController@index');
    Route::get('/category/create', 'App\Http\Controllers\AdminControllers\CategoryController@create');
    Route::post('/category/store', 'App\Http\Controllers\AdminControllers\CategoryController@store');
    
    Route::get('/management-products', 'App\Http\Controllers\AdminControllers\ProductController@index');
    Route::get('/product/create', 'App\Http\Controllers\AdminControllers\ProductController@create');
    Route::post('/product/store', 'App\Http\Controllers\AdminControllers\ProductController@store');
    Route::get('/add-sale', 'App\Http\Controllers\AdminControllers\HomeController@add_sale');

    Route::get('/management-posts', 'App\Http\Controllers\AdminControllers\HomeController@posts');
    Route::get('/management-questions', 'App\Http\Controllers\AdminControllers\HomeController@questions');
    Route::get('/management-contacts', 'App\Http\Controllers\AdminControllers\HomeController@contacts');
    Route::get('/management-charts', 'App\Http\Controllers\AdminControllers\HomeController@charts');
    Route::get('/check-post', 'App\Http\Controllers\AdminControllers\HomeController@check_post');
    Route::get('/intro-restaurant', 'App\Http\Controllers\AdminControllers\HomeController@intro_restaurant');
    
});