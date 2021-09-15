<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Arapey' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Arima Madurai' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css" integrity="sha512-C8Movfk6DU/H5PzarG0+Dv9MA9IZzvmQpO/3cIlGIflmtY3vIud07myMu4M/NTPJl8jmZtt/4mC9bAioMZBBdA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('assests/css/user/layout.user.css') }}">
    <link rel="stylesheet" href="{{ asset('assests/css/user/user.account.css') }}">
    <title>Quản lý thông tin cá nhân</title>
</head>
<body>
    <div class="container-fuild">
        <div class="row mx-0">
            <div class="col-md-3 menu-account">
                <div class="content-infor">
                    <div>
                        <img class="avatar-acc" src="{{ asset(session('user')->avatar) }}" alt="">
                    </div>
                    <div style="padding-left: 20px">
                        <div class="fullname">{{session('user')->name}}</div>
                        <div class="role-acc">Thành viên</div>
                    </div>
                </div>
                <div class="tabs">
                    <div>
                        <button class="tablinks" onclick="openTab(event, 'infor')" id="defaultOpen"><i class="fas fa-user-alt i-tab"></i>HỒ SƠ CÁ NHÂN </button>
                    </div>
                    <div>
                        <button class="tablinks" onclick="openTab(event, 'order')" class="order" ><i class="fas fa-shopping-cart i-tab"></i>ĐƠN HÀNG CỦA TÔI </button>
                    </div>
                    <div>
                        <button class="tablinks" onclick="openTab(event, 'contact')" class="contact"><i class="fas fa-info-circle i-tab"></i>LIÊN HỆ HỖ TRỢ </button>
                    </div>
                    <div>
                        <button class="tablinks" onclick="openTab(event, 'mypost')" class="mypost" ><i class="fas fa-edit i-tab"></i>BÀI VIẾT CỦA TÔI </button>
                    </div>
                    <div>
                        <button class="tablinks" onclick="openTab(event, 'changepass')" class="changePass" ><i class="fas fa-arrow-circle-right i-tab"></i>ĐỔI MẬT KHẨU </button>
                    </div>
                </div>
                <div class="btn-wrap" style="margin-top: -180px;">
                    <a href="{{ URL::to('/home') }}" class="link-more"><span class="text-more"> Trở về Trang chủ</span><span class="icon"><i class="fas fa-arrow-left"></i></span></a>
                </div> 
            </div>
            {{-- <div class="col-md-3"></div> --}}
            <div class="offset-md-3 col-md-9">
                <div class="tab-content">
                    <div id="changepass" class="tabcontent">
                        <form action="">
                            <div class="form-group-pass">
                                <label>Mật khẩu cũ</label>
                                <input type="password" class="form-control input-lg" required/>
                           </div>
                           <div class="form-group-pass">
                                <label>Mật khẩu mới</label>
                                <input type="password" class="form-control input-lg" required/>
                            </div>
                            <div class="form-group-pass">
                                <label>Xác nhận mật khẩu</label>
                                <input type="password" class="form-control input-lg" required/>
                            </div>
                            <div class="buttons" >
                                <a href="#">
                                    <button class="blob-btn">
                                        CẬP NHẬT
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
                        </form>
                    </div>
                    <div id="infor" class="tabcontent">
                        <form action="">
                        <div class="row change-img">
                            <div class="col-md-7 infor-form">
                                    <label>
                                        <span class="span-infor">Họ và tên:</span>
                                        <input class="input-infor" type="text" value="{{ session('user')->name }}" required>
                                    </label>
                                    <label>
                                        <span class="span-infor">Email:</span>
                                        <input class="input-infor" type="email" value="{{ session('user')->email }}" required>
                                    </label>
                                    <label>
                                        <span class="span-infor">Số điện thoại:</span>
                                        <input class="input-infor" type="text" value="{{ session('user')->phone }}" required>
                                    </label>
                                    <label>
                                        <span class="span-infor">Địa chỉ:</span>
                                        <input class="input-infor" type="text" value="{{ session('user')->address }}">
                                    </label>
                                    <button class="btn-update" type="submit">CẬP NHẬT</button>
                            </div>
                            <div class="col-md-4 change-img">
                                <img class="img-change" src="{{ asset(session('user')->avatar) }}" alt="">
                                <input type="file" name="image" id="image" onchange="readURL(this);" style="display: none;" accept="image/*">
                                <label for="image" class="label-img" >
                                <img class="img-add-avatar" src="https://cdn.iconscout.com/icon/premium/png-512-thumb/camera-1564671-1325543.png" alt=""></label>
                            </div>
                        </div>
                    </form>
                    </div>
                    <div id="order" class="tabcontent">
                        Đơn hàng đã đặt
                    </div>
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
                                    <td class="center-post"><button class="btn btn-detail-contact" data-toggle="modal" data-target="#contactModal" ><i class="fas fa-eye"></i></button></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <div id="mypost" class="tabcontent">
                        <div class="buttons" style="margin-top:-40px">
                            <a href="{{URL::to('/chia-se-bai-viet')}}" target="_blank">
                                <button class="blob-btn">
                                    Đăng bài viết
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
                                <th>Tiêu đề bài viết</th>
                                <th>Lượt xem</th>
                                <th>Lượt bình luận</th>
                                <th>Tình trạng</th>
                            </tr>
                            @foreach ($posts as $index=>$post)
                            <tr>
                                <td class="center-post">{{$index+1}}</td>
                                <td><a href="{{URL::to('/post/' .$post->slug )}}" class="name-mypost" target="_blank">{{$post->title}}</a></td>
                                <td class="center-post">{{$post->view}}</td>
                                <td class="center-post">40</td>
                                @if ($post->isCheck==2)
                                <th>Chưa duyệt</th>
                                @else
                                <th>Đã duyệt</th> 
                                @endif
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="admin-question-model modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <div class="user-contact">Thời gian gửi yêu cầu: 8:02 28/08/2021</div>
                                    <div class="user-contact">Email nhận phản hồi: camhuyen2k1@gmail.com</div>
                                    <div class="contact">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-reply">
                            <div class="form-reply-wrap">
                                <div class="item-reply-contact">
                                    <div class="title-contact" style="margin-top: 10px">Phản hồi từ phía nhà hàng</div>
                                    <div>
                                        <div class="content-reply-contact">
                                            <div class="user-reply-contact">Thời gian phản hồi: 8:22 28/08/2021</div>
                                            <div class="reply-contact">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim</div>
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
    <script src="{{ asset('assests/js/user/account.js') }}"></script>
</body>
</html>
