<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/contact.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    @extends('layouts.user')
    @section('title','Liên hệ hỗ trợ')
    @section('content')
        <div class="container-fuild contact">
            <div class="row">
                <div class="col-md-4">
                    <div class="topic">THÔNG TIN LIÊN HỆ</div>
                    <div class="under_line"></div>
                    <div class="intro-infor">
                        <span class="name-restaurant">MAX.2LON's</span> mong muốn mang đến cho khách hàng sự hài lòng, vừa ý. Chúng tôi luôn luôn sẵn sàng trả lời những thắc mắc của các bạn. Mỗi khách hàng là một thượng đế mà chúng tôi yêu thương, tôn trọng!
                    </div>
                    <div class="intro-infor">
                        <p><i class="fas fa-home"></i>NHÀ HÀNG MAX.2LON</p>
                        <p class="extra">11 Phan Đình Phùng</p>
                        <p class="extra">TP Đông Hà, Quảng Trị</p>
                        <p><i class="fas fa-phone-alt"></i>(+386) 987 654 321</p>
                        <p><i class="fas fa-mobile-alt"></i>(+386) 40 123 456</p>
                        <p><i class="fas fa-envelope"></i>max.2lon.restaurant@gmail.com</p>
                        <p><i class="fas fa-globe-americas"></i>www.max.2lon.com</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="map" style="width: 100%; height: 400px" ></div>
                    <!--<div>
                        <img class="img-xoay" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbK5IYxqZ04qQ61E-YI4VC0tbwXAb66O2vug&usqp=CAU" alt="">
                    </div>
                    <div>
                        <img class="img-zoom" src="https://free.vector6.com/wp-content/uploads/2021/03/0000000088-co-be-dau-bep-phong-cach-chibi-de-thuong-png-3.png">
                    </div>-->
                </div>
                <div class="col-md-4">
                    <div class="topic">LIÊN LẠC</div>
                    <div class="under_line"></div>
                    <form action="">
                        <label for="name">
                            <span>Họ và tên (bắt buộc)</span>
                            <input type="text" id="name" value="Nguyễn Thị Cẩm Huyền" placeholder="Nhập họ tên của bạn">
                        </label>
                        <label for="email">
                            <span>Email (bắt buộc)</span>
                            <input type="email" id="email" value="ntchuyen.19it1@vku.udn.vn" placeholder="Nhập Email của bạn">
                        </label>
                        <label for="message">
                            <span>Tin nhắn của bạn</span>
                            <textarea name="message" id="message" cols="30" rows="8" placeholder="Nhập tin nhắn của bạn..."></textarea>
                        </label>
                        <button type="submit" class="submit">GỬI</button>
                    </form>
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
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7ZW0p0ZTdEwpt3ex9-FBrGXuCKBLjaF8&callback=initMap&libraries=&v=weekly&z=200" async></script>
        <script src="../resources/js/contact.js"></script>

    @endsection
</body>
</html>