@extends('layouts.admin')

@section('style')
@endsection
@section('content')
  <div class="row">
    <div class="col-12 grid-margin">
      <div class="card border-success"  style="width: 60%; margin: 20px; margin-left: 32px;" >
        <div class="card-header"><b>Thêm sản phẩm mới</b></div>
        <div class="card-body text-success">
          <form id="create-category-form" method="post" action="{{ URL::to('admin/category/store') }}">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="name"><b>Tên sản phẩm (*)</b></label>
              <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Tên danh mục" required>
            </div>
            <div class="form-group">
              <label for="description"><b>Mô tả sản phẩm (*)</b></label>
              <input type="text" name="description" class="form-control" id="description" placeholder="Mô tả sản phẩm">
            </div>
            <div class="form-group">
              <label for="price"><b>Giá (*)</b></label>
              <input type="text" name="price" class="form-control" id="price" placeholder="Giá">
            </div>
            <div class="form-group">
              <label for="amount"><b>Số lượng (*)</b></label>
              <input type="text" name="amount" class="form-control" id="amount" placeholder="Số lượng">
            </div>
            <div class="form-group">
              <label for="category"><b>Danh mục (*)</b></label>
              <select name="category" id="category" class="form-control">
                @foreach ($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>   
                @endforeach
              </select>
            </div>
            <div class="text-right">
              <button type="submit" class="btn btn-success">Thêm mới</button>
            </div>
            <div class="form-group">
              <label for="amount"><b>Giảm giá</b></label>
              <input type="text" name="amount" class="form-control" id="amount" title="Có thể điền theo phần trăm(10%) hoặc theo số tiền (20000VND)" placeholder="Giảm giá">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <button id="open-modal-btn" type="button" class="btn d-none" data-toggle="modal" data-target="#exampleModal">Thêm mới</button>
  <div class="modal" id="exampleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
          <strong id="model-title" >Thêm mới sản phẩm thành công!</strong>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('js')
    <script src="{{ asset('assests/js/admin/createCategory.admin.js') }}" ></script>
@endsection