    @extends('layouts.user')
    @section('title','Chi tiết sản phẩm')
    @section('style')
        <link rel="stylesheet" href="{{ asset('assests/css/user/user.detail-product.css')}}">
    @endsection
    @section('content')
        <div class="container-fuild detail-form">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-md-4">
                    <div class="intro-product">
                        <div class="name-product">{{$product->name}}</div>
                        <div class="statistics">
                            <div class="rate-product">
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                            </div>
                        </div>
                        <div class="description-product">{!!$product->description!!}</div>
                        <form class="add-cart-form" method="POST">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="col-md-6 price-product" style="border-right:2px solid rgb(182, 180, 180)"><sup><ins>đ</ins></sup> {{number_format($product->price)}}</div>
                                    <div class="buttons_added">
                                        <input type="text" name="product_id" value="{{$product->id}}" style="display: none">
                                        {{ csrf_field() }}
                                        <input class="minus is-form " style="cursor: pointer" type="button" value="-">
                                        <input aria-label="quantity" class="input-qty" max="{{$product->amount}}" min="1" name="number" type="number" value="1">
                                        <input class="plus is-form " style="cursor: pointer" type="button" value="+">
                                    </div>
                            </div>
                            <div class="buttons">
                                    <button class="blob-btn" type="submit">
                                        Thêm vào giỏ hàng
                                        <span class="blob-btn__inner">
                                          <span class="blob-btn__blobs">
                                            <span class="blob-btn__blob"></span>
                                            <span class="blob-btn__blob"></span>
                                            <span class="blob-btn__blob"></span>
                                            <span class="blob-btn__blob"></span>
                                          </span>
                                        </span>
                                    </button>
                                <br/>       
                              <svg style="display: none" xmlns="http://www.w3.org/2000/svg" version="1.1">
                                <defs>
                                  <filter id="goo">
                                    <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10"></feGaussianBlur>
                                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo"></feColorMatrix>
                                    <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                                  </filter>
                                </defs>
                              </svg>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="slide-img col-md-8 d-flex align-items-center justify-content-center">
                    <div class="col-md-6" style="text-align: center">
                        @foreach ($images as $index=>$image)
                        <div class="image-slide">
                            <img class="image-product" src="{{asset($image->path)}}" alt="">
                        </div>
                        @endforeach
                        <div class="d-flex align-items-center justify-content-center btn-next">
                            <a class="prev" style="cursor: pointer" onclick="plusSlides(-1)"><i class="fas fa-arrow-left"></i></a>
                            <a class="next" style="cursor: pointer" onclick="plusSlides(1)"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="slideshow">
                            @foreach ($images as $index=>$image)
                                @if ($index==0)
                                    <div class="list-image">
                                        <div class="home-review-food-left d-flex home-review-food-1 food-detail-slide">
                                            <div><img class="image-review-food item-image cursor" onclick="currentSlide({{$index+1}})" src="{{asset($image->path)}}" alt=""></div>
                                            <div class="name-review-food">{{$product->name}} {{$index+1}}</div>
                                        </div>
                                    </div>
                                @else
                                <div class="list-image">
                                    <div class="home-review-food-left d-flex home-review-food-3 food-detail-slide">
                                        <div><img class="image-review-food item-image cursor" onclick="currentSlide({{$index+1}})" src="{{asset($image->path)}}" alt=""></div>
                                        <div class="name-review-food">{{$product->name}} {{$index+1}}</div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fuild form-more-infor">
            <div class="row extends-intro">
                <div class="col-md-9">
                    <div class="row">
                        <ul class="nav nav-tabs" style="width: 98%;">
                            <li class="nav-item"><a class="nav-link" id="nav-link-review" data-toggle="tab" href="#review">ĐÁNH GIÁ CỦA KHÁCH HÀNG</a></li>
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#question">HỎI VÀ ĐÁP</a></li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="tab-content">
                            <div id="review" class="tab-pane fade">
                                <div class="intro-review">
                                    <div class="col-md-5">
                                        <div class="div-average">
                                            <span class="average-star">5.0</span>
                                            <div class="div-star">
                                                <span>/5</span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                            </div>
                                        </div>
                                        <div class="btn-showreview">
                                            <a href="" class="btn-show">Tất cả</a>
                                            <a href="" class="btn-show">5 sao (5)</a>
                                            <a href="" class="btn-show">4 sao (0)</a>
                                            <a href="" class="btn-show">3 sao (0)</a>
                                            <a href="" class="btn-show">2 sao (0)</a>
                                            <a href="" class="btn-show">1 sao (0)</a>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="progress-star">
                                            <div class="item-star">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" style="width: 0%; height: 7px" data-progress="100" ></div>
                                            </div>
                                            <div class="percent">100%</div>
                                        </div>
                                        <div class="progress-star">
                                            <div class="item-star">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="far fa-star"></span>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" style="width: 0%; height: 7px" data-progress="0" ></div>
                                            </div>
                                            <div class="percent">0%</div>
                                        </div>
                                        <div class="progress-star">
                                            <div class="item-star">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="far fa-star"></span>
                                                <span class="far fa-star"></span>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" style="width: 0%; height: 7px" data-progress="0" ></div>
                                            </div>
                                            <div class="percent">0%</div>
                                        </div>
                                        <div class="progress-star">
                                            <div class="item-star">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="far fa-star"></span>
                                                <span class="far fa-star"></span>
                                                <span class="far fa-star"></span>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" style="width: 0%; height: 7px" data-progress="0" ></div>
                                            </div>
                                            <div class="percent">0%</div>
                                        </div>
                                        <div class="progress-star">
                                            <div class="item-star">
                                                <span class="fas fa-star"></span>
                                                <span class="far fa-star"></span>
                                                <span class="far fa-star"></span>
                                                <span class="far fa-star"></span>
                                                <span class="far fa-star"></span>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" style="width: 0%; height: 7px" data-progress="0" ></div>
                                            </div>
                                            <div class="percent">0%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-review-detail">
                                    <div class="col-md-1 image-avatar">
                                        <img class="avatar-user" src="https://i.pinimg.com/originals/87/37/60/8737605b0089bc6f76b0d45bcdeb219b.jpg" alt="">
                                    </div>
                                    <div class="col-md-11 star-review">
                                        <div class="username-review">Hoài Hương</div>
                                        <div>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                        </div>
                                        <div>
                                            Mình từng ăn sushi ở nhiều chỗ, cảm thấy rất ngon. Về Quảng Trị thì không thấy bán nên hơi tiếc, may mắn sao biết được nhà hàng và có đặt ăn thử. <br> Hơi bị ngon luôn á hahaha
                                        </div>
                                        <div class="image-review">
                                            <img class="image-review-item" src="https://upload.wikimedia.org/wikipedia/commons/6/60/Sushi_platter.jpg" alt="">
                                            <img class="image-review-item" src="https://hieuhaisan.com/contents_hieuhaisan/uploads/images/tong-hop-sushi-nhat.jpg" alt="">
                                        </div>
                                        <div class="time-review">19:30 06/08/2021</div>
                                        <div class="reply-review">
                                            <div class="title-reply">Phản hồi của nhà hàng</div>
                                            <div class="content-reply">Cảm ơn bạn đã lựa chọn nhà hàng cũng như dành lời khen ngợi cho món ăn của chúng tôi <br>Xin chân thành cảm ơn!</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-review-detail">
                                    <div class="col-md-1 image-avatar">
                                        <img class="avatar-user" src="https://www.takadada.com/wp-content/uploads/2019/07/avatar-anime-nu-cho-facebook-14.jpg" alt="">
                                    </div>
                                    <div class="col-md-11 star-review">
                                        <div class="username-review">Hàn Hương Kiến</div>
                                        <div>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                        </div>
                                        <div>
                                            Mình từng ăn sushi ở nhiều chỗ, cảm thấy rất ngon. Về Quảng Trị thì không thấy bán nên hơi tiếc, may mắn sao biết được nhà hàng và có đặt ăn thử. <br> Hơi bị ngon luôn á hahaha
                                        </div>
                                        <div class="image-review">
                                            <img class="image-review-item" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_Ndsg84u5A7FuAD9BF5WFNJzh0cprhLAiDt2C92ipH1ec0gBvpBqKX6lDpjP_4HcwHXg&usqp=CAU" alt="">
                                            <img class="image-review-item" src="https://foodsguy.com/wp-content/uploads/2020/04/Sushi-vs-Sashimi.jpg" alt="">
                                        </div>
                                        <div class="time-review">19:30 06/08/2021</div>
                                        <div class="reply-review">
                                            <div class="title-reply">Phản hồi của nhà hàng</div>
                                            <div class="content-reply">Cảm ơn bạn đã lựa chọn nhà hàng cũng như dành lời khen ngợi cho món ăn của chúng tôi <br>Xin chân thành cảm ơn!</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-review-detail">
                                    <div class="col-md-1 image-avatar">
                                        <img class="avatar-user" src="https://toigingiuvedep.vn/wp-content/uploads/2021/01/anh-avatar-cho-con-gai-cuc-dep.jpg" alt="">
                                    </div>
                                    <div class="col-md-11 star-review">
                                        <div class="username-review">Thanh Nga</div>
                                        <div>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                        </div>
                                        <div>
                                            Mình từng ăn sushi ở nhiều chỗ, cảm thấy rất ngon. Về Quảng Trị thì không thấy bán nên hơi tiếc, may mắn sao biết được nhà hàng và có đặt ăn thử. <br> Hơi bị ngon luôn á hahaha
                                        </div>
                                        <div class="image-review">
                                            <img class="image-review-item" src="https://vovankienthuc.com/storage/pagedata/100447/img/upload/chiase/top-su-1.jpg" alt="">
                                            <img class="image-review-item" src="https://hieuhaisan.com/contents_hieuhaisan/uploads/images/tong-hop-sushi-nhat.jpg" alt="">
                                        </div>
                                        <div class="time-review">19:30 06/08/2021</div>
                                    </div>
                                </div>
                                <div class="item-review-detail">
                                    <div class="col-md-1 image-avatar">
                                        <img class="avatar-user" src="https://thuthuatnhanh.com/wp-content/uploads/2020/09/anh-dai-dien-nguoi-giau-mat.jpg" alt="">
                                    </div>
                                    <div class="col-md-11 star-review">
                                        <div class="username-review">Anh Tuấn</div>
                                        <div>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                        </div>
                                        <div>
                                            Mình mua cho bạn gái. Nghe bạn ấy khen ngon mà vui lắm á. <br> Cảm ơn nhà hàng rất nhiều! Ngại ghê á :V
                                        </div>
                                        <div class="time-review">19:30 06/08/2021</div>
                                        <div class="reply-review">
                                            <div class="title-reply">Phản hồi của nhà hàng</div>
                                            <div class="content-reply">Cảm ơn bạn đã lựa chọn nhà hàng cũng như dành lời khen ngợi cho món ăn của chúng tôi <br>Xin chân thành cảm ơn!</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-review-detail">
                                    <div class="col-md-1 image-avatar">
                                        <img class="avatar-user" src="https://i.pinimg.com/564x/b7/b6/ca/b7b6cac9acd756b98be0dce8e03f6a30.jpg" alt="">
                                    </div>
                                    <div class="col-md-11 star-review">
                                        <div class="username-review">Minh Tú</div>
                                        <div>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                        </div>
                                        <div>
                                            Sushi ăn có vị chua chua ngọt ngọt rất ngon. Cá không bị tanh, ăn không tệ <br> Điểm 10 cho chất lượng nhé! Sẽ mua thêm nhiều lần nữa
                                        </div>
                                        <div class="image-review">
                                            <img class="image-review-item" src="https://upload.wikimedia.org/wikipedia/commons/6/60/Sushi_platter.jpg" alt="">
                                            <img class="image-review-item" src="https://prod-wolt-venue-images-cdn.wolt.com/5e0213d02936d4cdca857a51/819ec7e6e6589028c452bf91c8c375dc" alt="">
                                        </div>
                                        <div class="time-review">19:30 06/08/2021</div>
                                        <div class="reply-review">
                                            <div class="title-reply">Phản hồi của nhà hàng</div>
                                            <div class="content-reply">Cảm ơn bạn đã lựa chọn nhà hàng cũng như dành lời khen ngợi cho món ăn của chúng tôi <br>Xin chân thành cảm ơn!</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="question" class="tab-pane fade show active">
                                <div class="add-comment">
                                    <form action="">
                                        <input type="text" placeholder="Bạn có thắc mắc gì về sản phẩm này?" class="input-comment">
                                        <a href="#" type="submit" class="btn-send"><img class="img-send" src="https://listapa.com.br/site/images/send-button.svg" alt=""></a>
                                    </form>
                                </div>
                                <div id="group-comment">
                                    <div class="item-comment">
                                        <div>
                                            <img class="avatar-cmt" src="https://scr.vn/wp-content/uploads/2020/07/T%E1%BA%A3i-h%C3%ACnh-n%E1%BB%81n-%C4%91%E1%BA%B9p-nh%E1%BA%A5t-1.jpg" alt="">
                                        </div>
                                        <div>
                                            <div class="content-comment">
                                                <div class="user-comment">Nguyễn Thị Cẩm Huyền</div>
                                                <div class="comment">Cho em hỏi là một suất này đủ cho bao nhiêu người ăn ạ</div>
                                                <div class="react-comment"><span class="time-comment">1 ngày</span><span class="reply">Trả lời</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-reply">
                                        <div class="form-reply-wrap">
                                            <div class="item-reply">
                                                <div>
                                                    <img class="avatar-reply" src="https://upanh123.com/wp-content/uploads/2020/10/tai-anh-anime-ve-lam-avatar7.jpg" alt="">
                                                </div>
                                                <div>
                                                    <div class="content-reply">
                                                        <div class="user-comment">MAX.2LON <span class="role"><em>Quản trị viên</em></span></div>
                                                        <div class="comment">Chào bạn Cẩm Huyền, sushi Nhật bán với 450gr/ suất nên có thể đủ cho ba người ăn ạ</div>
                                                        <div class="react-comment"><span class="time-comment">1 ngày</span><span class="reply">Trả lời</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-reply">
                                                <div>
                                                    <img class="avatar-reply" src="https://scr.vn/wp-content/uploads/2020/07/H%C3%ACnh-%C4%91%E1%BA%A1i-di%E1%BB%87n-%C4%91%E1%BA%B9p-cho-con-g%C3%A1i.jpg" alt="">
                                                </div>
                                                <div>
                                                    <div class="content-reply">
                                                        <div class="user-comment">Hoài Phương</div>
                                                        <div class="comment">Nếu em đặt mà không dùng liền có để lâu được không ạ</div>
                                                        <div class="react-comment"><span class="time-comment">1 ngày</span><span class="reply">Trả lời</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-reply">
                                                <div>
                                                    <img class="avatar-reply" src="https://upanh123.com/wp-content/uploads/2020/10/tai-anh-anime-ve-lam-avatar7.jpg" alt="">
                                                </div>
                                                <div>
                                                    <div class="content-reply">
                                                        <div class="user-comment">MAX.2LON <span class="role"><em>Quản trị viên</em></span></div>
                                                        <div class="comment">Chào bạn Hoài Phương, sushi Nhật ngon hơn khi ăn liền, tuy nhiên bạn cũng có thể để lâu hơn một chút miễn là trong thời gian cho phép. Bạn có thể tham khảo cách bảo quản của chúng tôi ở phần giới thiệu. Trân trọng!</div>
                                                        <div class="react-comment"><span class="time-comment">1 ngày</span><span class="reply">Trả lời</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="group-comment">
                                    <div class="item-comment">
                                        <div>
                                            <img class="avatar-cmt" src="https://i.pinimg.com/564x/c0/dc/a3/c0dca3e3bc3659454ec68b073da9b54b.jpg" alt="">
                                        </div>
                                        <div>
                                            <div class="content-comment">
                                                <div class="user-comment">Thanh Anh</div>
                                                <div class="comment">Phí ship hàng đến chỗ Vĩnh Linh là bao nhiêu ạ</div>
                                                <div class="react-comment"><span class="time-comment">1 ngày</span><span class="reply">Trả lời</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-reply">
                                        <div class="form-reply-wrap">
                                            <div class="item-reply">
                                                <div>
                                                    <img class="avatar-reply" src="https://123design.org/wp-content/uploads/2020/07/LOGOLM0199-Chibi-Si%C3%AAu-%C4%91%E1%BA%A7u-b%E1%BA%BFp-nh%C3%AD-Cute.jpg" alt="">
                                                </div>
                                                <div>
                                                    <div class="content-reply">
                                                        <div class="user-comment">Administrator <span class="role"><em>Quản trị viên</em></span></div>
                                                        <div class="comment">Chào bạn Thanh Anh, bên mình giao hàng đến chỗ bạn sẽ có phí ship là 10k nha. Tuy nhiên do đường khá xa nên nếu có quá 30 phút thì mong bạn thông cảm nha ^^</div>
                                                        <div class="react-comment"><span class="time-comment">1 ngày</span><span class="reply">Trả lời</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item-suggest">
                        <div class="topic">Sản phẩm gợi ý</div>
                        <div class="under_line" style="margin-bottom: 30px;"></div>
                        @foreach ($suggests as $suggest)
                            <div class="product-item">
                                <a href="{{URL::to('/product/'.$suggest->slug)}}">
                                    <div class="rate-suggest">
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="far fa-star"></span>
                                    </div>
                                    <div class="intro-item">
                                        <img class="img-suggest" src="{{ asset($suggest->image) }}" alt="">
                                    </div>
                                    <div class="intro-item">
                                        <div class="name-suggest">{{$suggest->name}}</div>
                                        <div class="desc-suggest">{!!$suggest->description!!}</div>
                                        <div class="name-suggest price-suggest"><sup><ins>đ</ins></sup> {{number_format($suggest->price)}}</div>
                                    </div>
                                </a>
                            </div>
                            <div style="margin-top: -50px;text-align: center">
                                <form class="add-cart-form" method="POST">
                                    {{ csrf_field() }}
                                    <input type="text" name="number" value="1" id="" style="display: none;">
                                    <input type="text" name="product_id" value="{{$suggest->id}}" id="" style="display: none;">
                                    <button class="btn-add" style="margin-top: -30px;" type="submit"><span class="fas fa-cart-plus"></span></button>
                                </form>
                            </div>
                        @endforeach
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
        <script src="{{asset('assests/js/user/detail-product.js')}}"></script>
    @endsection
