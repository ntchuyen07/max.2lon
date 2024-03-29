@extends('layouts.admin')

@section('style')
  <link rel="stylesheet" href="{{ asset('assests/css/admin/admin.product.css') }}">
@endsection
@section('content')
  <div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Quản lý sản phẩm</h4>
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên sản phẩm </th>
                  <th>Hình ảnh</th>
                  <th>Mô tả </th>
                  <th>Giá </th>
                  <th>Số lượng </th>
                  <th>Danh mục </th>
                  <th>Giảm giá </th>
                  <th> Chỉnh sửa </th>
                  <th> Hoạt động </th>
                  <th> Xóa </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $index => $product)
                  <tr>
                    <td  >{{ $index + 1 }}</td>
                    <td>
                      {{ $product->name }}
                    </td>
                    <td><img src="{{asset($product->image)}}" alt=""></td>
                    <td> <div class="desc-product">{!! $product->description !!} </div></td>
                    <td>
                      {{ $product->price }}
                    </td>
                    <td>
                      {{ $product->amount }}
                    </td>
                    <td>
                      {{ $product->category }}
                    </td>
                    <td>
                      {{ $product->discount }}
                    </td>
                    <td>
                      <a href="{{URL::to('admin/product/edit/'.$product->id)}}"><button type="button" class="btn btn-inverse-info btn-icon"><i class="mdi mdi-eraser-variant"></i></button></a>
                    </td>
                    <td></td>
                    <td><button type="button" class="btn btn-inverse-danger btn-icon"><i class="mdi mdi-delete-forever"></i></button></td>
                </tr> 
                @endforeach
              </tbody>
            </table>
            <div class="d-flex justify-content-center">{!! $products->links("pagination::bootstrap-4") !!}</div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection