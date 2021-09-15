<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function index() {
        return view('admin.order.index');
    }
    function detail() {
        return view('admin.order.detail');
    }
}
