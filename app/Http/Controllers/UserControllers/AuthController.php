<?php

namespace App\Http\Controllers\UserControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Session;

class AuthController extends Controller
{
    function index()
    {
        return view('user.login');
    }

    function register(Request $request)
    {
        // check email đã được đăng ký chưa đã chứ ko biết làm:v
        $isExisted = User::where('email', $request->email)->first();
        if($isExisted) 
        {
            return 0;
        } else 
        {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->password = md5($request->password);
            $user->role = 1;
            $user->avatar = "assests/images/users/avat.jpg";
            if($user->save()) {
                Session::put('user', $user);
                switch($user->role)
                {
                    case '1':
                        return redirect()->to('home');
                        break;
                    case '2':
                        return redirect()->to('admin/dashboard');
                        break;
                    case '3':
                        return redirect()->to('home');
                        break;
                }
            } else {
                return redirect()->to('login');
            }
        }
    }

    function login(Request $request)
    {
        $user = User::where('email','=',$request->email)
                    ->where('password','=',md5($request->password))->first();
        if ($user) {
            Session::put('user', $user);
            switch($user->role)
            {
                case '1':
                    return redirect()->to('home');
                    break;
                case '2':
                    return redirect()->to('admin/dashboard');
                    break;
                case '3':
                    return redirect()->to('home');
                    break;
            }
        } else {
            echo 'Sai tài khoản rồi bạn ei';
        }
        
        
    }
    function authentication()
    {
        return view('user.authentication');
    }
}
