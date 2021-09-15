@extends('layouts.admin')

@section('style')
@endsection
@section('content')
<div class="row">
    <div class="col-12 grid-margin">
      <div class="card"  style="margin: 20px;">
        <div class="card-body">
          <h4 class="card-title">Danh sách yêu cầu hỗ trợ (2 yêu cầu)</h4>
          <div style="padding-bottom: 40px;">
            <button class="btn btn-outline-success ">
              Đã phản hồi
            </button>
            <button class="btn btn-outline-danger">
              Chưa phản hồi
            </button>
          </div>
          <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th style="text-align: center">STT </th>
                  <th>Người dùng</th>
                  <th>Email</th>
                  <th style="width: 40%;">Nội dung</th>
                  <th>Thời gian gửi yêu cầu</th>
                  <th style="width: 10%;">Trả lời</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($contacts as $index=>$contact)
                  <tr>
                    <td style="text-align: center">{{$index + 1}}</td>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->content}}</td>
                    <td>{{$contact->created_at}}</td>
                    <td><a href="{{URL::to('admin/contact/reply/' .$contact->id)}}" class="btn btn-info btn-icon"><i class="mdi mdi-reply"></i></a></td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection