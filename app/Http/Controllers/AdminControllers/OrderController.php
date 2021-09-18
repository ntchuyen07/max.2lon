<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;
use App\Models\Order;
use App\Models\Order_Detail;
use Illuminate\Support\Str;
use Session;

class OrderController extends Controller
{
    function index($id) {
        if ($id == 0) {
            $orders = Order::orderBy('id', 'desc')->paginate(10);
        } else {
            $orders = Order::orderBy('id', 'desc')->where('status_id', '=', $id)->paginate(10);
        }
        foreach ($orders as $order) {
            $details = Order_Detail::join('products','products.id','order_details.product_id')
            ->select('order_details.*','products.name')
            ->where('order_id',$order->id)
            ->get();
            $order->details = $details;
        }
        return view('admin.order.index',compact('orders'));
    }
    function detail($id) {
        $order = Order::where('id', '=', $id)->first();
        $details = Order_Detail::join('products','products.id','order_details.product_id')
            ->select('order_details.*','products.name')
            ->where('order_id',$order->id)
            ->get();
        foreach ($details as $detail) {
            $detail->image = Image::where('type', '=', 'product')->where('type_id', $detail->product_id)->first()->path;
        }
        $order->details = $details;
        return view('admin.order.detail',compact('order'));
    }

    function next($id)
    {
        $order = Order::where('id', '=', $id)->first();
        $order->status_id += 1;
        $order->save();
        return redirect()->back();
    }
}
