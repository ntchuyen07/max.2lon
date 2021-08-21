@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="../../resources/css/admin.user.css">
@endsection
@section('content')
  <div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Quản lý danh mục</h4>
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Tên danh mục </th>
                  <th>Mô tả </th>
                  <th> Chỉnh sửa </th>
                  <th> Hoạt động </th>
                  <th> Xóa </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td>
                      Thức ăn
                    </td>
                    <td> Gồm các món gà, cá, cơm,... </td>
                    <td>
                      <button type="button" class="btn btn-inverse-info btn-icon"><i class="mdi mdi-eraser-variant"></i></button>
                    </td>
                    <td></td>
                    <td><button type="button" class="btn btn-inverse-danger btn-icon"><i class="mdi mdi-delete-forever"></i></button></td>
                </tr>
                <tr>
                    <td>
                      Đồ uống
                    </td>
                    <td> Gồm đồ có cồn, có ga, nước ép từ trái cây, soda </td>
                    <td>
                      <button type="button" class="btn btn-inverse-info btn-icon"><i class="mdi mdi-eraser-variant"></i></button>
                    </td>
                    <td></td>
                    <td><button type="button" class="btn btn-inverse-danger btn-icon"><i class="mdi mdi-delete-forever"></i></button></td>
                </tr>
                <tr>
                    <td>
                      Bánh ngọt
                    </td>
                    <td> Bao gồm các loại bánh nướng, hấp,... </td>
                    <td>
                      <button type="button" class="btn btn-inverse-info btn-icon"><i class="mdi mdi-eraser-variant"></i></button>
                    </td>
                    <td></td>
                    <td><button type="button" class="btn btn-inverse-danger btn-icon"><i class="mdi mdi-delete-forever"></i></button></td>
                </tr>
                <tr>
                    <td>
                      Pudding
                    </td>
                    <td> Làm từ đậu nành </td>
                    <td>
                      <button type="button" class="btn btn-inverse-info btn-icon"><i class="mdi mdi-eraser-variant"></i></button>
                    </td>
                    <td></td>
                    <td><button type="button" class="btn btn-inverse-danger btn-icon"><i class="mdi mdi-delete-forever"></i></button></td>
                </tr>
                <tr>
                    <td>
                      Trái cây
                    </td>
                    <td> Các loại trái cây theo mùa </td>
                    <td>
                      <button type="button" class="btn btn-inverse-info btn-icon"><i class="mdi mdi-eraser-variant"></i></button>
                    </td>
                    <td></td>
                    <td><button type="button" class="btn btn-inverse-danger btn-icon"><i class="mdi mdi-delete-forever"></i></button></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection