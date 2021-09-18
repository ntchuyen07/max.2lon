<?php

namespace App\Http\Controllers\UserControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Order_Detail;
use App\Models\Category;
use App\Models\Post;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Image;
use Session;

class AccountController extends Controller
{
    function account()
    {
        return view('user.account.information');
    }
    function update(Request $request)
    {
        $user = User::where('id', '=', session('user')->id)->first();
        if ($request->name) {
            $user->name = $request->name;
        }
        if ($request->phone) {
            $user->phone = $request->phone;
        }
        if ($request->address) {
            $user->address = $request->address;
        }
        if ($request->image) {
            $file = $request->image;
            $file->move('store/users', $file->getClientOriginalName());
            $user->avatar = 'store\\users\\' .$file->getClientOriginalName();
        }
        $user->save();
        Session::put('user', $user);
        return redirect()->back();
    }


    function order()
    {
        $user_id = session('user')->id;
        $orders = Order::orderBy('id', 'desc')->where('user_id', '=', $user_id)->paginate(10);
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
        return view('user.account.order', compact('orders'));
    }

    function post()
    {

        $user_id = session('user')->id;
        $posts = Post::orderBy('id', 'desc')->where('user_id', '=', $user_id)->paginate(10);
        return view('user.account.post', compact('posts'));
    }

    function contact()
    {
        $user_id = session('user')->id;
        $contacts = Contact::orderBy('id', 'desc')->where('user_id', '=', $user_id)->paginate(10);
        return view('user.account.contact', compact('contacts'));
    }

    function changepass()
    {
        return view('user.account.changepass');
    }
}
