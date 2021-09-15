@extends('layouts.admin')

@section('style')
@endsection
@section('content')
<div class="row">
    <div class="col-12 grid-margin">
      <div class="card"  style="margin: 20px;">
        <div class="card-body">
          <h4 class="card-title">Chi tiết yêu cầu</h4>
          <div>
              <div>Người gửi yêu cầu: {{$contact->name}}</div>
              <div>Thời gian gửi yêu cầu: {{$contact->created_at ->format('H:i:s d-m-Y') }}</div>
              <div>Email nhận phản hồi: {{$contact->email}}</div>
              <div>Nội dung yêu cầu:</div>
              <div>
                <blockquote class="blockquote blockquote-success">
                    <p>{!! $contact->content !!}</p>
                </blockquote>
              </div>
          </div>
          <div>
            <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
            <span><b>Nội dung phản hồi:</b></span>
            <form action="{{URL::to('admin/contact/reply/send/'.$contact->id)}}" method="POST">
              {{ csrf_field() }}
              <textarea name="content">{!! $contact->reply !!}</textarea>
              <script>
                  CKEDITOR.replace('content');
              </script>
              <div style="margin-top: 20px">
                  <button type="submit" class="btn btn-success float-right">Phản hồi</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection