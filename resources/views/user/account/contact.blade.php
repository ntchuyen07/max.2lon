@extends('user.account')
@section('content')
<div id="contact" class="tabcontent">
    <div class="buttons" style="margin-top:-40px" >
        <a href="{{URL::to('/contact')}}" target="_blank">
            <button class="blob-btn">
                Gửi yêu cầu
                <span class="blob-btn__inner">
                  <span class="blob-btn__blobs">
                    <span class="blob-btn__blob"></span>
                    <span class="blob-btn__blob"></span>
                    <span class="blob-btn__blob"></span>
                    <span class="blob-btn__blob"></span>
                  </span>
                </span>
            </button>
        </a>
        <br/>
      
      <svg style="display: none" xmlns="http://www.w3.org/2000/svg" version="1.1">
        <defs>
          <filter id="goo">
            <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10"></feGaussianBlur>
            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo"></feColorMatrix>
            <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
          </filter>
        </defs>
      </svg>
    </div>
    <table style="width: 100%;" class="table-bordered">
        <tr>
            <th>STT</th>
            <th>Nội dung</th>
            <th>Thời gian</th>
            <th>Phản hồi</th>
            <th>Xem chi tiết</th>
        </tr>
        @foreach ($contacts as $index=>$contact)
            <tr>
                <td class="center-post">{{$index + 1}}</td>
                <td><div class="text-contact">{!! $contact->content !!}</div></td>
                <td class="center-post">{{$contact->created_at->format('H:i:s d-m-Y')}}</td>
                <td><div class="text-contact">{!! $contact->reply !!}</div></td>
                <td class="center-post"><button class="btn btn-detail-contact" data-toggle="modal" data-target="#contactModal{{$contact->id}}" ><i class="fas fa-eye"></i></button></td>
            </tr>
            <div class="admin-question-model modal fade" id="contactModal{{$contact->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div  class="modal-dialog" role="document">
                <div style="width: 700px;" class="modal-content">
                  <div class="modal-header" style="padding: 10px 16px;">
                    <h5 class="modal-title"id="exampleModalLabel">Yêu cầu hỗ trợ <a href="https://mail.google.com/mail/u/1/#inbox" target="_blank" class="link-mail"><em>Xem trong mail</em></a></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="form-group">
                        <div id="scroll-contact">
                          <div id="group-contact">
                              <div class="item-contact">
                                  <div class="title-contact">Yêu cầu của tôi</div>
                                  <div>
                                      <div class="content-contact">
                                          <div class="user-contact">Thời gian gửi yêu cầu: {{$contact->created_at->format('H:i:s d-m-Y')}}</div>
                                          <div class="user-contact">Email nhận phản hồi: {{$contact->email}}</div>
                                          <div class="contact">{!! $contact->content !!}</div>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-reply">
                                  <div class="form-reply-wrap">
                                      <div class="item-reply-contact">
                                          <div class="title-contact" style="margin-top: 10px">Phản hồi từ phía nhà hàng</div>
                                          <div>
                                              <div class="content-reply-contact">
                                                  <div class="user-reply-contact">Thời gian phản hồi: {{ \Carbon\Carbon::parse($contact->reply_at)->format('H:i:s d/m/Y')}}</div>
                                                  <div class="reply-contact">{!! $contact->reply !!}</div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer pt-0 pt-0" style="padding-top: 15px !important">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                  </div>
                </div>
              </div>
            </div>
        @endforeach
    </table>
</div>
@endsection