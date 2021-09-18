@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="{{asset('/assests/css/admin/admin.dashboard.css')}}">
@endsection

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
          <i class="mdi mdi-home"></i>
        </span> Dashboard
      </h3>
      
    </div>
    <div class="row">
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-danger card-img-holder text-white">
          <div class="card-body">
            <img src="{{ asset('adminTemplate/assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3">Người dùng <i class="mdi mdi-account mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5">{{$users->count()}}</h2>
            <h6 class="card-text">Tăng 60%</h6>
          </div>
        </div>
      </div>
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-info card-img-holder text-white">
          <div class="card-body">
            <img src="{{ asset('adminTemplate/assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3">Đơn đặt hàng <i class="mdi mdi-cart mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5">{{$orders->count()}}</h2>
            <h6 class="card-text">Tăng 10%</h6>
          </div>
        </div>
      </div>
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-success card-img-holder text-white">
          <div class="card-body">
            <img src="{{ asset('adminTemplate/assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3">Bài viết <i class="mdi mdi-clock-fast mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5">{{$posts->count()}}</h2>
            <h6 class="card-text">Tăng 5%</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="row" id="proBanner">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <h5 class="card-title float-left">Đơn hàng mới nhất</h5>
              <a href="" class="btn btn-success ml-auto">Xác nhận</a>
            </div>
            @foreach ($orders as $index=>$order)
                @if ($index==0 && $order->status_id ==1)
                <div>
                  <p class="new-order">Người nhận: {{$order->receiver_name}} - {{$order->phone}}</p>
                  <p class="new-order">Địa chỉ nhận hàng: {{$order->address}}</p>
                  <p class="new-order">Thời gian nhận hàng dự kiến:  {{ \Carbon\Carbon::parse($order->timeorder)->format('H:i:s d/m/Y')}}</p>
                  <p class="new-order">Lời nhắn: {{$order->message}}</p>
                  <table class="table">
                    <tr>
                      <th>STT</th>
                      <th>Tên sản phẩm</th>
                      <th>Số lượng</th>
                      <th>Đơn giá</th>
                      <th>Tổng tiền</th>
                    </tr>
                    @foreach ($order->details as $index=>$detail)
                      <tr>
                        <td>{{$index +1}}</td>
                        <td>{{$detail->name}}</td>
                        <td>{{$detail->amount}}</td>
                        <td>{{number_format($detail->price)}}</td>
                        <td>{{number_format($detail->amount*$detail->price)}}</td>
                      </tr>
                    @endforeach
                    <tr>
                      <th colspan="4">Tổng thanh toán</th>
                      <th class="text-danger">{{number_format($order->total)}}</th>
                    </tr>
                  </table>
                </div>
                @endif
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-7 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="clearfix">
              <h4 class="card-title float-left">Đơn hàng</h4>
              <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-right"></div>
            </div>
            <canvas id="visit-sale-chart" class="mt-4"></canvas>
          </div>
        </div>
      </div>
      <div class="col-md-5 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Độ tuổi người dùng</h4>
            <canvas id="traffic-chart"></canvas>
            <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-7 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Sản phẩm bán chạy gần đây</h4>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th> STT </th>
                    <th> Tên món </th>
                    <th> Giá </th>
                    <th> Tỷ lệ </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> 1 </td>
                    <td> Soda Trái cây </td>
                    <td> 35.000 </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 34%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td> 2 </td>
                    <td> Gà hấp mắm nhĩ </td>
                    <td> 270.000 </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 25%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td> 3 </td>
                    <td> Trà sữa Trân châu </td>
                    <td> 45.000 </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 20%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td> 4 </td>
                    <td> Gà chiên mắm </td>
                    <td> 240.000 </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: 15%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td> 5 </td>
                    <td> Bánh Sakura </td>
                    <td> 25.000 </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 9%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td> 6 </td>
                    <td> Panna Cotta Xoài </td>
                    <td> 40.000 </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 5%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title text-black">Voucher</h4>
            <div class="add-items d-flex">
              <input type="text" class="form-control todo-list-input" placeholder="Voucher cho hôm nay">
              <button class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn" id="add-task">THÊM</button>
            </div>
            <div class="list-wrapper">
              <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox"> Giảm 5% cho các món gà </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox"> Free ship khu vực Đông Hà </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox"> Tặng voucher 100.000đ cho hóa đơn trên 1.000.000đ </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox"> Mã VC21467G1A giảm tối đa 50.000 cho bất cứ hóa đơn nào </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox"> Mã GF608327V1A giảm tối đa 50.000 cho các món gà </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox"> Tặng kèm hai lon Tiger cho 100 hóa đơn đầu tiên </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Quản lý người dùng</h4>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Người dùng </th>
                    <th> Email </th>
                    <th> Quyền truy cập </th>
                    <th> Số điện thoại </th>
                    <th> Hoạt động </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $index=>$user)
                  <tr>
                    <td>
                      <img src="{{ asset($user->avatar) }}" class="mr-2" alt="image"> {{$user->name}}
                    </td>
                    <td> {{$user->email}}</td>
                    <td>
                      @switch($user->role)
                          @case(1)
                              <label class="badge badge-success">Thành viên</label>
                              @break
                          @case(2)
                              <label class="badge badge-danger">Quản trị viên</label>
                              @break
                          @case(3)
                              <label class="badge badge-info">Shipper</label>
                              @break
                          @case(4)
                              <label class="badge badge-warning">VIP</label>
                              @break
                          @default
                              
                      @endswitch
                    </td>
                    <td> {{$user->phone}} </td>
                    <td> WD-12345 </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Bài viết mới nhất</h4>
            @foreach ($posts as $index=>$post)
                @if ($index==0)
                <div class="d-flex">
                  <div class="d-flex align-items-center mr-4 text-muted font-weight-light">
                    <i class="mdi mdi-account-outline icon-sm mr-2"></i>
                    <span>{{$post->name}}</span>
                  </div>
                  <div class="d-flex align-items-center text-muted font-weight-light">
                    <i class="mdi mdi-clock icon-sm mr-2"></i>
                    <span>{{$post->created_at ->format('H:i:s d-m-Y')}}</span>
                  </div>
                </div>
                <div class="row mt-3">
                    <img src="{{ asset($post->path) }}" class="mw-100 w-100 rounded" alt="image">
                </div>
                <div class="d-flex mt-5 align-items-top">
                  <img src="{{ asset('adminTemplate/assets/images/faces/face3.jpg') }}" class="img-sm rounded-circle mr-3" alt="image">
                  <div class="mb-0 flex-grow">
                    <h5 class="mr-2 mb-2">{{$post->title}}</h5>
                    <div class="mb-0 font-weight-light content-post-dashboard">{!!$post->content!!}</div>
                  </div>
                  <div class="ml-auto">
                    <button class="btn btn-success">Duyệt</button>
                  </div>
                </div>
                @endif
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection