@extends('layouts.user')

@section('title', 'Trang chủ')

@section('content')
    <div class="container-fuild">
        <img class="img-banner" src="https://chupanhmonan.com/wp-content/uploads/2016/12/ch%E1%BB%A5p-%E1%BA%A3nh-m%C3%B3n-%C4%83n-chuy%C3%AAn-nghi%E1%BB%87p.png" alt="">
        <img class="img-menu" src="../public/assests/images/banner/food6.png" alt="">
        <img class="img-text" src="../public/assests/images/banner/text-restaurant.png" alt="">
    </div>
    <!--Danh mục các sản phẩm-->
    <div class="container">
        <div class="category">
            <p class="text-desc">-Dịch vụ tại nhà hàng-</p>
            <p><span class="text-cate">DANH MỤC SẢN PHẨM</span></p>
        </div>
        <div class="row">
            <div class="col-md-3">
                <a href="{{URL::to('/menu/1')}}" class="link-cate">
                    <div class="menu-cate">
                        <img class="image-review" src="{{ asset('assests/images/banner/icon-food.jpg') }}" alt="">
                        <div class="name-cate">Thức ăn</div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{URL::to('/menu/2')}}" class="link-cate">
                    <div class="menu-cate">
                        <img class="image-review" src="{{ asset('assests/images/banner/icon-drink.jpg') }}" alt="">
                        <div class="name-cate">Đồ uống</div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{URL::to('/menu/3')}}" class="link-cate">
                    <div class="menu-cate">
                        <img class="image-review" src="{{ asset('assests/images/banner/icon-cake.jpg') }}" alt="">
                        <div class="name-cate">Bánh ngọt</div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{URL::to('/menu/4')}}" class="link-cate">
                    <div class="menu-cate">
                        <img class="image-review" src="{{ asset('assests/images/banner/icon-fruit.jpg') }}" alt="">
                        <div class="name-cate">Trái cây</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fuild">
        <div class="category">
            <p class="text-desc">-Những món ăn được lựa chọn nhiều nhất-</p>
            <p><span class="text-cate wow bounceInUp" data-wow-iteration="100" >NỔI BẬT</span></p>
        </div>
        <div class="detail-menu">
            <div class="row blog-form mx-0" style="padding-bottom: 40px">
                <div class="col-md-5 ">
                    <div><img class="image-menu-1"src="{{ asset('assests/images/banner/food1.png') }}" alt=""></div>
                    <div class="row">
                        <div class="col-md-4">
                            <img class="image-menu-2" src="{{ asset('assests/images/banner/food2.png') }}" alt="">
                        </div>
                        <div class="col-md-4">
                            <img class="image-menu-3" src="{{ asset('assests/images/banner/food3.png') }}" alt="">
                        </div>
                        <div class="col-md-4">
                            <img class="image-menu-4" src="{{ asset('assests/images/banner/food4.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="item-menu">
                                <div class="name">
                                    <div class="name-item">Bánh ngọt dâu tây</div>
                                    <div class="price-item">30.000 <sup><ins>đ</ins></sup></div>
                                </div>
                                <img class="img-menu-item" src="../public/assests/images/banner/food10.png" alt="">
                            </div>
                            <div class="item-menu">
                                <div class="name">
                                    <div class="name-item">Bò bít tết</div>
                                    <div class="price-item">30.000 <sup><ins>đ</ins></sup></div>
                                </div>
                                <img class="img-menu-item" src="../public/assests/images/banner/food4.png" alt="">
                            </div>
                            <div class="item-menu">
                                <div class="name">
                                    <div class="name-item">Bánh ngọt dâu tây</div>
                                    <div class="price-item">30.000 <sup><ins>đ</ins></sup></div>
                                </div>
                                <img class="img-menu-item" src="../public/assests/images/banner/food11.png" alt="">
                            </div>
                            <div class="item-menu">
                                <div class="name">
                                    <div class="name-item">Trái cây ngũ sắc</div>
                                    <div class="price-item">30.000 <sup><ins>đ</ins></sup></div>
                                </div>
                                <img class="img-menu-item" src="../public/assests/images/banner/food12.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-menu">
                                <div class="name">
                                    <div class="name-item">Bánh ngọt dâu tây</div>
                                    <div class="price-item">30.000 <sup><ins>đ</ins></sup></div>
                                </div>
                                <img class="img-menu-item" src="../public/assests/images/banner/food6.png" alt="">
                            </div>
                            <div class="item-menu">
                                <div class="name">
                                    <div class="name-item">Bánh ngọt dâu tây</div>
                                    <div class="price-item">30.000 <sup><ins>đ</ins></sup></div>
                                </div>
                                <img class="img-menu-item" src="../public/assests/images/banner/food7.png" alt="">
                            </div>
                            <div class="item-menu">
                                <div class="name">
                                    <div class="name-item">Bánh ngọt dâu tây</div>
                                    <div class="price-item">30.000 <sup><ins>đ</ins></sup></div>
                                </div>
                                <img class="img-menu-item" src="../public/assests/images/banner/food9.png" alt="">
                            </div>
                            <div class="item-menu">
                                <div class="name">
                                    <div class="name-item">Bánh ngọt dâu tây</div>
                                    <div class="price-item">30.000 <sup><ins>đ</ins></sup></div>
                                </div>
                                <img class="img-menu-item" src="../public/assests/images/banner/food8.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-wrap">
            <a href="{{ URL::to('/menu') }}" class="link-more"><span class="text-more"> Xem tất cả</span><span class="icon"><i class="fas fa-arrow-right"></i></span></a>
        </div>
    </div>
    <div class="container-fuild content-center" style="margin-top: -70px">
        <div class="category">
            <p class="text-desc">-Khách hàng nói gì về chúng tôi-</p>
            <p><span class="text-cate">TRẢI NGHIỆM KHÁCH HÀNG</span></p>
        </div>
        <div class="container-fuild blog-form">
            <div class="rate-carousel owl-carousel owl-theme">
                <div class="item-review">
                    <div class="d-flex justify-content-center" ><img class="image-review" src="https://toigingiuvedep.vn/wp-content/uploads/2021/01/anh-avatar-cho-con-gai-cuc-dep.jpg" alt=""></div>
                    <div class="name-review">Như Ý</div>
                    <div class="rate-review">
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="far fa-star"></span>
                    </div>
                    <div class="review-content"><i class="fas fa-quote-left"></i>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim <i class="fas fa-quote-right"></i></div>
                </div>
                <div class="item-review">
                    <div class="d-flex justify-content-center" ><img class="image-review" src="https://upanh123.com/wp-content/uploads/2020/12/anh-dai-dien-ngau7-2.jpg" alt=""></div>
                    <div class="name-review">Minh Tú</div>
                    <div class="rate-review">
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="far fa-star"></span>
                    </div>
                    <div class="review-content"><i class="fas fa-quote-left"></i>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim <i class="fas fa-quote-right"></i></div>
                </div>
                <div class="item-review">
                    <div class="d-flex justify-content-center" ><img class="image-review" src="https://pdp.edu.vn/wp-content/uploads/2021/05/avatar-hinh-anh-dai-dien-nguoi-giau-mat.jpg" alt=""></div>
                    <div class="name-review">Nam Thành</div>
                    <div class="rate-review">
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="far fa-star"></span>
                    </div>
                    <div class="review-content"><i class="fas fa-quote-left"></i>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim <i class="fas fa-quote-right"></i></div>
                </div>
                <div class="item-review">
                    <div class="d-flex justify-content-center" ><img class="image-review" src="https://i.pinimg.com/564x/b7/b6/ca/b7b6cac9acd756b98be0dce8e03f6a30.jpg" alt=""></div>
                    <div class="name-review">Hải Lan</div>
                    <div class="rate-review">
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="far fa-star"></span>
                    </div>
                    <div class="review-content"><i class="fas fa-quote-left"></i>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim <i class="fas fa-quote-right"></i></div>
                </div>
                <div class="item-review">
                    <div class="d-flex justify-content-center" ><img class="image-review" src="https://cryang.com/wp-content/uploads/2021/06/2.1-1024x1024.jpg" alt=""></div>
                    <div class="name-review">Lan Anh</div>
                    <div class="rate-review">
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="far fa-star"></span>
                    </div>
                    <div class="review-content"><i class="fas fa-quote-left"></i>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim <i class="fas fa-quote-right"></i></div>
                </div>
            </div>
          </div>
    </div>

    <div class="container-fuild detail-menu-2">
        <!--<div class="detail-menu-2">-->
            <div class="row mx-0" style="align-items: center">
                <!--<div class="col-md-9">-->
                    <!--<div class="row" style="align-items: center">-->
                        <div class="col-md-4 pr-0" style="padding-left: 50px">
                            <div class="name-review-product">Ballotine gan ngỗng</div>
                            <div class="desc-review-product">Món Ballotine truyền thống là món được làm từ đùi các loại gia cầm được nhồi thịt và gia vị, nấu bằng các om hoặc hầm. Món Ballotine hiện đại có thể dùng các bộ phận khác như ức, gan, mà không nhất thiết phải là thịt gia cầm. </div>
                            <div class="buttons" style="margin-right: -70px;">
                                <a href="#">
                                    <button class="blob-btn">
                                        100.000 - MUA NGAY
                                        <span class="blob-btn__inner">
                                          <span class="blob-btn__blobs">
                                            <span class="blob-btn__blob"></span>
                                            <span class="blob-btn__blob"></span>
                                            <span class="blob-btn__blob"></span>
                                            <span class="blob-btn__blob"></span>
                                          </span>
                                        </span>
                                    </button>
                                </a>
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
                        </div>
                        <div class="col-md-4 pr-0" style="text-align: center;">
                            <div class="image-div-5"><img src="{{ asset('assests/images/banner/food13.png') }}" alt="" class="image-menu-5"></div>
                        </div>
                        <div class="col-md-4 pr-0" style="float: right;">
                            <div class="home-review-food-left d-flex home-review-food-1">
                                <div><img class="image-review-food" src="https://i0.wp.com/fullofplants.com/wp-content/uploads/2016/11/how-to-make-the-best-vegan-foie-gras-super-creamy-rich-appetizer-thumb.jpg?fit=1400%2C1400&ssl=1" alt=""></div>
                                <div class="name-review-food">Pate gan ngỗng</div>
                            </div>
                            <div class="home-review-food-left d-flex home-review-food-2">
                                <div><img class="image-review-food" src="https://www.hoteljob.vn/files/Anh-Hoteljob-Ni/Nam-2019/Thang-5/vang-cuong-hoa-la-gi-06.jpg" alt=""></div>
                                <div class="name-review-food">Rượu Marsala</div>
                            </div>
                            <div class="home-review-food-left d-flex home-review-food-3">
                                <div><img class="image-review-food" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBjq__WzF30ba6n54qCkSTSxGZMQpdCSkDpXEcF2t7xxT4MDivd_qHAluIHVn90Ar-pP8&usqp=CAU" alt=""></div>
                                <div class="name-review-food">Tương quả mơ</div>
                            </div>
                        </div>
                    <!--</div>-->
                <!--</div>-->
                <!--
                <div class="col-md-3">
                    <div><img class="image-menu-1" src="{{ asset('assests/images/banner/food5.png') }}" alt=""></div>
                </div>  -->  
            </div>
        <!--</div>-->
    </div>
    <div class="container-fuild content-center">
        <div class="category">
            <p class="text-desc">-Chia sẻ kinh nghiệm-</p>
            <p><span class="text-cate">BLOG</span></p>
        </div>
        <div class="container-fuild blog-form">
            <div class="card-posts row">
                @foreach ($posts as $index=>$post)
                <div class="col-md-4">
                    <div class="card-post">
                        <div class="intro-post-home">
                            <div class="title-post-home">{{$post->title}}</div>
                            <div class="author-post-home">{{$post->name}}</div>
                            <div class="intro-post-wrap"></div>
                        </div>
                        <div class="img-div">
                            <img class="image-list-post" src="{{asset($post->path)}}" alt="">
                        </div>
                        <div class="content-post-home">
                            {!!$post->content!!}
                        </div>
                        <div class="desc-post-home">
                            <div class="col-md-6 view-post-home"><i class="fas fa-eye"></i>{{$post->view}} lượt xem</div>
                            <div class="col-md-6"><a href="{{URL::to('/post/'.$post->slug)}}" class="btn-more">></a></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div> 
            <div class="btn-wrap">
                <a href="{{ URL::to('/list-posts') }}" class="link-more"><span class="text-more"> Xem tất cả</span><span class="icon"><i class="fas fa-arrow-right"></i></span></a>
            </div> 
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel();
        });

        var $owl = $('.owl-carousel');

        $owl.children().each( function( index ) {
        $(this).attr( 'data-position', index ); // NB: .attr() instead of .data()
        });

        $owl.owlCarousel({
            center: true,
            loop: true,
            items: 3,
        });

        $(document).on('click', '.owl-item>div', function() {
        // see https://owlcarousel2.github.io/OwlCarousel2/docs/api-events.html#to-owl-carousel
        var $speed = 300;  // in ms
        $owl.trigger('to.owl.carousel', [$(this).data( 'position' ), $speed] );
        });

    </script>
@endsection