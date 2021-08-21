@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="../../resources/css/admin.user.css">
@endsection
@section('content')
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
                <tr>
                  <td>
                    <img src="{{ asset('adminTemplate/assets/images/faces/face1.jpg') }}" class="mr-2" alt="image"> Anh Tuấn
                  </td>
                  <td> anhtuandeptrai@gmail.com </td>
                  <td>
                    <label class="badge badge-success">Thành viên</label>
                  </td>
                  <td> 0123456789 </td>
                  <td> WD-12345 </td>
                </tr>
                <tr>
                  <td>
                    <img src="{{ asset('adminTemplate/assets/images/faces/face2.jpg') }}" class="mr-2" alt="image"> Minh Tú
                  </td>
                  <td> minhtu2001@gmail.com </td>
                  <td>
                    <label class="badge badge-warning">VIP</label>
                  </td>
                  <td> 0123452017 </td>
                  <td> WD-12346 </td>
                </tr>
                <tr>
                  <td>
                    <img src="{{ asset('adminTemplate/assets/images/faces/face3.jpg') }}" class="mr-2" alt="image"> Nhật Nam
                  </td>
                  <td> greenbook.vku@gmail.com </td>
                  <td>
                    <label class="badge badge-info">Shipper</label>
                  </td>
                  <td> 0912345123 </td>
                  <td> WD-12347 </td>
                </tr>
                <tr>
                  <td>
                    <img src="{{ asset('adminTemplate/assets/images/faces/face4.jpg') }}" class="mr-2" alt="image"> Hoàng Hải
                  </td>
                  <td> hoanghai.max.2lon@gmail.com </td>
                  <td>
                    <label class="badge badge-danger">Quản trị viên</label>
                  </td>
                  <td> 1234567321 </td>
                  <td> WD-12348 </td>
                </tr>
                <tr>
                    <td>
                      <img src="{{ asset('adminTemplate/assets/images/faces/face1.jpg') }}" class="mr-2" alt="image"> Anh Tuấn
                    </td>
                    <td> anhtuandeptrai@gmail.com </td>
                    <td>
                      <label class="badge badge-success">Thành viên</label>
                    </td>
                    <td> 0123456789 </td>
                    <td> WD-12345 </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="{{ asset('adminTemplate/assets/images/faces/face2.jpg') }}" class="mr-2" alt="image"> Minh Tú
                    </td>
                    <td> minhtu2001@gmail.com </td>
                    <td>
                      <label class="badge badge-warning">VIP</label>
                    </td>
                    <td> 0123452017 </td>
                    <td> WD-12346 </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="{{ asset('adminTemplate/assets/images/faces/face3.jpg') }}" class="mr-2" alt="image"> Nhật Nam
                    </td>
                    <td> greenbook.vku@gmail.com </td>
                    <td>
                      <label class="badge badge-info">Shipper</label>
                    </td>
                    <td> 0912345123 </td>
                    <td> WD-12347 </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="{{ asset('adminTemplate/assets/images/faces/face4.jpg') }}" class="mr-2" alt="image"> Hoàng Hải
                    </td>
                    <td> hoanghai.max.2lon@gmail.com </td>
                    <td>
                      <label class="badge badge-danger">Quản trị viên</label>
                    </td>
                    <td> 1234567321 </td>
                    <td> WD-12348 </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="{{ asset('adminTemplate/assets/images/faces/face1.jpg') }}" class="mr-2" alt="image"> Anh Tuấn
                    </td>
                    <td> anhtuandeptrai@gmail.com </td>
                    <td>
                      <label class="badge badge-success">Thành viên</label>
                    </td>
                    <td> 0123456789 </td>
                    <td> WD-12345 </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="{{ asset('adminTemplate/assets/images/faces/face2.jpg') }}" class="mr-2" alt="image"> Minh Tú
                    </td>
                    <td> minhtu2001@gmail.com </td>
                    <td>
                      <label class="badge badge-warning">VIP</label>
                    </td>
                    <td> 0123452017 </td>
                    <td> WD-12346 </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="{{ asset('adminTemplate/assets/images/faces/face3.jpg') }}" class="mr-2" alt="image"> Nhật Nam
                    </td>
                    <td> greenbook.vku@gmail.com </td>
                    <td>
                      <label class="badge badge-info">Shipper</label>
                    </td>
                    <td> 0912345123 </td>
                    <td> WD-12347 </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="{{ asset('adminTemplate/assets/images/faces/face4.jpg') }}" class="mr-2" alt="image"> Hoàng Hải
                    </td>
                    <td> hoanghai.max.2lon@gmail.com </td>
                    <td>
                      <label class="badge badge-danger">Quản trị viên</label>
                    </td>
                    <td> 1234567321 </td>
                    <td> WD-12348 </td>
                  </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection