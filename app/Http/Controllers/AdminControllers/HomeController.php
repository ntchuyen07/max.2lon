<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Order;
use App\Models\Order_Detail;
use App\Models\Image;
use App\Models\Product;
use Session;

class HomeController extends Controller
{
    //
    function dashboard() {
        $users = User::orderBy('id','desc')->take(5)->get();
        $orders = Order::orderBy('id', 'desc')->get();
        foreach ($orders as $order) {
            $details = Order_Detail::join('products','products.id','order_details.product_id')
            ->select('order_details.*','products.name')
            ->where('order_id',$order->id)
            ->get();
            foreach ($details as $detail) {
                $detail->image = Image::where('type', '=', 'product')->where('type_id', $detail->product_id)->first()->path;
            }
            $order->details = $details;
        }
        $posts = Post::orderBy('id','desc')->join('users', 'posts.user_id', 'users.id')
        ->join('images', 'posts.id', 'images.type_id')
        ->select('posts.*', 'images.path', 'users.avatar','users.name')
        ->where('posts.isCheck', '=', 2)->where('images.type', '=', 'post' )->get();
        return view('admin.dashboard',compact('users','posts','orders'));
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
