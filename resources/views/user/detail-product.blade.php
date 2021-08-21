<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../resources/css/user.css">
    <link rel="stylesheet" href="../resources/css/detail-product.css">
</head>
<body>
    @extends('layouts.user')
    @section('title','Chi tiết sản phẩm')
    @section('content')
        <div class="container-fuild detail-form">
            <div class="row">
                <div class="col-md-4">
                    <div class="slide-img">
                        <div class="image-slide">
                            <div class="number-slide">1/5</div>
                            <img class="image-product" src="https://lavenderstudio.com.vn/wp-content/uploads/2017/03/chup-san-pham.jpg" alt="">
                        </div>
                        <div class="image-slide">
                            <div class="number-slide">2/5</div>
                            <img class="image-product" src="https://acsantangelo1907.com/cach-lam-sushi-nhat-ban/imager_188595.jpg" alt="">
                        </div>
                        <div class="image-slide">
                            <div class="number-slide">3/5</div>
                            <img class="image-product" src="https://resources.matcha-jp.com/resize/720x2000/2017/10/08-38067.jpeg" alt="">
                        </div>
                        <div class="image-slide">
                            <div class="number-slide">4/5</div>
                            <img class="image-product" src="https://www.sashimihome.com/wp-content/uploads/Tuy%E1%BB%87t-K%C4%A9-Ch%E1%BA%BF-Bi%E1%BA%BFn-Sushi-C%C3%A1-H%E1%BB%93i-Theo.jpg" alt="">
                        </div>
                        <div class="image-slide">
                            <div class="number-slide">5/5</div>
                            <img class="image-product" src="https://s3-media0.fl.yelpcdn.com/bphoto/xfks5DqwHAu2MYGW8ws9sA/l.jpg" alt="">
                        </div>

                        <a class="prev" onclick="plusSlides(-1)"><span class="text-pagi">❮</span></a>
                        <a class="next" onclick="plusSlides(1)"><span class="text-pagi">❯</span></a>
                        <div class="row slideshow">
                            <div class="list-image">
                                <img class="item-image cursor" onclick="currentSlide(1)" src="https://lavenderstudio.com.vn/wp-content/uploads/2017/03/chup-san-pham.jpg" alt="">
                            </div>
                            <div class="list-image">
                                <img class="item-image cursor" onclick="currentSlide(2)" src="https://acsantangelo1907.com/cach-lam-sushi-nhat-ban/imager_188595.jpg" alt="">
                            </div>
                            <div class="list-image">
                                <img class="item-image cursor" onclick="currentSlide(3)" src="https://resources.matcha-jp.com/resize/720x2000/2017/10/08-38067.jpeg" alt="">
                            </div>
                            <div class="list-image">
                                <img class="item-image cursor" onclick="currentSlide(4)" src="https://www.sashimihome.com/wp-content/uploads/Tuy%E1%BB%87t-K%C4%A9-Ch%E1%BA%BF-Bi%E1%BA%BFn-Sushi-C%C3%A1-H%E1%BB%93i-Theo.jpg" alt="">
                            </div>
                            <div class="list-image">
                                <img class="item-image cursor" onclick="currentSlide(5)" src="https://s3-media0.fl.yelpcdn.com/bphoto/xfks5DqwHAu2MYGW8ws9sA/l.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="intro-product">
                        <div class="name-product">Sushi Nhật Bản</div>
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
                        <div class="price-product"><sup><ins>đ</ins></sup> 145.000</div>
                        <div class="delivery-time">
                            <span>Thời gian giao hàng/ <sub>nhận bàn</sub>  :</span>
                            <input type="datetime-local" class="datetime-delivery">
                            <div class="note"><em>(Quý khách vui lòng đặt hàng trước thời gian giao 30 phút hoặc trước thời gian nhận bàn 15 phút. Xin cảm ơn!)</em></div>
                        </div>
                        <div class="amount-product">
                            <span>Số lượng:</span>
                            <div class="buttons_added">
                                <input class="minus is-form" type="button" value="-">
                                <input aria-label="quantity" class="input-qty" max="20" min="1" name="" type="number" value="1">
                                <input class="plus is-form" type="button" value="+">
                            </div>
                            <span class="still-in-stock"><em> (Có sẵn 20 sản phẩm)</em></span>
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
                            <img class="img-shipper" src="{{ asset('') }}" alt="">
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
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#intro">GIỚI THIỆU</a></li>
                            <li class="nav-item"><a class="nav-link" id="nav-link-review" data-toggle="tab" href="#review">ĐÁNH GIÁ CỦA KHÁCH HÀNG</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#question">HỎI VÀ ĐÁP</a></li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="tab-content">
                            <div id="intro" class="tab-pane fade show active">
                                <label for="">
                                    <span class="span-intro">Tên sản phẩm</span>
                                    Sushi Nhật Bản
                                </label>
                                <label for="">
                                    <span class="span-intro">Quy cách sản phẩm</span>
                                    450gr/ 1 suất/ 145.000 đ
                                </label>
                                <label for="">
                                    <span class="span-intro">Thành phần nguyên liệu</span>
                                    <ul>
                                        <li>Cơm trắng</li>
                                        <li>Cá hồi tươi sống</li>
                                        <li>Tôm</li>
                                        <li>Lá kim</li>
                                        <li>Kèm rau, nước sốt chấm</li>
                                    </ul>
                                </label>
                                <label for="">
                                    <span class="span-intro">Thời gian bảo quản</span>
                                        12 tiếng
                                </label>
                                <label for="">
                                    <span class="span-intro">Mô tả sản phẩm</span>
                                    <p>Nhắc đến Sushi, nguyên cái tên của nó thôi đã trở thành đại diện cho những món ăn của Nhật Bản nổi tiếng trên khắp thế giới ngày nay. Tại nước ngoài, Sushi cũng cho người ta thấy một sự phát triển riêng biệt, mà trong đó phản ánh được nét văn hóa ẩm thực của các nước chẳng hạn như việc lấy bơ, pho mát, tôm chiên làm nguyên liệu món ăn.</p>
                                    <p>Sushi là một món ăn Nhật Bản bao gồm cơm trộn giấm kết hợp với các nguyên liệu khác. Từ xưa, người nhật đã biết cách ủ cá, tôm, hải sản vào nắm cơm để giữ được mùi vị thơm ngon. Khi ủ, cơm thường được trộn với một chút giấm cho chua chua ngọt ngọt. Mà cũng chính vì thế mà cá ủ trong cơm được chuyển hóa thành sushi.</p>
                                    <p>Các loại hải sản dùng để làm sushi có thể là cá, tôm, mực, bạch tuộc, bào ngư, … Có nhiều loại sushi, tùy theo cách chế biến của đầu bếp. Sushi thường được chấm với mù tạt (wasabi) hoặc nước tương Nhật Bản rồi thưởng thức.</p>
                                </label>
                                <label for="">
                                    <span class="span-intro">Cách thưởng thức</span>
                                    <p>Sushi thường được cắt theo khoanh, dùng ngay sau khi vừa được dọn ra, và ăn kèm với nước tương, wasabi và gừng ngâm chua. Khi dùng nên cho cả miếng vào miệng để cảm nhận trọn vẹn hương vị trong từng khoanh. Cái vị là lạ của cơm trộn giấm, vị ngầy ngậy và mát của cá sống cùng vị cay nồng của wasabi xông lên mũi.</p>
                                    <ol>
                                        <li>Đối với wasabi nên cho từ từ chút một vào bát riêng, đến khi có được độ cay mong muốn.</li>
                                        <li>Đối với nước tương: cách chấm nước tương có thể làm ảnh hưởng đến hương vị món ăn. Khi chấm, phải chấm phần bề mặt thức ăn vào nước tương, không nên chấm phần cơm vì món sushi sẽ rất dễ bị mặn.</li>
                                        <li>Khi thưởng thức nhiều loại sushi cùng một lúc, sau mỗi loại nên dùng kèm một lát gừng ngâm chua để rửa sạch vị giác, giúp hương vị sushi không bị trộn lẫn vào nhau.</li>
                                        <li>Để đảm bảo tính lịch sự và thẩm mỹ của đĩa thức ăn, nên dùng sushi theo thứ tự từ ngoài vào trong, tránh gắp ngay miếng ở giữa đĩa.</li>
                                    </ol>
                                </label>
                            </div>
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
                                <div class="item-review">
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
                                <div class="item-review">
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
                                <div class="item-review">
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
                                <div class="item-review">
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
                                <div class="item-review">
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
                            <div id="question" class="tab-pane fade">
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
                        <div class="under_line"></div>
                        <div class="product-item">
                            <div class="intro-item">
                                <div class="price-suggest"><del class="del-price">20.000</del><span>14.000</span></div>
                                <div class="sale-suggest">-30%</div>
                                <img class="img-suggest" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_p_Dsp14cX2DkdQNWW8UjTmRKeHoKJj6_E1SVjEV72ixTfcFlcCDqDTpaaePtLo189BA&usqp=CAU" alt="">
                                <div class="intro-suggest">
                                    <div class="name-suggest">Bánh Khoái</div>
                                    <div class="desc-suggest">Sản phẩm là sự kết hợp giữa vị giòn của vỏ bánh, vị ngọt của tôm, thịt và vị béo ngậy của nước chấm</div>
                                </div>
                            </div>
                            <div class="desc-item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <button class="btn-add"><span class="fas fa-cart-plus"></span></button>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="rate-suggest">
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="far fa-star"></span>
                                        </div>
                                        <div class="rate-suggest">
                                            <span>35 đánh giá</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="intro-item">
                                <div class="price-suggest"><span>20.000</span></div>
                                <img class="img-suggest" src="https://emoi.vn/wp-content/uploads/2018/11/chan-ga-ngam-sa-tac.jpeg" alt="">
                                <div class="intro-suggest">
                                    <div class="name-suggest">Chân gà sả tắc</div>
                                    <div class="desc-suggest">Sản phẩm là sự kết hợp giữa vị giòn của vỏ bánh, vị ngọt của tôm, thịt và vị béo ngậy của nước chấm</div>
                                </div>
                            </div>
                            <div class="desc-item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <button class="btn-add"><span class="fas fa-cart-plus"></span></button>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="rate-suggest">
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="far fa-star"></span>
                                        </div>
                                        <div class="rate-suggest">
                                            <span>35 đánh giá</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="intro-item">
                                <div class="price-suggest"><span>20.000</span></div>
                                <img class="img-suggest" src="https://massageishealthy.com/wp-content/uploads/2017/07/mojito-la-gi-6.jpg" alt="">
                                <div class="intro-suggest">
                                    <div class="name-suggest">Soda Phúc bồn tử</div>
                                    <div class="desc-suggest">Sản phẩm là sự kết hợp giữa vị giòn của vỏ bánh, vị ngọt của tôm, thịt và vị béo ngậy của nước chấm</div>
                                </div>
                            </div>
                            <div class="desc-item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <button class="btn-add"><span class="fas fa-cart-plus"></span></button>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="rate-suggest">
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="far fa-star"></span>
                                        </div>
                                        <div class="rate-suggest">
                                            <span>35 đánh giá</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="intro-item">
                                <div class="price-suggest"><span>20.000</span></div>
                                <img class="img-suggest" src="https://cdn.tgdd.vn/2021/01/content/3-800x500-34.jpg" alt="">
                                <div class="intro-suggest">
                                    <div class="name-suggest">Soda Trái cây</div>
                                    <div class="desc-suggest">Sản phẩm là sự kết hợp giữa vị giòn của vỏ bánh, vị ngọt của tôm, thịt và vị béo ngậy của nước chấm</div>
                                </div>
                            </div>
                            <div class="desc-item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <button class="btn-add"><span class="fas fa-cart-plus"></span></button>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="rate-suggest">
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="far fa-star"></span>
                                        </div>
                                        <div class="rate-suggest">
                                            <span>35 đánh giá</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="intro-item">
                                <div class="price-suggest"><span>20.000</span></div>
                                <img class="img-suggest" src="http://www.monngonplus.vn/images/1/1-001-mon-trang-mieng-ngon-me-ly-tu-xoai-va-dua_1556782795.jpg" alt="">
                                <div class="intro-suggest">
                                    <div class="name-suggest">Panna Cotta Xoài</div>
                                    <div class="desc-suggest">Sản phẩm là sự kết hợp giữa vị giòn của vỏ bánh, vị ngọt của tôm, thịt và vị béo ngậy của nước chấm</div>
                                </div>
                            </div>
                            <div class="desc-item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <button class="btn-add"><span class="fas fa-cart-plus"></span></button>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="rate-suggest">
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="far fa-star"></span>
                                        </div>
                                        <div class="rate-suggest">
                                            <span>35 đánh giá</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script src="../resources/js/detail-product.js"></script>
    @endsection
</body>
</html>