    @extends('layouts.user')
    @section('title','Đăng bài viết')
    @section('style')
    <link rel="stylesheet" href="{{ asset('assests/css/user/user.detail-post.css') }}">
    @endsection
    @section('content')
    <div class="container-fuild">
        <div class="big-theme">
            <div class="big-topic">Đăng bài viết</div>
            <div class="inline"></div>
            <p class="desc-theme">Chia sẻ kinh nghiệm của bạn </p>
        </div>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mypost">
                    <div>
                        <label for="title">
                            <span>Tiêu đề bài viết</span>
                            <input class="input" type="text" id="title" placeholder="Nhập tiêu đề cho bài viết của bạn">
                        </label>
                    </div>
                    <div>
                        <label for="title">
                            <span>Hình ảnh minh họa</span>
                            <div class="img-illustration">
                                <img class="image-post" src="https://icons.iconarchive.com/icons/janosch500/tropical-waters-folders/256/Photos-icon.png" alt="">
                                <input type="file" name="image" id="image" onchange="readURL(this)" style="display: none;" accept="image/*">
                                <label for="image" class="label-img" >
                                <img class="img-add" src="https://cdn.iconscout.com/icon/premium/png-512-thumb/camera-1564671-1325543.png" alt=""></label>
                            </div>
                        </label>
                    </div>
                    <div>
                        <label for="content">
                            <span>Nội dung bài viết</span>
                            <textarea name="content"></textarea>
                            <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
	                        <script>
	                            CKEDITOR.replace('content');
	                        </script>
                        </label>
                    </div>
                    <div>
                        <label for="tags">
                            <span>Tags</span>
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
                </div>
                <div class="col-md-4">
                     
                </div>
            </div>
        </div>
    <script src="../../resources/js/posting.js"></script>
    @endsection
