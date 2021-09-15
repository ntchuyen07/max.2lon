<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    function index() {
        return view('admin.post.index');
    }

    function create() {
        return view('admin.post.post');
    }
    function check() {
        $posts = Post::join('users', 'posts.user_id', 'users.id')
                ->join('images', 'posts.id', 'images.type_id')
                ->select('posts.*', 'images.path', 'users.name')
                ->where('posts.isCheck', '=', 2)->where('images.type', '=', 'post' )
                ->paginate(10);
        return view('admin.post.check',compact('posts'));
    }
    function comment() {
        return view('admin.post.comment');
    }
}
