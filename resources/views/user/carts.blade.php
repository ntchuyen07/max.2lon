<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Arapey' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Arima Madurai' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"
        integrity="sha512-C8Movfk6DU/H5PzarG0+Dv9MA9IZzvmQpO/3cIlGIflmtY3vIud07myMu4M/NTPJl8jmZtt/4mC9bAioMZBBdA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('assests/css/user/layout.user.css') }}">
    <link rel="stylesheet" href="{{ asset('assests/css/user/user.cart.css') }}">
    <title>Giỏ hàng của tôi</title>
</head>

<body>
    <input name="_token" value="{{ csrf_token() }}" id="form-token-id" hidden >
    <div class="container-fuild">
        <div class="row">
            <div class="col-md-8 cart-form">
                <div><span class="title">Giỏ hàng của tôi</span><span class="number-item">({{$carts->count()}} sản
                        phẩm)</span></div>
                <div class="row properties d-flex justify-content-center">
                    <div class="col-md-4">Sản phẩm</div>
                    <div class="col-md-2" style="text-align: center">Đơn giá</div>
                    <div class="col-md-3" style="text-align: center">Số lượng</div>
                    <div class="col-md-2" style="text-align: center">Thành tiền</div>
                    <div class="col-md-1"></div>
                </div>
                {{-- Danh sách sản phẩm trong giỏ hàng --}}
                @foreach ($carts as $cart)
                <div class="row item-product">
                    <a href="{{URL::to('product/' .$cart->slug)}}" class="col-md-4 intro-item d-flex">
                        <img class="image-item" src="{{ asset($cart->image) }}" alt="">
                        <div>
                            <div><span class="name-item-cart">{{ $cart->name }}</span></div>
                        </div>
                    </a>
                
                <div class="col-md-2" style="text-align: center">
                    <span><sup><ins>đ</ins></sup>{{ number_format($cart->price) }}</span></div>
                <div class="col-md-3" style="text-align: center">
                    <div class="buttons_added">
                        <input class="minus is-form cart-decrement-btn" data-cartId="{{$cart->id}}" type="button" value="-">
                        <input aria-label="quantity" class="input-qty {{$cart->id}}" max="20" min="1" name="" type="number"
                            value="{{ $cart->number }}">
                        <input class="plus is-form cart-increment-btn" data-cartId="{{$cart->id}}" type="button" value="+">
                    </div>
                </div>
                <div class="col-md-2" style="text-align: center"><span
                        class="total-item"><sup><ins>đ</ins></sup><b><span class="total-item-price {{$cart->id}}" >{{ number_format($cart->number * $cart->price) }}</span></b></span>
                </div>
                <div class="col-md-1" style="text-align: center">
                    <form class="cart-delete-product" action="{{ URL::to('cart/delete/' .$cart->id) }}" method="POST">
                        {{ csrf_field() }}
                        <button type="submit" class="close cart-item-remove" data-dismiss="modal" aria-label="Close"
                            style="outline: none;">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </form>
                </div>
                </div>
                    
                @endforeach
                <div class=" d-flex align-items-center justify-content-center">
                    <div class="col-md-5">
                        <a href="{{ asset('/home') }}" class="keepbuy"><span class="fas fa-arrow-circle-left"></span>
                            Tiếp tục mua hàng</a>
                    </div>
                    <div class="col-md-7 total-prices">
                        Tổng thanh toán ({{$carts->count()}} sản phẩm): <span
                            class="total">55.000<sup><ins>đ</ins></sup></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="checkout">
                    <div class="date-checkout">
                        <div class="detail-cart">Chi tiết vận đơn</div>
                        <div>
                            <form action="{{URL::to('/xac-nhan-don-hang')}}" method="POST">
                                {{ csrf_field() }}
                                <div>
                                    <form id="first_name">
                                        <div class="form-group-cart">
                                            <label>Người nhận</label>
                                            <input type="text" name="name" class="form-control input-lg"
                                                value="{{session('user')->name}}" required />
                                        </div>
                                        <div class="form-group-cart">
                                            <label>Số điện thoại</label>
                                            <input type="text" name="phone" class="form-control input-lg"
                                                value="{{session('user')->phone}}" required />
                                        </div>
                                        <div class="form-group-cart">
                                            <label>Địa chỉ </label>
                                            <textarea name="address" id="" style="width: 100%;" rows="2"
                                                required>{{session('user')->address}}</textarea>
                                        </div>
                                        <a href="" class="option-address"><i class="fas fa-arrow-right"></i> Chọn địa
                                            chỉ khác</a>
                                        <div class="form-group-cart">
                                            <label>Thời gian giao hàng</label>
                                            <input name="timeorder" type="datetime-local" class="form-control input-lg"
                                                required />
                                        </div>
                                        <div class="form-group-cart">
                                            <label>Lời nhắn</label>
                                            <textarea name="message" id="" style="width: 100%;" rows="2"
                                                placeholder="Viết lời nhắn của bạn..."></textarea>
                                        </div>
                                        <div>
                                            <div class="buttons">
                                                <button class="blob-btn" type="submit">
                                                    THANH TOÁN
                                                    <span class="blob-btn__inner">
                                                        <span class="blob-btn__blobs">
                                                            <span class="blob-btn__blob"></span>
                                                            <span class="blob-btn__blob"></span>
                                                            <span class="blob-btn__blob"></span>
                                                            <span class="blob-btn__blob"></span>
                                                        </span>
                                                    </span>
                                                </button>
                                                <br />

                                                <svg style="display: none" xmlns="http://www.w3.org/2000/svg"
                                                    version="1.1">
                                                    <defs>
                                                        <filter id="goo">
                                                            <feGaussianBlur in="SourceGraphic" result="blur"
                                                                stdDeviation="10"></feGaussianBlur>
                                                            <feColorMatrix in="blur" mode="matrix"
                                                                values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7"
                                                                result="goo"></feColorMatrix>
                                                            <feBlend in2="goo" in="SourceGraphic" result="mix">
                                                            </feBlend>
                                                        </filter>
                                                    </defs>
                                                </svg>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('assests/js/user/cart.js')}}"></script>
</body>

</html>