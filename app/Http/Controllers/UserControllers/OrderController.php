<?php

namespace App\Http\Controllers\UserControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Image;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Order_Detail;
use Session;

class OrderController extends Controller
{
    function carts()
    {
        $carts = Cart::join('products','carts.product_id','products.id')
        ->select('carts.*','products.name','products.price','products.slug')
        ->where('user_id', '=', session('user')->id)->get();
        foreach ($carts as $cart) {
            $cart->image = Image::where('type', '=', 'product')->where('type_id', $cart->product_id)->first()->path;
        }
        return view('user.carts', compact('carts'));
    }

    function add(Request $request)
    {
        $cart = Cart::where('product_id', '=', $request->product_id)
                    ->where('user_id', '=', session('user')->id)
                    ->first();
        if (!$cart) {
            $cart = new Cart();
            $cart->product_id = $request->product_id;
            $cart->user_id = session('user')->id;
            $cart->number = $request->number;
        } else {
            $cart->number += $request->number;
        }
        if($cart->save()) return 1;
        else return 0;
        
    }

    function order(Request $request)
    {
        $carts = Cart::join('products','carts.product_id','products.id')
        ->select('carts.*','products.name','products.price')
        ->where('user_id', '=', session('user')->id)->get();
        foreach ($carts as $cart) {
            $cart->image = Image::where('type', '=', 'product')->where('type_id', $cart->product_id)->first()->path;
        }
        $receiver = (object)[
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'timeorder' => $request->timeorder,
            'message' => $request->message,
        ];

        Session::put('receiver', $receiver);
        
        return view('user.order',compact('carts'));
    }

    function delete($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
        return redirect()->back();
    }

    function update($id, Request $request) {
        $cart = Cart::find($id);
        $cart->number += $request->number;
        if($cart->save()) return response()->json(['success' => true]);
        return response()->json(['success' => false]);
    }

    function save()
    {
        $order = new Order();
        $order->user_id = session('user')->id;
        $order->receiver_name = session('receiver')->name;
        $order->phone = session('receiver')->phone;
        $order->address = session('receiver')->address;
        $order->message = session('receiver')->message;
        $order->timeorder = session('receiver')->timeorder;
        $order->status_id = 1;
        $order->ship = 20000;
        $order->total = 20000;
        $order->save();

        $total = 20000;
        $carts =Cart::join('products','carts.product_id','products.id')
        ->select('carts.*','products.price')
        ->where('user_id', '=', session('user')->id)->get();
        foreach ($carts as $cart) {
            $total += $cart->number*$cart->price;
            $order_detail = new Order_Detail();
            $order_detail->order_id = $order->id;
            $order_detail->product_id = $cart->product_id;
            $order_detail->amount = $cart->number;
            $order_detail->price = $cart->price;
            $product = Product::where('id', '=',$order_detail->product_id)->first();
            $product->amount -= $order_detail->amount;
            $order_detail->save();
            $product->save();
            $cart->delete();
        }
        $order->total = $total;
        $order->save();
        return redirect()->to('management-account/order');
    }
}
