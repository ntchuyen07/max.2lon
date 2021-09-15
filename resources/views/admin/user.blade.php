@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="../../resources/css/admin.user.css">
@endsection
@section('content')
<div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Quản lý người dùng (12 người dùng)</h4>
          <div>
            <button class="btn btn-success">Thành viên</button>
            <button class="btn btn-warning">VIP</button>
            <button class="btn btn-info">Shipper</button>
            <button class="btn btn-danger">Quản trị viên</button>
          </div>
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
@endsection