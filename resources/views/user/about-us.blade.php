@extends('layouts.user')
@section('style')
<link rel="stylesheet" href="{{ asset('assests/css/user/user.cart.css') }}">
<link rel="stylesheet" href="{{ asset('assests/css/user/user.about-us.css') }}">
@endsection

@section('title','Về chúng tôi')

@section('content')
<div class="container-fuild">
    <div class="container-fuild">
        <div class="big-theme">
            <div class="big-topic">Về chúng tôi</div>
            <div class="inline"></div>
            <p class="desc-theme">Chất lượng làm nên thương hiệu - Uy tín tạo dựng niềm tin</p>
        </div>
    </div>
</div>
<div class="container-fuild" >
    <div class="row d-flex" style="justify-content: center;align-items: center;">
        <div class="col-md-6">
            <img class="image-restaurant rest1" src="https://i.pinimg.com/564x/40/4b/f7/404bf711918943595e7deb3443a3d935.jpg" alt="">
            <img src="https://i.pinimg.com/564x/0f/0f/0e/0f0f0e575256ebbe5e600018ae83be2f.jpg" alt="" class="image-restaurant rest2">
        </div>
        <div class="col-md-6">
            <div class="intro-restaurant">
                <img src="https://i.pinimg.com/564x/7c/f2/82/7cf2825c3b5b0aed49076c6923cb10b5.jpg" alt="" class="image-logo-restaurant">
                <div class="desc-restaurant">
                    Max.2Lon - Vẹn tròn tinh túy
                </div>
                <div class="slogan-restaurant">
                    Sứ mệnh của chúng tôi là mang đến cho khách hàng những trải nghiệm tuyệt vời và đúng nghĩa nhất về ẩm thực. Ở đó, ẩm thực không chỉ đơn giản là ngon miệng, mà phải đảm bảo an toàn vệ sinh và dinh dưỡng.
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fuild introduce-categories">
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-md-6 chef-restaurant">
            <div class="d-flex align-items-center justify-content-center">
                <div class="col-md-7">
                    <img src="{{asset('assests/images/banner/chef.png')}}" alt="" style="width:100%">
                </div>
                <div class="col-md-5">
                    <div class="check-intro"><i class="fas fa-check-circle"></i> Đảm bảo an toàn</div>
                    <div class="check-intro"><i class="fas fa-check-circle"></i> Đảm bảo chất lượng</div>
                    <div class="check-intro"><i class="fas fa-check-circle"></i> Thực phẩm tươi ngon</div>
                    <div class="check-intro"><i class="fas fa-check-circle"></i> Chất lượng 10 tròn</div>
                </div>
            </div>
        </div>
        <div class="col-md-6" style="margin-left:-30px">
            <div class="image-category">
                <img src="{{asset('assests/images/banner/cate1 (1).jpg')}}" alt="" class="image-item-category">
                <div class="name-item-category d-flex align-items-center justify-content-center">Đồ uống</div>
                <div class="intro-category-wrap-top"></div>
                <img src="{{asset('assests/images/banner/cate1 (2).jpg')}}" alt="" class="image-item-category">
                <div class="name-item-category d-flex align-items-center justify-content-center">Đồ ăn</div>
                <div class="intro-category-wrap-right"></div>
            </div>
            <div class="image-category">
                <div class="intro-category-wrap-bottom"></div>
                <div class="name-item-category d-flex align-items-center justify-content-center">Đồ ngọt</div>
                <img src="{{asset('assests/images/banner/cate1 (3).jpg')}}" alt="" class="image-item-category">
                <div class="name-item-category d-flex align-items-center justify-content-center">Trái cây</div>
                <div class="intro-category-wrap-left"></div>
                <img src="{{asset('assests/images/banner/cate1 (4).jpg')}}" alt="" class="image-item-category">
            </div>
        </div>
    </div>
