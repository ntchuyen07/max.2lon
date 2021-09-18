@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="../../resources/css/admin.user.css">
    <link rel="stylesheet" href="{{asset("/assests/css/admin/admin.post.css")}}">
@endsection
@section('content')
<div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Quản lý bài viết</h4>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>STT </th>
                  <th>Tiêu đề bài viết </th>
                  <th>Tác giả</th>
                  <th>Lượt xem</th>
                  <th>Trạng thái</th>
                  <th>Hoạt động</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($posts as $index=>$post)
                  <tr>
                    <td>{{$index+1}}</td>
                    <td><a href="{{URL::to('/post/'.$post->slug)}}" target="_blank" class="title-post">{{$post->title}}</a></td>
                    <td>{{$post->name}}</td>
                    <td>{{$post->view}}</td>
                    <td>
                      @if ($post->isCheck ==2)
                          Chưa duyệt
                      @else
                          Đã duyệt
                      @endif
                    </td>
                    <td></td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div>
            {{$posts->links("pagination::bootstrap-4")}}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection