@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="{{asset("/assests/css/admin/admin.post.css")}}">
@endsection
@section('content')
<div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Quản lý đơn hàng</h4>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>STT </th>
                  <th>Thông tin nhận hàng</th>
                  <th>Số sản phẩm</th>
                  <th>Lời nhắn</th>
                  <th>Thành tiền</th>
                  <th>Trạng thái</th>
                  <th>Shipper</th>
                  <th>Xem chi tiết</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($orders as $index=>$order)
                    <tr>
                        <td style="text-align: center">{{$index + 1}}</td>
                        <td>
                            <div class="new-order">Người nhận: {{$order->receiver_name}}</div>
                            <div class="new-order">Số điện thoại: {{$order->phone}}</div>
                            <div class="new-order">Thời gian nhận hàng: {{ \Carbon\Carbon::parse($order->timeorder)->format('H:i:s d/m/Y')}}</div>
                        </td>
                        <td style="text-align: center">{{$order->details->count()}}</td>
                        <td>{{$order->message}}</td>
                        <td>{{number_format($order->total)}}</td>
                        <td style="text-align: center">
                            @switch($order->status_id)
                                @case(1)
                                    Đã đặt hàng
                                    @break
                                @case(2)
                                    Đang giao
                                    @break
                                @case(3)
                                    Đã giao
                                    @break
                                @case(4)
                                    Đã hủy
                                    @break
                                @default
                                
                            @endswitch
                            <br>
                            @if ($order->status_id ==1 || $order->status_id==2)
                            <a href="{{URL::to('admin/order/next-status/'.$order->id)}}"><button type="button" style="margin-top: 10px;" class="btn btn-inverse-primary btn-rounded btn-icon"><i class="mdi mdi-skip-next"></i></button></a>
                            @endif
                        </td>
                        <td>{{$order->shipper_id}}</td>
                        <td style="text-align: center">
                            <a href="{{URL::to('admin/order/detail/'.$order->id)}}"><button type="button" class="btn btn-inverse-info btn-icon"><i class="mdi mdi-eye"></i></button></a>
                        </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div>
            {{$orders->links("pagination::bootstrap-4")}}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection