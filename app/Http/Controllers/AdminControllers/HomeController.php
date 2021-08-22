<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    function dashboard() {
        return view('admin.dashboard');
    }
    function user()
    {
        return view('admin.user');
    }
    
    function posts()
    {
        return view('admin.posts');
    }
    function products()
    {
        return view('admin.products');
    }
    function questions()
    {
        return view('admin.questions');
    }
    function contacts()
    {
        return view('admin.contacts');
    }
    function charts()
    {
        return view('admin.charts');
    }
    function check_post()
    {
        return view('admin.check_post');
    }
    function add_category()
    {
        return view('admin.add_category');
    }
    function intro_restaurant()
    {
        return view('admin.intro_restaurant');
    }
    function add_product()
    {
        return view('admin.add_product');
    }
    function add_sale()
    {
        return view('admin.add_sale');
    }
}
