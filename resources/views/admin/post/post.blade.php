@extends('layouts.admin');
@section('style')
    <link rel="stylesheet" href="{{ asset('assests/css/admin/admin.post.css') }}">
@endsection
@section('content')
<div class="row">
    <div class="mypost text-success">
        <h3 style="color: black; text-align: center">Đăng bài viết</h3>
        <form action="{{URL::to('/admin/post/save')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div>
                <label for="title">
                    <span><b>Tiêu đề bài viết</b></span>
                    <input name="title" class="input" type="text" id="title" placeholder="Nhập tiêu đề cho bài viết của bạn">
                </label>
            </div>
            <div>
                <label for="title">
                    <span><b>Hình ảnh minh họa</b></span>
                    <div class="img-illustration">
                        <img class="image-post" src="https://icons.iconarchive.com/icons/janosch500/tropical-waters-folders/256/Photos-icon.png" alt="">
                        <div>
                            <input name="image" type="file" name="image" id="image" onchange="readURL(this)" accept="image/*">
                        </div>
                    </div>
                </label>
            </div>
            <div>
                <label for="content">
                    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
                    <span><b>Nội dung bài viết</b></span>
                    <textarea name="content"></textarea>
                    <script>
                        CKEDITOR.replace('content');
                    </script>
                </label>
            </div>
            <div>
                <label for="tags">
                    <span><b>Tags</b></span>
                    <div class="tags">
                        <input class="input-tags" type="text" id="myInput" placeholder="Viết tags mà bạn muốn">
                        <span onclick="newElement()" class="addBtn">Add</span>
                    </div>
                </label>
                <div class="list-tags">
                    <ul id="myTags">
                    </ul>
                </div>
            </div>
            <div>
                <button type="submit" class="btn-submit">CHIA SẺ</button>
            </div>
        </form>
    </div>
</div>
<script src="{{ asset('assests/js/admin/createPost.js') }}"></script>
@endsection