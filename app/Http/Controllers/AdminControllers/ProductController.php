<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    function index() {
        $products = Product::paginate(5);
        return view('admin.product.index', compact('products'));
    }

    function create() {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }
}
