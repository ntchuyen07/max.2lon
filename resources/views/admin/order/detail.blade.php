@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="{{asset("/assests/css/admin/admin.post.css")}}">
    <link rel="stylesheet" href="{{ asset('assests/css/user/user.account.css') }}">
@endsection
@section('content')
<div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
            <div class="order-item">
                <div class="d-flex align-items-center header-order-item">
                    <div class="col-md-7">
                     <span>Mã vận đơn: </span><span class="code-order">M2LR012{{$order->id}}</span>
                    </div>
                    <div class="col-md-5">
                      <span class="rate-order">
                        CHƯA ĐÁNH GIÁ    
                        </span> <span class="status-order">
                        @switch($order->status_id)
                            @case(1)
                                Đã đặt hàng
                                @break
                            @case(2)
                                Đang giao hàng
                                @break
                            @case(3)
                                Giao hàng thành công
                                @break
                            @case(4)
                                Đã hủy đơn
                                @break
                                @default
                                
                        @endswitch      
                    |</span>
                    </div>
                </div>
                @foreach ($order->details as $detail)
                <div class="d-flex align-items-center">
                  <div class="col-md-9 d-flex align-items-center">
                    <div>
                      <img src="{{asset($detail->image)}}" alt="" class="image-order">
                    </div>
                    <div class="information-product-order">
                      <div class="name-product-order">
                        {{$detail->name}}
                      </div>
                      <div class="unit-price-order"><sup><ins>đ</ins></sup> {{number_format($detail->price)}}</div>
                      <div>x{{$detail->amount}}</div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <span class="total-product-order"><sup><ins>đ</ins></sup> {{number_format($detail->amount*$detail->price)}}</span>
                  </div>
                </div>
                @endforeach
                <div class="header-order-item">
                  <div class="d-flex align-items-center" style="padding-bottom: 30px">
                    <div class="col-md-7">
                      {{$order->details->count()}} sản phẩm
                    </div>
                    <div class="col-md-5 " style="text-align: right;">
                      <span><i class="mdi mdi-currency-usd icon-price-order"></i>Tổng số tiền:</span>
                      <span class="price-total-order"><sup><ins>đ</ins></sup> {{number_format($order->total)}}</span>
                    </div>
                  </div>
                </div>
              </div>
        </div>
      </div>
    </div>
  </div>
@endsection