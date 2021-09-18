@extends('layouts.user')
@section('title','Blog')
@section('style')
    <link rel="stylesheet" href="{{ asset('assests/css/user/user.blog.css') }}">
@endsection
@section('content')
    <div class="container-fuild img-banner-post d-flex align-items-center justify-content-center">
        <form action="{{URL::to('/list-posts')}}" method="GET">
            <input type="text" name="search" id="" placeholder="Nhập tiêu đề bài viết bạn muốn tìm kiếm..." class="search-post">
        </form>
    </div>
    <div class="container-fuild blog-form">
        <div class="row">
            <div class="col-md-4">
                @foreach ($posts as $index=>$post)
                    @if ($index==0||$index==3||$index==6)
                        <div class="card-post">
                            <div class="intro-post">
                                <div class="title-post">{{$post->title}}</div>
                                <div class="author-post">{{$post->name}}</div>
                                <div class="intro-post-wrap"></div>
                            </div>
                            <div class="img-div">
                                <img class="image-post" src="{{asset($post->path)}}" alt="">
                            </div>
                            <div class="content-post">
                                {!! $post->content !!}
                            </div>
                            <div class="desc-post">
                                <div class="col-md-6 view-post"><i class="fas fa-eye"></i>{{$post->view}} lượt xem</div>
                                <div class="col-md-6"><a href="{{URL::to('/post/' .$post->slug)}}" class="btn-more">></a></div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="col-md-4" style="margin-top: 160px;">
                @foreach ($posts as $index=>$post)
                    @if ($index==1||$index==4)
                        <div class="card-post">
                            <div class="intro-post">
                                <div class="title-post">{{$post->title}}</div>
                                <div class="author-post">{{$post->name}}</div>
                                <div class="intro-post-wrap"></div>
                            </div>
                            <div class="img-div">
                                <img class="image-post" src="{{asset($post->path)}}" alt="">
                            </div>
                            <div class="content-post">
                                {!! $post->content !!}
                            </div>
                            <div class="desc-post">
                                <div class="col-md-6 view-post"><i class="fas fa-eye"></i>{{$post->view}} lượt xem</div>
                                <div class="col-md-6"><a href="{{URL::to('/post/' .$post->slug)}}" class="btn-more">></a></div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="col-md-4">
                @foreach ($posts as $index=>$post)
                    @if ($index==2||$index==5||$index==7)
                        <div class="card-post">
                            <div class="intro-post">
                                <div class="title-post">{{$post->title}}</div>
                                <div class="author-post">{{$post->name}}</div>
                                <div class="intro-post-wrap"></div>
                            </div>
                            <div class="img-div">
                                <img class="image-post" src="{{asset($post->path)}}" alt="">
                            </div>
                            <div class="content-post">
                                {!! $post->content !!}
                            </div>
                            <div class="desc-post">
                                <div class="col-md-6 view-post"><i class="fas fa-eye"></i>{{$post->view}} lượt xem</div>
                                <div class="col-md-6"><a href="{{URL::to('/post/' .$post->slug)}}" class="btn-more">></a></div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div>{!! $posts->links("pagination::bootstrap-4") !!}</div>
    </div>
@endsection