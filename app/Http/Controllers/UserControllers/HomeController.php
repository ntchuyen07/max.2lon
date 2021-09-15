<?php

namespace App\Http\Controllers\UserControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Category;
use App\Models\Post;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Image;
use Session;

class HomeController extends Controller
{
    // [GET] /home
    function home() 
    {
        $posts = Post::join('users', 'posts.user_id', 'users.id')
        ->join('images', 'posts.id', 'images.type_id')
        ->select('posts.*', 'images.path', 'users.name')
        ->where('images.type', '=', 'post' )->take(3)->get();

        $categories = Category::all();
        Session::put('categories', $categories);

        return view('user.home',compact('posts'));
    }

    function menu($id)
    {
        if ($id==0) {
            $products = Product::paginate(12);
        } else {
            $products = Product::where('category_id', '=', $id)->paginate(12);
        }
        foreach ($products as $product) {
            $product->image = Image::where('type', '=', 'product')->where('type_id', $product->id)->first()->path;
        }
        return view('user.products', compact('products'));
    }
    function account()
    {
        $user_id = session('user')->id;
        $contacts = Contact::orderBy('id', 'desc')->where('user_id', '=', $user_id)->paginate(10);
        $posts = Post::orderBy('id', 'desc')->where('user_id', '=', $user_id)->paginate(10);
        $orders = Order::orderBy('id', 'desc')->where('user_id', '=', $user_id)->paginate(10);
        return view('user.account', compact('contacts', 'posts', 'orders'));
    }
    function detail_product($slug)
    {
        $product = Product::where('slug', '=', $slug)->first();
        $images = Image::where('type', '=', 'product')->where('type_id', '=', $product->id)->get();
        $suggests = Product::inRandomOrder()->take(5)->get();
        foreach ($suggests as $suggest) {
            $suggest->image = Image::where('type', '=', 'product')->where('type_id', $suggest->id)->first()->path;
        }
        return view('user.detail-product',compact('product','images','suggests'));
    }
    function carts()
    {
        return view('user.carts');
    }
    function order(Request $request)
    {
        return view('user.order',compact('request'));
    }
    function about_us() 
    {
        return view('user.about-us');
    }
    function logout() {
        Session::forget('user');
        return redirect()->to('home');
    }
}
