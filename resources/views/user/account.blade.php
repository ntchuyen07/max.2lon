@extends('layouts.user')
@section('title','Quản lý tài khoản người dùng')
@section('content')
    <div class="container-fuild content-full">
        <div class="container content-manage">
            <div class="row content-infor">
                <div class="col-md-2">
                    <img class="avatar-acc" src="https://i.pinimg.com/564x/bb/4c/29/bb4c2966af9576fee8e909757c0720c3.jpg" alt="">
                </div>
                <div class="col-md-9">
                    <div class="fullname">Nguyễn Thị Cẩm Huyền</div>
                    <div class="role-acc">Thành viên</div>
                    <a class="change-pass" href="">Đổi mật khẩu <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="row">
                <ul class="nav nav-tabs" style="width: 100%;">
                    <li class="nav-item"><a class="nav-link extends active" data-toggle="tab" href="#infor">HỒ SƠ CÁ NHÂN</a></li>
                    <li class="nav-item"><a class="nav-link extends" data-toggle="tab" href="#order">ĐƠN HÀNG CỦA TÔI</a></li>
                    <li class="nav-item"><a class="nav-link extends" data-toggle="tab" href="#contact">LIÊN HỆ HỖ TRỢ</a></li>
                    <li class="nav-item"><a class="nav-link extends" data-toggle="tab" href="#mypost">BÀI VIẾT CỦA TÔI</a></li>
                </ul>
            </div>
            <div class="row">
                <div class="tab-content">
                    <div id="infor" class="tab-pane fade show active">
                        <div class="row change-img">
                            <div class="col-md-8 infor-form">
                                <form action="">
                                    <label>
                                        <span class="span-infor">Họ và tên:</span>
                                        <input class="input-infor" type="text" value="Nguyễn Thị Cẩm Huyền" required>
                                    </label>
                                    <label>
                                        <span class="span-infor">Email:</span>
                                        <input class="input-infor" type="email" value="ntchuyen.19it1@vku.udn.vn" required>
                                    </label>
                                    <label>
                                        <span class="span-infor">Số điện thoại:</span>
                                        <input class="input-infor" type="text" value="0123456789" required>
                                    </label>
                                    <label>
                                        <span class="span-infor">Địa chỉ:</span>
                                        <input class="input-infor" type="text" value="Thanh An, Cam Lộ, Quảng Trị" required>
                                    </label>
                                    <button class="btn-update" type="submit">CẬP NHẬT</button>
                                </form>
                            </div>
                            <div class="col-md-3 change-img">
                                <img class="img-change" src="https://i.pinimg.com/564x/bb/4c/29/bb4c2966af9576fee8e909757c0720c3.jpg" alt="">
                                <input type="file" name="image" id="image" onchange="readURL(this);" style="display: none;" accept="image/*">
                                <label for="image" class="label-img" >
                                <img class="img-add-avatar" src="https://cdn.iconscout.com/icon/premium/png-512-thumb/camera-1564671-1325543.png" alt=""></label>
                            </div>
                        </div>
                    </div>
                    <div id="order" class="tab-pane fade">
                        Đơn hàng đã đặt
                    </div>
                    <div id="contact" class="tab-pane fade">
                        Phản hồi liên hệ
                    </div>
                    <div id="mypost" class="tab-pane fade">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection