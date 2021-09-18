@extends('layouts.admin')

@section('style')
@endsection
@section('content')
  <div class="row">
    <div class="col-12 grid-margin">
      <div class="card border-success"  style="width: 60%; margin: 20px; margin-left: 32px;" >
        <div class="card-header"><b>Thay đổi sản phẩm</b></div>
        <div class="card-body text-success">
          <form id="create-category-form" method="post" action="{{ URL::to('admin/product/update') }}" enctype="multipart/form-data" >
            {{ csrf_field() }}
            <input type="text" name="id" value="{{$product->id}}" style="display: none;">
            <div class="form-group">
              <label for="name"><b>Tên sản phẩm (*)</b></label>
              <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" value="{{$product->name}}" placeholder="Tên sản phẩm" required>
            </div>
            <div class="form-group">
              <label for="name"><b>Hình ảnh sản phẩm (*)</b></label>
                <div class="d-flex align-items-center list-image-product">
                    @foreach ($images as $image)
                        <div>
                            <img src="{{asset($image->path)}}" alt="" class="image-product">
                        </div>
                    @endforeach
                </div>
              <input type="file" name="image[]" multiple class="form-control" id="image">
            </div>
            <div class="form-group">
              <label for="description"><b>Mô tả sản phẩm (*)</b></label>
              <textarea name="description" class="form-control" id="description" id="" cols="30" rows="10" placeholder="Mô tả sản phẩm">{!!$product->description!!}</textarea>
              <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
              <script>
                CKEDITOR.replace('description');
            </script>
            </div>
            <div class="form-group">
              <label for="price"><b>Giá (*)</b></label>
              <input type="text" name="price" class="form-control" id="price" value="{{$product->price}}" placeholder="Giá">
            </div>
            <div class="form-group">
              <label for="amount"><b>Số lượng (*)</b></label>
              <input type="number" name="amount" class="form-control" id="amount" value="{{$product->amount}}" placeholder="Số lượng sản phẩm">
            </div>
            <div class="form-group">
              <label for="category"><b>Danh mục (*)</b></label>
              <select name="category_id" id="category" class="form-control">
                @foreach ($categories as $category)
                    @if ($category->id == $product->category_id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>   
                    @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>   
                    @endif
                @endforeach
              </select>
            </div>
            <div class="text-right">
              <button type="submit" class="btn btn-success">Cập nhật</button>
            </div>
            <div class="form-group">
              <label for="discount"><b>Giảm giá</b></label>
              <input type="text" name="discount" class="form-control" id="discount" title="Có thể điền theo phần trăm(10%) hoặc theo số tiền (20000VND)" value="{{$product->discount}}" placeholder="Giảm giá">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <button id="open-modal-btn" type="button" class="btn d-none" data-toggle="modal" data-target="#exampleModal">Cập nhật</button>
  <div class="modal" id="exampleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
          <strong id="model-title" >Cập nhật thông tin sản phẩm thành công!</strong>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
    </div>
  </div>
  @if (session('product-status'))
    <script>
      $('#open-modal-btn').click();
    </script>
  @endif
@endsection

@section('js')
    {{-- <script src="{{ asset('assests/js/admin/createProduct.admin.js') }}" ></script> --}}
@endsection