<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;
use App\Models\Image;

class PostController extends Controller
{
    function index() {
        $posts = Post::orderBy('id', 'desc')->join('users', 'posts.user_id', 'users.id')
        ->join('images', 'posts.id', 'images.type_id')
        ->select('posts.*', 'images.path', 'users.name')
        ->where('images.type', '=', 'post' )
        ->paginate(10);
        return view('admin.post.index',compact('posts'));
    }

    function create() {
        return view('admin.post.post');
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

    function check() {
        $posts = Post::orderBy('id', 'desc')->join('users', 'posts.user_id', 'users.id')
                ->join('images', 'posts.id', 'images.type_id')
                ->select('posts.*', 'images.path', 'users.name')
                ->where('posts.isCheck', '=', 2)->where('images.type', '=', 'post' )
                ->paginate(5);
        return view('admin.post.check',compact('posts'));
    }
    function comment() {
        return view('admin.post.comment');
    }
    function detail($slug)
    {
        $post = Post::join('users','users.id','posts.user_id')
                    ->join('images','images.type_id','posts.id')
                    ->select('posts.*','users.name','images.path','users.avatar')
                    ->where('slug', '=', $slug)->where('images.type', '=', 'post')->first();
        return view('admin.post.detail',compact('post'));
    }

    function update($id)
    {
        $post = Post::where('id', '=', $id)->first();
        $post->isCheck = 1;
        $post->save();
        return redirect()->to('admin/post/check');
    }
}
