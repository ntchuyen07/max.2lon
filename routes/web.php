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
Route::get('/logout', 'App\Http\Controllers\UserControllers\HomeController@logout');

Route::get('/menu/{id}', 'App\Http\Controllers\UserControllers\HomeController@menu');

Route::get('/tai-khoan', 'App\Http\Controllers\UserControllers\AuthController@index')->name('login');
Route::post('/register','App\Http\Controllers\UserControllers\AuthController@register');
Route::post('/login','App\Http\Controllers\UserControllers\AuthController@login');
Route::get('/xac-nhan-code', 'App\Http\Controllers\UserControllers\AuthController@authentication');


Route::get('/list-posts', 'App\Http\Controllers\UserControllers\PostController@index');

Route::get('/post/{slug}', 'App\Http\Controllers\UserControllers\PostController@show');
Route::post('/post/save', 'App\Http\Controllers\UserControllers\PostController@savepost');
// Route::get('/cach-lam-tra-bi-dao', 'App\Http\Controllers\UserControllers\HomeController@view_post');

Route::get('/contact', 'App\Http\Controllers\UserControllers\ContactController@contact');
Route::post('/contact/create', 'App\Http\Controllers\UserControllers\ContactController@contactCreate');

Route::get('/product/{slug}', 'App\Http\Controllers\UserControllers\HomeController@detail_product');


Route::get('/ve-chung-toi', 'App\Http\Controllers\UserControllers\HomeController@about_us');

Route::middleware(['auth.middleware'])->group(function() {
    Route::get('/gio-hang-cua-toi','App\Http\Controllers\UserControllers\HomeController@carts');
    Route::post ('/xac-nhan-don-hang','App\Http\Controllers\UserControllers\HomeController@order');
    Route::get('/management-account', 'App\Http\Controllers\UserControllers\HomeController@account');
    Route::get('/chia-se-bai-viet', 'App\Http\Controllers\UserControllers\PostController@posting');
});
 
// neu 1 middleware thi co the khai bao nhu nay
// còn 2 trở len thi cho ten middleware vao 1 mảng ['auth.middleware', 'middleware2']
Route::prefix('admin')->middleware(['auth.middleware','admin.middleware'])->group( function() {
    // Route::get('/', ); // casi nay de dan toi trang login admin
    Route::get('/dashboard', 'App\Http\Controllers\AdminControllers\HomeController@dashboard');
    Route::get('/management-user', 'App\Http\Controllers\AdminControllers\HomeController@user');
    Route::get('/logout', 'App\Http\Controllers\AdminControllers\HomeController@logout');

    Route::get('/management-categories', 'App\Http\Controllers\AdminControllers\CategoryController@index');
    Route::get('/category/create', 'App\Http\Controllers\AdminControllers\CategoryController@create');
    Route::post('/category/store', 'App\Http\Controllers\AdminControllers\CategoryController@store');
    
    Route::get('/management-products', 'App\Http\Controllers\AdminControllers\ProductController@index');
    Route::get('/product/create', 'App\Http\Controllers\AdminControllers\ProductController@create');
    Route::post('/product/store', 'App\Http\Controllers\AdminControllers\ProductController@store');
    Route::get('/add-sale', 'App\Http\Controllers\AdminControllers\HomeController@add_sale');
    Route::get('/management-review', 'App\Http\Controllers\AdminControllers\ProductController@review');

    Route::get('/management-posts', 'App\Http\Controllers\AdminControllers\PostController@index');
    Route::get('/post/create', 'App\Http\Controllers\AdminControllers\PostController@create');
    Route::get('/post/check', 'App\Http\Controllers\AdminControllers\PostController@check');
    Route::get('/post/comment', 'App\Http\Controllers\AdminControllers\PostController@comment');

    Route::get('/management-contacts', 'App\Http\Controllers\AdminControllers\ContactController@index');
    Route::get('/contact/reply/{id}', 'App\Http\Controllers\AdminControllers\ContactController@contactReply');
    Route::post('/contact/reply/send/{id}', 'App\Http\Controllers\AdminControllers\ContactController@sendReply');

    Route::get('/management-orders', 'App\Http\Controllers\AdminControllers\OrderController@index');
    Route::get('/order/detail', 'App\Http\Controllers\AdminControllers\OrderController@detail');

    Route::get('/management-questions', 'App\Http\Controllers\AdminControllers\HomeController@questions');
    Route::get('/management-charts', 'App\Http\Controllers\AdminControllers\HomeController@charts');


    /**
     * ví dụ cho cái route ni
     * muốn dùng middleware cho cái route ni thì dùng bằng cách sau
     * - cái middleware này hiểu don giản thì nó là 1 cái hàm
     * - Khi di vào cái route này á, thì sẽ thực thi cái hàm middleware trước
     * - Ở trong middleware mình sẽ kiểm tra dieu kiện hoặc xử lý sao do, nếu thoả mãn dieu kiện của mình thì
     * sẽ thực thi hàm của controller
     */
    // 1 route có thể có nhiều middleware, thì nó sẽ di qua từng middleware truoc, ròi cuối cùng là di tới hàm của controller
    // ví dụ di qua middleware auth.middleware, thì nó sẽ qua tiếp middleware2, middleware2 mà cho di qua nua thì nó sẽ tới hàm của controller
    Route::get('/intro-restaurant', 'App\Http\Controllers\AdminControllers\HomeController@intro_restaurant');
    
});