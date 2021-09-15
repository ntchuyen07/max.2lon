<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Session;

class HomeController extends Controller
{
    //
    function dashboard() {
        return view('admin.dashboard');
    }
    
    function user()
    {
        $users = User::paginate(15);
        return view('admin.user',compact('users'));
    }
    
    function questions()
    {
        return view('admin.questions');
    }
    
    function charts()
    {
        return view('admin.charts');
    }
    
    function logout() {
        Session::forget('user');
        return redirect()->to('home');
    }
}
