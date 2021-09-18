@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="../../resources/css/admin.user.css">
@endsection
@section('content')
<div class="row">
    <div class="col-12 grid-margin">
      <div class="card"  style="margin: 20px;">
        <div class="card-body">
          <h4 class="card-title">Kiểm duyệt bài viết</h4>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>STT </th>
                  <th>Tiêu đề bài viết </th>
                  <th>Hình ảnh minh họa</th>
                  <th>Tác giả</th>
                  <th>Duyệt bài</th>
                  
                </tr>
              </thead>
              <tbody>
                @foreach ($posts as $index=>$post)
                    <tr>
                      <td>{{$index + 1}}</td>
                      <td>{{$post->title}}</td>
                      <td><img class="img-post" src="{{ asset($post->path) }}" alt=""></td>
                      <td>{{$post->name}}</td>
                      <td style="text-align: center">
                        <a href="{{URL::to('admin/post/detail/'.$post->slug)}}"><button type="button" class="btn btn-inverse-info btn-icon"><i class="mdi mdi-border-color"></i></button></a>
                      </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
            {!! $posts->links("pagination::bootstrap-4") !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection