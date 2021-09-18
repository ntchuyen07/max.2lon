<?php

namespace App\Http\Controllers\UserControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;
use App\Models\Image;

class PostController extends Controller
{
    function index(Request $request) {
        if (!$request->query('search')) {
            $posts = Post::orderBy('id', 'desc')->join('users', 'posts.user_id', 'users.id')
            ->join('images', 'posts.id', 'images.type_id')
            ->select('posts.*', 'images.path', 'users.name')
            ->where('images.type', '=', 'post' )->paginate(8);
        } else {
            $posts = Post::join('users', 'posts.user_id', 'users.id')
            ->join('images', 'posts.id', 'images.type_id')
            ->select('posts.*', 'images.path', 'users.name')
            ->where('posts.title', 'like', '%'.$request->query('search').'%')
            ->where('images.type', '=', 'post' )->paginate(8);        
        }
        return view('user.post.index',compact('posts'));
    }
    function posting() {
        return view('user.posting');
    }

    function show($slug)
    {
        $post = Post::join('users', 'posts.user_id', 'users.id')
        ->join('images', 'posts.id', 'images.type_id')
        ->select('posts.*', 'images.path', 'users.name','users.avatar')
        ->where('slug', $slug)->where('images.type', '=', 'post' )->first();
        $suggests = Post::join('users', 'posts.user_id', 'users.id')
        ->join('images', 'posts.id', 'images.type_id')
        ->select('posts.*', 'images.path', 'users.name','users.avatar')
        ->where('images.type', '=', 'post' )->inRandomOrder()->take(4)->get();
        $views = Post::join('users', 'posts.user_id', 'users.id')
        ->join('images', 'posts.id', 'images.type_id')
        ->select('posts.*', 'images.path', 'users.name','users.avatar')
        ->where('images.type', '=', 'post' )->orderBy('view', 'desc')->take(4)->get();
        if($post) {
            return view('user.view-post', compact('post','suggests','views'));
        } else {
            return redirect()->to('list-posts');
        }
    }
    function savepost(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id = session('user')->id;
        $post->slug = Str::slug($request->title, '-');
        $post->save();
        if($request->hasFile('image')) {
            $file = $request->image;
            $file->move('store/posts', $file->getClientOriginalName());
            // image là đối tượng lưu vào csdl
            $image = new Image();       
            $image->path = 'store\\posts\\' .$file->getClientOriginalName();
            $image->type = 'post';
            $image->type_id = $post->id;
            $image->save();
        }
        return redirect()->back();
    }
}
