<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/products.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    @extends('layouts.user')
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
                        <div class="col-md-4">
                            <div class="product-item">
                                <div class="intro-item">
                                    <div class="price-product"><del class="del-price">20.000</del><span>14.000</span></div>
                                    <div class="sale-product">-30%</div>
                                    <img class="img-product" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_p_Dsp14cX2DkdQNWW8UjTmRKeHoKJj6_E1SVjEV72ixTfcFlcCDqDTpaaePtLo189BA&usqp=CAU" alt="">
                                    <div class="intro-product">
                                        <div class="name-product">Bánh Khoái</div>
                                        <div class="desc-product">Sản phẩm là sự kết hợp giữa vị giòn của vỏ bánh, vị ngọt của tôm, thịt và vị béo ngậy của nước chấm</div>
                                    </div>
                                </div>
                                <div class="desc-item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button class="btn-add"><span class="fas fa-cart-plus"></span></button>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="rate-product">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="far fa-star"></span>
                                            </div>
                                            <div class="rate-product">
                                                <span>35 đánh giá</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-item">
                                <div class="intro-item">
                                    <div class="price-product"><span>20.000</span></div>
                                    <img class="img-product" src="https://ik.imagekit.io/tvlk/blog/2017/01/30-mon-ngon-nuc-long-nhat-dinh-phai-thu-khi-toi-ha-noi-phan-1.jpg" alt="">
                                    <div class="intro-product">
                                        <div class="name-product">Phở bò</div>
                                        <div class="desc-product">Sản phẩm là sự kết hợp giữa vị giòn của vỏ bánh, vị ngọt của tôm, thịt và vị béo ngậy của nước chấm</div>
                                    </div>
                                </div>
                                <div class="desc-item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button class="btn-add"><span class="fas fa-cart-plus"></span></button>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="rate-product">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="far fa-star"></span>
                                            </div>
                                            <div class="rate-product">
                                                <span>35 đánh giá</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-item">
                                <div class="intro-item">
                                    <div class="price-product"><span>20.000</span></div>
                                    <img class="img-product" src="https://i.pinimg.com/736x/91/0c/a6/910ca6595e0b3fcc268ab3295a5cf118.jpg" alt="">
                                    <div class="intro-product">
                                        <div class="name-product">Bạch tuộc xào cay</div>
                                        <div class="desc-product">Sản phẩm là sự kết hợp giữa vị giòn của vỏ bánh, vị ngọt của tôm, thịt và vị béo ngậy của nước chấm</div>
                                    </div>
                                </div>
                                <div class="desc-item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button class="btn-add"><span class="fas fa-cart-plus"></span></button>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="rate-product">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="far fa-star"></span>
                                            </div>
                                            <div class="rate-product">
                                                <span>35 đánh giá</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-item">
                                <div class="intro-item">
                                    <div class="price-product"><span>20.000</span></div>
                                    <img class="img-product" src="https://vntrip.cdn.vccloud.vn/cam-nang/wp-content/uploads/2017/07/anh27.jpg" alt="">
                                    <div class="intro-product">
                                        <div class="name-product">Bún đậu mắm tôm</div>
                                        <div class="desc-product">Sản phẩm là sự kết hợp giữa vị giòn của vỏ bánh, vị ngọt của tôm, thịt và vị béo ngậy của nước chấm</div>
                                    </div>
                                </div>
                                <div class="desc-item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button class="btn-add"><span class="fas fa-cart-plus"></span></button>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="rate-product">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="far fa-star"></span>
                                            </div>
                                            <div class="rate-product">
                                                <span>35 đánh giá</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-item">
                                <div class="intro-item">
                                    <div class="price-product"><span>20.000</span></div>
                                    <img class="img-product" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJPnSKvm1mBKKEfEl2H8I4fjzJynUspyeKpR9lK88AmzDjk6tK35dLMYXjEfDmYcD4t9Q&usqp=CAU" alt="">
                                    <div class="intro-product">
                                        <div class="name-product">Nem lụi</div>
                                        <div class="desc-product">Sản phẩm là sự kết hợp giữa vị giòn của vỏ bánh, vị ngọt của tôm, thịt và vị béo ngậy của nước chấm</div>
                                    </div>
                                </div>
                                <div class="desc-item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button class="btn-add"><span class="fas fa-cart-plus"></span></button>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="rate-product">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="far fa-star"></span>
                                            </div>
                                            <div class="rate-product">
                                                <span>35 đánh giá</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-item">
                                <div class="intro-item">
                                    <div class="price-product"><span>20.000</span></div>
                                    <img class="img-product" src="https://cdn.tgdd.vn/2021/04/content/8-800x450.jpg" alt="">
                                    <div class="intro-product">
                                        <div class="name-product">Cút lộn xào me</div>
                                        <div class="desc-product">Sản phẩm là sự kết hợp giữa vị giòn của vỏ bánh, vị ngọt của tôm, thịt và vị béo ngậy của nước chấm</div>
                                    </div>
                                </div>
                                <div class="desc-item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button class="btn-add"><span class="fas fa-cart-plus"></span></button>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="rate-product">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="far fa-star"></span>
                                            </div>
                                            <div class="rate-product">
                                                <span>35 đánh giá</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-item">
                                <div class="intro-item">
                                    <div class="price-product"><span>20.000</span></div>
                                    <img class="img-product" src="https://emoi.vn/wp-content/uploads/2018/11/chan-ga-ngam-sa-tac.jpeg" alt="">
                                    <div class="intro-product">
                                        <div class="name-product">Chân gà sả tắc</div>
                                        <div class="desc-product">Sản phẩm là sự kết hợp giữa vị giòn của vỏ bánh, vị ngọt của tôm, thịt và vị béo ngậy của nước chấm</div>
                                    </div>
                                </div>
                                <div class="desc-item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button class="btn-add"><span class="fas fa-cart-plus"></span></button>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="rate-product">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="far fa-star"></span>
                                            </div>
                                            <div class="rate-product">
                                                <span>35 đánh giá</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-item">
                                <div class="intro-item">
                                    <div class="price-product"><span>20.000</span></div>
                                    <img class="img-product" src="https://images.foody.vn/res/g23/229738/prof/s576x330/foody-upload-api-foody-mobile-69-201105153928.jpg" alt="">
                                    <div class="intro-product">
                                        <div class="name-product">Trà sữa Trân châu</div>
                                        <div class="desc-product">Sản phẩm là sự kết hợp giữa vị giòn của vỏ bánh, vị ngọt của tôm, thịt và vị béo ngậy của nước chấm</div>
                                    </div>
                                </div>
                                <div class="desc-item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button class="btn-add"><span class="fas fa-cart-plus"></span></button>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="rate-product">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="far fa-star"></span>
                                            </div>
                                            <div class="rate-product">
                                                <span>35 đánh giá</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-item">
                                <div class="intro-item">
                                    <div class="price-product"><span>20.000</span></div>
                                    <img class="img-product" src="https://massageishealthy.com/wp-content/uploads/2017/07/mojito-la-gi-6.jpg" alt="">
                                    <div class="intro-product">
                                        <div class="name-product">Soda Phúc bồn tử</div>
                                        <div class="desc-product">Sản phẩm là sự kết hợp giữa vị giòn của vỏ bánh, vị ngọt của tôm, thịt và vị béo ngậy của nước chấm</div>
                                    </div>
                                </div>
                                <div class="desc-item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button class="btn-add"><span class="fas fa-cart-plus"></span></button>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="rate-product">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="far fa-star"></span>
                                            </div>
                                            <div class="rate-product">
                                                <span>35 đánh giá</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-item">
                                <div class="intro-item">
                                    <div class="price-product"><span>20.000</span></div>
                                    <img class="img-product" src="https://cdn.tgdd.vn/2021/01/content/3-800x500-34.jpg" alt="">
                                    <div class="intro-product">
                                        <div class="name-product">Soda Trái cây</div>
                                        <div class="desc-product">Sản phẩm là sự kết hợp giữa vị giòn của vỏ bánh, vị ngọt của tôm, thịt và vị béo ngậy của nước chấm</div>
                                    </div>
                                </div>
                                <div class="desc-item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button class="btn-add"><span class="fas fa-cart-plus"></span></button>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="rate-product">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="far fa-star"></span>
                                            </div>
                                            <div class="rate-product">
                                                <span>35 đánh giá</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-item">
                                <div class="intro-item">
                                    <div class="price-product"><span>20.000</span></div>
                                    <img class="img-product" src="https://toinayangi.vn/wp-content/uploads/2016/01/pudding-dau-nanh.jpg" alt="">
                                    <div class="intro-product">
                                        <div class="name-product">Pudding đậu nành</div>
                                        <div class="desc-product">Sản phẩm là sự kết hợp giữa vị giòn của vỏ bánh, vị ngọt của tôm, thịt và vị béo ngậy của nước chấm</div>
                                    </div>
                                </div>
                                <div class="desc-item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button class="btn-add"><span class="fas fa-cart-plus"></span></button>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="rate-product">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="far fa-star"></span>
                                            </div>
                                            <div class="rate-product">
                                                <span>35 đánh giá</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-item">
                                <div class="intro-item">
                                    <div class="price-product"><span>20.000</span></div>
                                    <img class="img-product" src="http://www.monngonplus.vn/images/1/1-001-mon-trang-mieng-ngon-me-ly-tu-xoai-va-dua_1556782795.jpg" alt="">
                                    <div class="intro-product">
                                        <div class="name-product">Panna Cotta Xoài</div>
                                        <div class="desc-product">Sản phẩm là sự kết hợp giữa vị giòn của vỏ bánh, vị ngọt của tôm, thịt và vị béo ngậy của nước chấm</div>
                                    </div>
                                </div>
                                <div class="desc-item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button class="btn-add"><span class="fas fa-cart-plus"></span></button>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="rate-product">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="far fa-star"></span>
                                            </div>
                                            <div class="rate-product">
                                                <span>35 đánh giá</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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

</body>
</html>