</div>
    <div class="container-fuild cont-cart">
        <div class="category">
            <p class="text-desc">-Người mang sứ mệnh-</p>
            <p><span class="text-about-us">ĐỘI NGŨ SHIPPER</span></p>
        </div>
    </div>
    <div class="container">
        <div class="d-flex align-items-center justify-content-center">
            <div class="infor-shipper-1 col-md-6">
                <div class="label-infor">Nguyễn Thị Trà Giang</div>
                <div class="text-infor-label"><i class="fas fa-user-tie icon-infor"></i>Shipper</div>
                <div class="text-infor-label"><i class="far fa-clock icon-infor"></i>7h00 - 12h00</div>
                <div class="text-infor-label"><i class="fas fa-phone icon-infor"></i>0123456789</div>
                <div class="text-infor-label"><i class="fas fa-at icon-infor"></i>camhuyen2k1@gmail.com</div>
                <div class="slogan-restaurant infor-slogan">"Mình thích giao đồ ăn đến cho mọi người, nhìn mọi người vui mừng khi nhận được thực sự cảm thấy rất hạnh phúc"</div>
            </div>
            <div class="col-md-6">
                <img class="image-shipper-1" src="https://i.pinimg.com/564x/2d/b7/e7/2db7e7a91be0f6665a9bc764120a163f.jpg" alt="">
            </div>
        </div>
        <div class="d-flex align-items-center justify-content-center">
            <div class="col-md-6">
                <img class="image-shipper-2" src="https://i.pinimg.com/564x/11/a0/bf/11a0bfe56e095f56d7eaf9348efeae9e.jpg" alt="">
            </div>
            <div class="infor-shipper-2 col-md-6">
                <div class="label-infor">Trương Tân Thành</div>
                <div class="text-infor-label"><i class="fas fa-user-tie icon-infor"></i>Shipper</div>
                <div class="text-infor-label"><i class="far fa-clock icon-infor"></i>12h00 - 21h00</div>
                <div class="text-infor-label"><i class="fas fa-phone icon-infor"></i>0123456789</div>
                <div class="text-infor-label"><i class="fas fa-at icon-infor"></i>camhuyen2k1@gmail.com</div>
                <div class="slogan-restaurant infor-slogan">"Công việc này thực sự đôi lúc rất vất vả vì phải chạy Đông chạy Tây, nhưng chính những nụ cười trả công của khách hàng khiến mình có thêm tình yêu với công việc này"</div>
            </div>
        </div>
    </div>
    <div class="container-fuild">
        <div class="row">
            <img src="{{asset('assests/images/banner/list1.jpg')}}" alt="" class="image-banner-category">
            <img src="{{asset('assests/images/banner/list3.jpg')}}" alt="" class="image-banner-category">
            <img src="{{asset('assests/images/banner/list2.jpg')}}" alt="" class="image-banner-category">
            <img src="{{asset('assests/images/banner/list4.jpg')}}" alt="" class="image-banner-category">
        </div>
        <div class="row d-flex align-items-center justify-content-center banner-intro-product">
            <div class="banner-product">
                <img src="{{asset('assests/images/banner/list-product1.png')}}" alt="" class="image-banner-product animate__slow ">
            </div>
            <div class="banner-product">
                <img src="{{asset('assests/images/banner/list-product3.png')}}" alt="" class="image-banner-product animate__slow">
            </div>
            <div class="banner-product">
                <img src="{{asset('assests/images/banner/list-product2.png')}}" alt="" class="image-banner-product animate__slow">
            </div>
            <div class="banner-product">
                <img src="{{asset('assests/images/banner/list-product4.png')}}" alt="" class="image-banner-product animate__slow">
            </div>
        </div>
    </div>
    <div class="container-fuild contact-restaurant">
        <div class="d-flex align-items-center justify-content-center">
            <div class="col-md-5">
                <div class="label-infor-contact">Thông tin liên hệ</div>
                <div class="text-infor"><b>NHÀ HÀNG MAX.2LON</b></div>
                <div class="text-infor">11 Phan Đình Phùng, TP Đông Hà, Quảng Trị</div>
                <div class="text-infor">(+386) 987 654 321</div>
                <div class="text-infor">(+386) 40 123 456</div>
                <div class="text-infor">max.2lon.restaurant@gmail.com</div>
                <div class="text-infor">www.max.2lon.com</div>
                <div class="buttons">
                    <a href="{{URL::to('/contact')}}">
                        <button class="blob-btn">
                            Gửi yêu cầu
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
            <div class="col-md-7">
                <div id="map" style="width: 100%; height: 520px; margin-top:40px;" ></div>
            </div>
        </div>
    </div>
    <script>
        // Initialize and add the map
        function initMap() {
          // The location of Uluru
          const uluru = { lat: 16.8181338, lng: 107.1025157 };
          // The map, centered at Uluru
          const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 18,
            center: uluru,
          });
          // The marker, positioned at Uluru
          const marker = new google.maps.Marker({
            position: uluru,
            map: map,
          });
        }
    </script>
    <script>
        const imageBannerProduct = document.querySelectorAll('.image-banner-product');
        // if(window.scrollY >= 2200) {
        //     imageBannerProduct.forEach(item => item.classList.add('animate__animated'));
        // }
        window.addEventListener('scroll', (event) => {
            if(window.scrollY >= 2400) {
                console.log('scroll', window.scrollY);
                imageBannerProduct[0].classList.add('animate__animated', 'animate__slideInLeft');
                imageBannerProduct[1].classList.add('animate__animated', 'animate__slideInDown');
                imageBannerProduct[2].classList.add('animate__animated', 'animate__slideInUp');
                imageBannerProduct[3].classList.add('animate__animated', 'animate__slideInRight');

            }
        });
        
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7ZW0p0ZTdEwpt3ex9-FBrGXuCKBLjaF8&callback=initMap&libraries=&v=weekly&z=200" async></script>
    <script src="../resources/js/carts.js"></script>
@endsection