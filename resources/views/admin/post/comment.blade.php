@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="../../resources/css/admin.user.css">
@endsection
@section('content')
<div class="row">
    <div class="col-12 grid-margin">
      <div class="card"  style="margin: 20px;">
        <div class="card-body">
          <h4 class="card-title">Danh sách bình luận (2 bình luận)</h4>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="text-align: center">STT </th>
                  <th>Nội dung bình luận</th>
                  <th>Tác giả</th>
                  <th>Bài viết</th>
                  <th>Trả lời</th>
                  <th>Hoạt động</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td style="text-align: center">1</td>
                    <td>Bài viết rất hay</td>
                    <td>Minh Tú</td>
                    <td>Cách làm trà bí đao</td>
                    <td><button class="btn btn-info btn-icon" data-toggle="modal" data-target="#replyModal" ><i class="mdi mdi-reply"></i></button></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="text-align: center">2</td>
                    <td>Rất đáng để tham khảo</td>
                    <td>Hoài Hương</td>
                    <td>Cách làm trà bí đao</td>
                    <td><button class="btn btn-info btn-icon" data-toggle="modal" data-target="#replyModal" ><i class="mdi mdi-reply"></i></button></td>
                    <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection