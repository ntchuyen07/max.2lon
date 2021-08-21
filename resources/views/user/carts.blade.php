@extends('layouts.user')
@section('style')
<link rel="stylesheet" href="../resources/css/carts.css">
@endsection

@section('title','Giỏ hàng của tôi')

@section('content')
    <div class="container-fuild cont-cart">
        <div class="row">
            <div class="col-md-8">
                <div><span class="title">Giỏ hàng</span><span class="number-item">(2 sản phẩm)</span></div>
                <div class="row properties">
                    <div class="col-md-5">Sản phẩm</div>
                    <div class="col-md-2">Đơn giá</div>
                    <div class="col-md-3">Số lượng</div>
                    <div class="col-md-2">Thành tiền</div>
                </div>
                <div class="row item-product">
                    <div class="col-md-5 intro-item">
                        <div class="check-item"><input type="checkbox"></div>
                        <img class="image-item" src="https://cdn.tgdd.vn/2021/04/content/8-800x450.jpg" alt="">
                        <div>
                            <div><span class="name-item">Cút lộn xào me</span></div>
                            <div><a href="" class="del-item"><span class="far fa-trash-alt"></span> Xóa sản phẩm</a></div>
                        </div>
                    </div>
                    <div class="col-md-2"><span><sup><ins>đ</ins></sup>20.000</span></div>
                    <div class="col-md-3">
                        <div class="buttons_added">
                            <input class="minus is-form" type="button" value="-">
                            <input aria-label="quantity" class="input-qty" max="20" min="1" name="" type="number" value="1">
                            <input class="plus is-form" type="button" value="+">
                        </div>
                    </div>
                    <div class="col-md-2"><span class="total-item"><sup><ins>đ</ins></sup><b>20.000</b></span></div>
                </div>
                <div class="row item-product">
                    <div class="col-md-5 intro-item">
                        <input type="checkbox">
                        <img class="image-item" src="http://www.monngonplus.vn/images/1/1-001-mon-trang-mieng-ngon-me-ly-tu-xoai-va-dua_1556782795.jpg" alt="">
                        <div>
                            <div><span class="name-item">Panna Cotta Xoài</span></div>
                            <div><a href="" class="del-item"><span class="far fa-trash-alt"></span> Xóa sản phẩm</a></div>
                        </div>
                    </div>
                    <div class="col-md-2"><span><sup><ins>đ</ins></sup>35.000</span></div>
                    <div class="col-md-3">
                        <div class="buttons_added">
                            <input class="minus is-form" type="button" value="-">
                            <input aria-label="quantity" class="input-qty" max="20" min="1" name="" type="number" value="1">
                            <input class="plus is-form" type="button" value="+">
                        </div>
                    </div>
                    <div class="col-md-2"><span class="total-item"><sup><ins>đ</ins></sup><b>35.000</b></span></div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <a href="" class="keepbuy"><span class="fas fa-arrow-circle-left"></span> Tiếp tục mua hàng</a>
                    </div>
                    <div class="col-md-7">
                        <div class="total-prices">Tổng thanh toán (0 sản phẩm): <span class="total">0<sup><ins>đ</ins></sup></span></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="checkout">
                    <div class="date-checkout">
                        <div>Gửi đến</div>
                        <div>
                            <form action="">
                                <select name="" id="" class="address">
                                    <option value="">Chọn địa chỉ huyện/ thành phố, xã/ phường</option>
                                </select>
                                <input type="text" placeholder="Địa chỉ cụ thể" class="address">
                            </form>
                        </div>
                    </div>
                    <div class="date-checkout">
                        <div>Thời gian giao hàng</div>
                        <div class="row">
                            <div class="col-md-7">
                                <input type="date" class="date-check">
                            </div>
                            <div class="col-md-5">
                                <input type="time" class="date-check">
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="" class="btn-checkout">Đặt Ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../resources/js/carts.js"></script>
@endsection