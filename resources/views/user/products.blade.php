    @extends('layouts.user')
    @section('title','Thực đơn')
    @section('style')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assests/css/user/user.product.css')}}">
    @endsection
    @section('content')
        <div class="container-fuild list-products">
            <div class="row">
                <div class="col-md-3">
                    <div class="topic">Tìm kiếm
                        <div class="under_line"></div>
                    </div>
                    <form action="{{URL::to("/search-product")}}" method="GET">
                        <div class=" d-flex align-items-center justify-content-center">
                            {{-- <input type="text" name="id_cate" value="{{ $id_cate }}" hidden > --}}
                            <input name="name" type="text" placeholder="Nhập món ăn bạn muốn tìm..." class="input">
                            <button type="submit" class="submit-form"><i class="fas fa-search"></i></button>
                        </div>
                        <div class="sort-price">
                            <div class="btn-title">Tìm kiếm theo giá</div>
                            <div class="slidecontainer">
                                <input type="range" name="price" min="0" max="500000" id="range-price" class="slider" value="500000">
                                <div class="show-price">Từ: 0 vnđ đến <span class="price" id="price"></span> vnđ</div>
                            </div>
                        </div>
                        <div class="list-category">
                            <div><input type="button" class="btn-title" data-toggle="collapse" data-target="#myCollapsible" value="Danh mục sản phẩm"></div>
                            <div id="myCollapsible" class="collapse show">
                                @foreach ($categories as $category)
                                <div class="check-cate"><input type="checkbox" name="category[]" value="{{$category->id}}" class="check-category"><label class="name-category">{{$category->name}}</label></div>
                                @endforeach
                            </div>
                        </div>
                        <div class="list-category">
                            <div><input type="button" class="btn-title" data-toggle="collapse" data-target="#food" value="Đánh giá của người dùng"></div>
                            <div id="food" class="collapse show">
                                <div class="check-cate"><input type="checkbox" name="rate[]" value="1" class="check-category">
                                    <label class="name-category">
                                        <span class="fas fa-star"></span>
                                        <span class="far fa-star"></span>
                                        <span class="far fa-star"></span>
                                        <span class="far fa-star"></span>
                                        <span class="far fa-star"></span>
                                    </label>
                                </div>
                                <div class="check-cate"><input type="checkbox" name="rate[]" value="2" class="check-category">
                                    <label class="name-category">
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="far fa-star"></span>
                                        <span class="far fa-star"></span>
                                        <span class="far fa-star"></span>
                                    </label>
                                </div>
                                <div class="check-cate"><input type="checkbox" name="rate[]" value="3" class="check-category">
                                    <label class="name-category">
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="far fa-star"></span>
                                        <span class="far fa-star"></span>
                                    </label>
                                </div>
                                <div class="check-cate"><input type="checkbox" name="rate[]" value="4" class="check-category">
                                    <label class="name-category">
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="far fa-star"></span>
                                    </label>
                                </div>
                                <div class="check-cate"><input type="checkbox" name="rate[]" value="5" class="check-category">
                                    <label class="name-category">
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-9" style="margin-bottom: 30px;">
                    <div class="row button-function">
                        <button class="btn-function"><span class="fas fa-th-list"></span></button>
                        <button class="btn-function"><span class="fas fa-th"></span></button>
                        @if ($id_cate)
                            <form action="{{URL::to('/menu/'.$id_cate)}}" method="GET">
                        @else
                            <form action="{{ Request::getRequestUri() }}" method="GET">
                        @endif
                            <select name="amount" id="amount" class="btn-function" onchange="this.form.submit()">
                                <option value="6" <?php echo $amount == 6 ? 'selected' : ''; ?>>6</option>
                                <option value="9" <?php echo $amount == 9 ? 'selected' : ''; ?>>9</option>
                                <option value="12" <?php echo $amount == 12 ? 'selected' : ''; ?>>12</option>
                                <option value="15"<?php  echo$amount == 15 ? 'selected' : ''; ?>>15</option>
                            </select>
                        </form>
                    </div>
                    <div class="row">
                        @foreach ($products as $index=>$product)
                        <div class="col-md-4">
                            <div class="product-item">
                                <a href="{{URL::to('/product/'.$product->slug)}}">
                                    <div class="rate-product">
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="far fa-star"></span>
                                    </div>
                                    <div class="intro-item">
                                        <img class="img-product" src="{{ asset($product->image) }}" alt="">
                                    </div>
                                    <div class="intro-item">
                                        <div class="name-product">{{$product->name}}</div>
                                        <div class="desc-product">{!!$product->description!!}</div>
                                        <div class="name-product price-product"><sup><ins>đ</ins></sup> {{number_format($product->price)}}</div>
                                    </div>
                                </a>
                            </div>
                            <div class="button-add-cart">
                                <form class="add-cart-form" method="POST">
                                    {{ csrf_field() }}
                                    <input type="text" name="number" value="1" id="" style="display: none;">
                                    <input type="text" name="product_id" value="{{$product->id}}" id="" style="display: none;">
                                    <button class="btn-add" style="margin-top: -30px;" type="submit"><span class="fas fa-cart-plus"></span></button>
                                </form>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div>
                        {{ $products->links("pagination::bootstrap-4") }}
                    </div>
                </div>
            </div>
        </div>
        <button id="open-modal-btn" type="button" class="btn d-none" data-toggle="modal" data-target="#exampleModal">Thêm mới</button>
        <div class="modal" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                <strong id="model-title" >Thêm sản phẩm vào giỏ hàng thành công!</strong>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
            </div>
            </div>
        </div>
        <script src="{{asset('assests/js/user/add-to-cart.js')}}"></script>
        <script src="{{asset('assests/js/user/product.js')}}"></script>
    @endsection