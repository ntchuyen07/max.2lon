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
    <link rel="stylesheet" href="{{ asset('assests/css/user/user.cart.css') }}">
    <title>Xác nhận đơn hàng</title>
</head>
<body class="body-order">
    <div class="container-fuild">
        <div class="cont">
            <div class="intro-order">
                <div style="margin-bottom: 15px;"><span class="topic-order">Thông tin nhận hàng</span></div>
                <div>Người nhận: {{$request->name}}</div>
                <div>Số điện thoại: {{$request->phone}}</div>
                <div>Địa chỉ: {{$request->address}}</div>
                <div>Thời gian giao hàng dự kiến: {{$request->timeorder}}</div>
                @if ($request->mesage)
                <div>Lời nhắn: {{$request->mesage}}</div>
                @else 
                @endif
            </div>
            <div class="list-order">
                <div class="row properties">
                    <div class="col-md-5">Sản phẩm</div>
                    <div class="col-md-2">Đơn giá</div>
                    <div class="col-md-3">Số lượng</div>
                    <div class="col-md-2">Thành tiền</div>
                </div>
                <div class="row item-product">
                    <div class="col-md-5 intro-item">
                        <img class="image-item" src="https://cdn.tgdd.vn/2021/04/content/8-800x450.jpg" alt="">
                        <div>
                            <div><span class="name-item-cart">Cút lộn xào me</span></div>
                        </div>
                    </div>
                    <div class="col-md-2"><span><sup><ins>đ</ins></sup>20.000</span></div>
                    <div class="col-md-3">
                        6
                    </div>
                    <div class="col-md-2"><span class="total-item"><sup><ins>đ</ins></sup><b>120.000</b></span></div>
                </div>
                <div class="row item-product">
                    <div class="col-md-5 intro-item">
                        <img class="image-item" src="http://www.monngonplus.vn/images/1/1-001-mon-trang-mieng-ngon-me-ly-tu-xoai-va-dua_1556782795.jpg" alt="">
                        <div>
                            <div><span class="name-item-cart">Panna Cotta Xoài</span></div>
                        </div>
                    </div>
                    <div class="col-md-2"><span><sup><ins>đ</ins></sup>30.000</span></div>
                    <div class="col-md-3">
                        5
                    </div>
                    <div class="col-md-2"><span class="total-item"><sup><ins>đ</ins></sup><b>150.000đ</b></span></div>
                </div>
            </div>
            <div>
                Chọn voucher:
            </div>
            <div class="row">
                <div class="offset-md-7 col-md-5">
                    <div class="row">
                        <div class="col-md-8">
                            <div>Tổng tiền hàng:</div>
                            <div>Phí vận chuyển:</div>
                            <div><b>Tổng cộng:</b></div>
                            <div>Khách hàng thanh toán:</div>
                        </div>
                        <div class="col-md-4" style="text-align: right">
                            <div>250.000đ</div>
                            <div>20.000đ</div>
                            <div class="final-price-order"><b>270.000đ</b></div>
                            <div>270.000đ</div>
                        </div>
                    </div>
                    <!--Button xác nhận đơn hàng-->
                    <div>
                        <div class="buttons" >
                            <a href="#">
                                <button class="blob-btn">
                                    ĐẶT HÀNG
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../resources/js/carts.js"></script>
</body>
</html>

