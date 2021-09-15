    @extends('layouts.user')
    @section('title','Chi tiết sản phẩm')
    @section('style')
        <link rel="stylesheet" href="{{ asset('assests/css/user/user.detail-product.css')}}">
    @endsection
    @section('content')
        <div class="container-fuild detail-form">
            <div class="row">
                <div class="col-md-4">
                    <div class="slide-img">
                        @foreach ($images as $index=>$image)
                        <div class="image-slide">
                            <div class="number-slide">{{$index+1}}/{{$images->count()}}</div>
                            <img class="image-product" src="{{asset($image->path)}}" alt="">
                        </div>
                        @endforeach
                        <a class="prev" onclick="plusSlides(-1)"><span class="text-pagi">❮</span></a>
                        <a class="next" onclick="plusSlides(1)"><span class="text-pagi">❯</span></a>
                        <div class="row slideshow">
                            @foreach ($images as $index=>$image)
                                <div class="list-image">
                                    <img class="item-image cursor" onclick="currentSlide({{$index+1}})" src="{{asset($image->path)}}" alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="intro-product">
                        <div class="name-product">{{$product->name}}</div>
                        <div class="statistics">
                            <div class="rate-product">
                                <span class="aver">5.0</span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                            </div>
                            <div class="review-product"><span class="number">100</span> Đánh giá</div>
                            <div class="sold-product"><span class="number">145</span> Đã bán</div>
                        </div>
                        <div class="price-product"><sup><ins>đ</ins></sup> {{$product->price}}.000</div>
                        <div class="amount-product">
                            <span>Số lượng:</span>
                            <div class="buttons_added">
                                <input class="minus is-form" type="button" value="-">
                                <input aria-label="quantity" class="input-qty" max="{{$product->amount}}" min="1" name="" type="number" value="1">
                                <input class="plus is-form" type="button" value="+">
                            </div>
                            <span class="still-in-stock"><em> (Có sẵn {{$product->amount}} sản phẩm)</em></span>
                        </div>
                        <div class="add-product">
                            <button class="add-cart" >THÊM VÀO GIỎ HÀNG</button>
                            <button class="add-order">MUA NGAY</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="transport">
                        <div>
                            <img class="img-shipper" src="{{ asset('assests/images/banner/shipper.jpg') }}" alt="">
                        </div>
                        <div class="slogan">Giao hàng tận tay, <br> ngay nơi bạn ở</div>
                        <div class="ship-infor">
                            <div class="txt-ship">Miễn phí vận chuyển:</div>
                            <ol>
                                <li><em>Phường 1, Đông Hà</em></li>
                                <li><em>Thanh An, Cam Lộ</em></li>
                                <li><em>Cam Thủy, Cam Lộ</em></li>
                                <li><em>Hóa đơn trên 1.000.000 <sup>đ</sup></em></li>
                            </ol>
                            <div class="txt-ship">Ngoài các khu vực trên:</div>
                            <div class="txt-ship"><em>10.000 <sup>đ</sup> - 30.000 <sup>đ</sup></em></div>
                        </div>
                    </div>
                </div>
            </div>
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
                                        <div class="name-suggest price-suggest"><sup><ins>đ</ins></sup> {{$suggest->price}}.000</div>
                                    </div>
                                </a>
                            </div>
                            <div style="margin-top: -50px;text-align: center">
                                <button class="btn-add" style="margin-top: -30px;"><span class="fas fa-cart-plus"></span></button>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    <script src="{{asset('assests/js/user/detail-product.js')}}"></script>
    @endsection
