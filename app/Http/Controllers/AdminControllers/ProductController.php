<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;
use App\Models\Category;
use Illuminate\Support\Str;
use Session;

class ProductController extends Controller
{
    function index() {
        $products = Product::join('categories', 'products.category_id', 'categories.id')
        ->select('products.*','categories.name as category')
        ->paginate(5);
        foreach ($products as $product) {
            $product->image = Image::where('type', '=', 'product')->where('type_id', $product->id)->first()->path;
        }
        return view('admin.product.index', compact('products'));
    }

    function create() {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }
    function review() {
        return view('admin.product.review');
    }

    function store(Request $request) {
        $product = new Product();
        $product->name = $request->name;
        $product->slug = Str::slug($request->name, '-') .now();
        $product->description = $request->description;
        $product->price = $request->price;
        $product->amount = $request->amount;
        $product->category_id = $request->category_id;
        if($request->discount) $product->discount = $request->discount;
        $product->save();
        if($request->hasFile('image')) {
            $images = $request->image;
            foreach ($images as $item) {
                // item là đối tượng file đc tải lên
                $file = $item;
                $file->move('store/products', $file->getClientOriginalName());
                // image là đối tượng lưu vào csdl
                $image = new Image();       
                $image->path = 'store\\products\\' .$file->getClientOriginalName();
                $image->type = 'product';
                $image->type_id = $product->id;
                $image->save();
            }
        }
        Session::put('product-status', 'Thêm mới sản phẩm thành công');
        return redirect()->back();
    }
    function edit($id)
    {
        $product = Product::where('id', '=', $id)->first();
        $images = Image::where('type', '=', 'product')->where('type_id', '=', $product->id)->get();
        $categories = Category::all();
        return view('admin.product.edit',compact('product','images','categories'));
    }

    function update(Request $request)
    {
        $product = Product::where('id', '=', $request->id)->first();
        if ($request->name) {
            $product->name = $request->name;
            $product->slug = Str::slug($request->name, '-') .now();
        }
        if ($request->description) {
            $product->description = $request->description;
        }
        if ($request->price) {
            $product->price = $request->price;
        }
        if ($request->amount) {
            $product->amount = $request->amount;
        }
        if ($request->category_id) {
            $product->category_id = $request->category_id;
        }
        if($request->discount) $product->discount = $request->discount;
        if($request->hasFile('image')) {
            $product_images = Image::where('type', '=', 'product')->where('type_id', '=', $product->id)->get();
            foreach ($product_images as $image) {
                $image->delete();
            }

            $images = $request->image;
            foreach ($images as $item) {
                // item là đối tượng file đc tải lên
                $file = $item;
                $file->move('store/products', $file->getClientOriginalName());
                // image là đối tượng lưu vào csdl
                $image = new Image();       
                $image->path = 'store\\products\\' .$file->getClientOriginalName();
                $image->type = 'product';
                $image->type_id = $product->id;
                $image->save();
            }
        }
        $product->save();
        Session::put('product-status', 'Cập nhật thông tin sản phẩm thành công');
        return redirect()->to('admin/management-products');
    }
}
