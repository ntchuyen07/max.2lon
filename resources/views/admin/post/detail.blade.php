@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="{{ asset('assests/css/user/user.detail-post.css') }}">
@endsection
@section('content')
<div class="row">
    <div class="col-12 grid-margin">
      <div class="card"  style="margin: 20px;">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <h5 class="card-title float-left">Kiểm duyệt bài viết</h5>
                <a href="{{URL::to('admin/post/check/'.$post->id)}}" class="btn btn-success ml-auto">Duyệt</a>
              </div>
          <div class="table-responsive">
            <div class="post">
                    <img style="width:100%;margin-bottom:50px;" src="{{ asset($post->path)}}" alt="">
                <div class="intro-post">
                    <span class="poster"><i class="fas fa-user-alt"></i>  Đăng tải bởi: <b> {{$post->name}}</b></span><span class="time-posting"><i class="fas fa-clock"></i>  Vào lúc:<b> {{$post->created_at ->format('H:i:s d-m-Y')}}</b></span><span class="poster" style="float: right;">{{$post->view}} lượt xem</span>
                </div>
                <div class="title-post">
                    {{$post->title}}
                </div>
                <div class="content-post">
                    {!!$post->content!!}
                    <p><i><span class="fas fa-tags icon-tags"></span><b>Nấu nướng, Đồ uống</b></i></p>
                    <div class="amount"><i>{{$post->name}}</i></div>
                </div>
            </div>
          </div>
          <div style="float: right;margin-top:30px">
            <a href="{{URL::to('admin/post/check/'.$post->id)}}" class="btn btn-success ml-auto">Duyệt</a>
        </div>
        </div>
      </div>
    </div>
  </div>
@endsection