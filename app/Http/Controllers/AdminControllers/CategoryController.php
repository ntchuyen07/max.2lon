<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    function index() {
        $categories = Category::paginate(5);
        return view('admin.category.index', compact('categories'));
    }

    function create() {
        return view('admin.category.create');
    }

    function store(Request $request) {
        $category = Category::where('name', '=', $request->name)->first();
        if($category) {
            return response()->json([
                'success' => false,
                'message' => 'Danh mục đã tồn tại'
            ]);
        } else {
            $category = Category::create([
                'name' => $request->name,
                'description'=> $request->description,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Thêm mới danh mục thành công'
            ]);
        }
    }
}
