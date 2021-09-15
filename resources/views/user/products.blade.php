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
                    <div>
                        <input type="text" placeholder="Nhập món ăn bạn muốn tìm..." class="input">
                    </div>
                    <div class="sort-price">
                        <div class="btn-title">Tìm kiếm theo giá</div>
                        <div class="slidecontainer">
                            <input type="range" min="0" max="500" id="range-price" class="slider" value="250">
                            <div class="show-price">Từ: 0 vnđ đến <span class="price" id="price"></span>.000 vnđ</div>
                            <script src="../resources/js/products.js"></script>
                        </div>
                    </div>
                    <div class="list-category">
                        <div><input type="button" class="btn-title" data-toggle="collapse" data-target="#myCollapsible" value="Danh mục sản phẩm"></div>
                        <div id="myCollapsible" class="collapse show">
                            <div class="check-cate"><input type="checkbox" value="thức ăn" class="check-category"><label class="name-category">Thức ăn</label></div>
                            <div class="check-cate"><input type="checkbox" value="thức ăn" class="check-category"><label class="name-category">Đồ uống</label></div>
                            <div class="check-cate"><input type="checkbox" value="thức ăn" class="check-category"><label class="name-category">Tráng miệng</label></div>
                            <div class="check-cate"><input type="checkbox" value="thức ăn" class="check-category"><label class="name-category">Giảm giá</label></div>
                            <div class="check-cate"><input type="checkbox" value="thức ăn" class="check-category"><label class="name-category">Khác</label></div>
                        </div>
                    </div>
                    <div class="list-category">
                        <div><input type="button" class="btn-title" data-toggle="collapse" data-target="#food" value="Đánh giá của người dùng"></div>
                        <div id="food" class="collapse show">
                            <div class="check-cate"><input type="checkbox" value="thức ăn" class="check-category">
                                <label class="name-category">
                                    <span class="fas fa-star"></span>
                                    <span class="far fa-star"></span>
                                    <span class="far fa-star"></span>
                                    <span class="far fa-star"></span>
                                    <span class="far fa-star"></span>
                                </label>
                            </div>
                            <div class="check-cate"><input type="checkbox" value="thức ăn" class="check-category">
                                <label class="name-category">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="far fa-star"></span>
                                    <span class="far fa-star"></span>
                                    <span class="far fa-star"></span>
                                </label>
                            </div>
                            <div class="check-cate"><input type="checkbox" value="thức ăn" class="check-category">
                                <label class="name-category">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="far fa-star"></span>
                                    <span class="far fa-star"></span>
                                </label>
                            </div>
                            <div class="check-cate"><input type="checkbox" value="thức ăn" class="check-category">
                                <label class="name-category">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="far fa-star"></span>
                                </label>
                            </div>
                            <div class="check-cate"><input type="checkbox" value="thức ăn" class="check-category">
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
                    <div class="list-category">
                        <div><input type="button" class="btn-title" data-toggle="collapse" data-target="#type" value="Phân loại"></div>
                        <div id="type" class="collapse show">
                            <div class="check-cate"><input type="checkbox" value="thức ăn" class="check-category"><label class="name-category">Món gà</label></div>
                            <div class="check-cate"><input type="checkbox" value="thức ăn" class="check-category"><label class="name-category">Hải sản</label></div>
                            <div class="check-cate"><input type="checkbox" value="thức ăn" class="check-category"><label class="name-category">Trái cây</label></div>
                            <div class="check-cate"><input type="checkbox" value="thức ăn" class="check-category"><label class="name-category">Bánh</label></div>
                            <div class="check-cate"><input type="checkbox" value="thức ăn" class="check-category"><label class="name-category">Đồ uống có cồn</label></div>
                            <div class="check-cate"><input type="checkbox" value="thức ăn" class="check-category"><label class="name-category">Đồ uống có ga</label></div>
                            <div class="check-cate"><input type="checkbox" value="thức ăn" class="check-category"><label class="name-category">Đồ uống thiên nhiên</label></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row button-function">
                        <button class="btn-function"><span class="fas fa-th-list"></span></button>
                        <button class="btn-function"><span class="fas fa-th"></span></button>
                        <select name="amount" id="amount" class="btn-function">
                            <option value="6">6</option>
                            <option value="9">9</option>
                            <option value="12" selected>12</option>
                            <option value="15">15</option>
                        </select>
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
                                        <div class="name-product price-product"><sup><ins>đ</ins></sup> {{$product->price}}.000</div>
                                    </div>
                                </a>
                            </div>
                            <div style="margin-top: -50px;text-align: center">
                                <button class="btn-add" style="margin-top: -30px;"><span class="fas fa-cart-plus"></span></button>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div>
                        <div class="pagination">
                            <a href="#">&laquo;</a>
                            <a href="#" class="active">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                            <a href="#">6</a>
                            <a href="#">&raquo;</a>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection