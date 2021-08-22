@extends('layouts.user')

@section('title', 'Trang chủ')

@section('content')
    <div class="container-fuild">
        <img class="img-banner" src="https://chupanhmonan.com/wp-content/uploads/2016/12/ch%E1%BB%A5p-%E1%BA%A3nh-m%C3%B3n-%C4%83n-chuy%C3%AAn-nghi%E1%BB%87p.png" alt="">
        <img class="img-menu" src="../public/assests/images/banner/orange.png" alt="">
        <img class="img-text" src="../public/assests/images/banner/text-restaurant.png" alt="">
    </div>
    <!--Danh mục các sản phẩm-->
    <div class="container">
        <div class="category">
            <p class="text-desc">-Dịch vụ tại nhà hàng-</p>
            <p><span class="text-cate">MENU</span></p>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="menu-cate">
                    <span class="fas fa-hamburger"></span>
                    <div class="name-cate">Thức ăn</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="menu-cate">
                    <span class="fas fa-wine-glass-alt"></span>
                    <div class="name-cate">Đồ uống</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="menu-cate">
                    <span class="fas fa-ice-cream"></span>
                    <div class="name-cate">Bánh ngọt</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="menu-cate">
                    <span class="fas fa-apple-alt"></span>
                    <div class="name-cate">Trái cây</div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="category">
            <p class="text-desc">-Những món ăn được lựa chọn nhiều nhất-</p>
            <p><span class="text-cate">NỔI BẬT</span></p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row item">
                    <div class="col-md-4">
                        <img class="img-menu-item" src="https://media.cooky.vn/recipe/g5/45157/s320x320/cooky-recipe-cover-r45157.jpg" alt="">
                    </div>
                    <div class="col-md-8 item">
                        <span class="name-item"><b>Gà hấp mắm nhĩ</b></span>
                        <span class="name-plus">.............................................................................................</span>
                        <span class="price-item"><b>$40</b></span>
                    </div>
                </div>
                <div class="row item">
                    <div class="col-md-4">
                        <img class="img-menu-item" src="http://hiravietnam.com/wp-content/uploads/2020/12/canh-ga-chien-nuoc-mam-bang-noi-chien-khong-dau.jpg" alt="">
                    </div>
                    <div class="col-md-8 item">
                        <span class="name-item"><b>Gà chiên mắm</b></span>
                        <span class="name-plus">.............................................................................................</span>
                        <span class="price-item"><b>$40</b></span>
                    </div>
                </div>
                <div class="row item">
                    <div class="col-md-4">
                        <img class="img-menu-item" src="https://ameovat.com/wp-content/uploads/2016/04/g2.jpg" alt="">
                    </div>
                    <div class="col-md-8 item">
                        <span class="name-item"><b>Gà luộc</b></span>
                        <span class="name-plus">.............................................................................................</span>
                        <span class="price-item"><b>$40</b></span>
                    </div>
                </div>
                <div class="row item">
                    <div class="col-md-4">
                        <img class="img-menu-item" src="https://image-us.eva.vn/upload/3-2020/images/2020-08-03/image8-1596439589-307-width650height626.jpg" alt="">
                    </div>
                    <div class="col-md-8 item">
                        <span class="name-item"><b>Miến trộn</b></span>
                        <span class="name-plus">.............................................................................................</span>
                        <span class="price-item"><b>$40</b></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row item">
                    <div class="col-md-4">
                        <img class="img-menu-item" src="https://mmpro.vn/media/catalog/product/cache/4b89e3b68b19a5deb06f7f0a66f8e7bf/2/1/214190_22141903.jpg" alt="">
                    </div>
                    <div class="col-md-8 item">
                        <span class="name-item"><b>Bia lon Tiger</b></span>
                        <span class="name-plus">.............................................................................................</span>
                        <span class="price-item"><b>$40</b></span>
                    </div>
                </div>
                <div class="row item">
                    <div class="col-md-4">
                        <img class="img-menu-item" src="https://i.pinimg.com/originals/82/c8/c2/82c8c217888fa88e8fdc5d97103274a7.jpg" alt="">
                    </div>
                    <div class="col-md-8 item">
                        <span class="name-item"><b>Coca Cola</b></span>
                        <span class="name-plus">.............................................................................................</span>
                        <span class="price-item"><b>$40</b></span>
                    </div>
                </div>
                <div class="row item">
                    <div class="col-md-4">
                        <img class="img-menu-item" src="https://www.7up.com/images/products/slider/7up_featured_m.jpg" alt="">
                    </div>
                    <div class="col-md-8 item">
                        <span class="name-item"><b>7up</b></span>
                        <span class="name-plus">.............................................................................................</span>
                        <span class="price-item"><b>$40</b></span>
                    </div>
                </div>
                <div class="row item">
                    <div class="col-md-4">
                        <img class="img-menu-item" src="https://lavieviva.vn/wp-content/uploads/2018/09/Nuoc-Lavie-750ml-nap-the-thao-1.png" alt="">
                    </div>
                    <div class="col-md-8 item">
                        <span class="name-item"><b>Lavie</b></span>
                        <span class="name-plus">.............................................................................................</span>
                        <span class="price-item"><b>$40</b></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="view-menu"><a href="">Xem tất cả</a></div>
    </div>


    <div class="container-fuild content-center">
        <div class="category">
            <p class="text-desc">-Trải nghiệm dịch vụ-</p>
            <p><span class="text-cate">TRẢI NGHIỆM KHÁCH HÀNG</span></p>
        </div>
        <div class="container">
            <div class="rate-carousel">
              
            </div>
          </div>
    </div>

    <div class="container-fluid parallax">
        <div class="review-special">
            <div class="container-fuild">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <img class="img-review-special" src="https://i.ytimg.com/vi/pqzReupuLT8/maxresdefault.jpg" alt="">
                    </div>
                    <div class="col-md-6">
                        <span class="review-special-desc">
                            <h1>Gà hấp mắm nhĩ - Đặc sản chỉ có tại MAX.2LON</h1>
                            <p>Gà hấp mắm nhĩ là món ăn dân dã được nhiều người ưa thích bởi hương vị đậm đà của nước mắm hòa quyện cùng thịt gà ngọt dai để lại ấn tượng khó quên</p>
                            <p>Với cách chế biến đặc biệt, kết hợp nguyên liệu được chọn lựa kỹ càng, gà Cùa 100% nuôi tự nhiên càng làm cho từng thớ thịt vừa dai ngon lại thơm ngát mùi hương nước mắm đậm đà, khiến bạn ăn hoài không ngán</p>
                            <h2 style="float: right;">Giá chỉ 270.000/con</h2>
                            <button class="btn-buy-now">MUA NGAY</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fuild content-center">
        <div class="category">
            <p class="text-desc">-Chia sẻ kinh nghiệm-</p>
            <p><span class="text-cate">CẨM NANG</span></p>
        </div>
        <div class="container-fuild">
            <div class="card-posts">
                <div class="card-post card-post-shadow">
                    <div><img class="img-card-post" src="https://i.pinimg.com/originals/f7/c3/87/f7c3871f0b1bd5f9b63f67c067f835a4.jpg" alt=""></div>
                    <div class="post-desc">
                        <div>
                            <h5>Gỏi cuốn thịt gà chấm mắm me</h5>
                            <p>Hôm trước lang thang trên Insta gặp quả ảnh bạn tây nào đó up món gỏi cuốn thịt heo quay...</p>
                        </div>
                        <div><button class="read-more">Đọc thêm</button></div>
                    </div>
                </div>
                <div class="card-post card-post-active">
                    <div><img class="img-card-post" src="https://vietgle.vn/wp-content/uploads/2020/09/tra-bi-dao.jpg" alt=""></div>
                    <div class="post-desc">
                        <div>
                            <h4>Cách làm trà bí đao</h4>
                            <p>Hè nóng nên mình thèm được uống một cốc nước gì đó mát lạnh mà phải là hàng tự làm cơ. Mình thích tự làm các loại đồ uống ví dụ như trà bưởi mật ong, nước mơ chua,....</p>
                        </div>
                        <div><a href="cach-lam-tra-bi-dao"><button class="read-more">Đọc thêm</button></a></div>
                    </div>
                </div>
                <div class="card-post card-post-shadow">
                    <div><img class="img-card-post" src="https://baihay.net/sites/default/files/styles/node600/public/4.1_2.jpg" alt=""></div>
                    <div class="post-desc">
                        <div>
                            <h5>Bún hến Mai Xá</h5>
                            <p>Bún hến Mai Xá là đặc sản của làng Mai Xá xã Gio Mai, Gio Linh, Quảng Trị...</p>
                        </div>
                        <div><button class="read-more">Đọc thêm</button></div>
                    </div>
                </div>
          </div>  
        </div>
    </div>
    
@endsection