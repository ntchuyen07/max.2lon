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

    function menu($id,Request $request)
    {
        if (!$request->query('amount')) {
            $amount = 12;
        } else {
            $amount = $request->query('amount');
        }
        
        if ($id==0) {
            $products = Product::paginate($amount)->withQueryString();
        } else {
            $products = Product::where('category_id', '=', $id)->paginate($amount)->withQueryString();
        }
        foreach ($products as $product) {
            $product->image = Image::where('type', '=', 'product')->where('type_id', $product->id)->first()->path;
        }
        $categories = Category::all();
        $id_cate = $id;
        return view('user.products', compact('products','categories','amount','id_cate'));
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
    function about_us() 
    {
        return view('user.about-us');
    }
    function logout() {
        Session::forget('user');
        return redirect()->to('home');
    }

    function search(Request $request)
    {
        $name = $request->query('name') ? $request->query('name') : '';
        $price = $request->query('price') ? $request->query('price') : 500000;
        $amount = $request->query('amount') ? $request->query('amount') : 12;
        if (!$request->query('category')) {
            $products = Product::orderBy('price', 'asc')->where('name', 'like', '%'.$name.'%')
                            ->where('price','<=', $price)
                            ->paginate($amount)->withQueryString();
        } else {
            $products = Product::orderBy('price', 'asc')->where('name', 'like', '%'.$name.'%')
                            ->where('price','<=', $price)
                            ->whereIn('category_id', $request->query('category'))
                            ->paginate($amount)->withQueryString();
        }
        foreach ($products as $product) {
            $product->image = Image::where('type', '=', 'product')->where('type_id', $product->id)->first()->path;
        }
        $categories = Category::all();
        $id_cate = '';
        return view('user.products', compact('products','categories','amount', 'id_cate'));
    }
}
