<?php

namespace App\Http\Controllers\UserControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // [GET] /home
    function home() {
        return view('user.home');
    }

    function menu()
    {
        return view('user.products');
    }
    function login()
    {
        return view('user.login');
    }
    function account()
    {
        return view('user.account');
    }
    function view_post()
    {
        return view('user.view-post');
    }
    function contact()
    {
        return view('user.contact');
    }
    function posting()
    {
        return view('user.posting');
    }
    function detail_product()
    {
        return view('user.detail-product');
    }
    function carts()
    {
        return view('user.carts');
    }
}
