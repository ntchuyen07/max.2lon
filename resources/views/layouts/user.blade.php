<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Arapey' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Arima Madurai' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Coiny' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css" integrity="sha512-C8Movfk6DU/H5PzarG0+Dv9MA9IZzvmQpO/3cIlGIflmtY3vIud07myMu4M/NTPJl8jmZtt/4mC9bAioMZBBdA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('assests/css/user/layout.user.css')}}">
    <title>@yield('title')</title>
    @yield('style')
</head>
<body>
    <header>
        <div id="app-header" class="header-nav navbar">
          <a class="navbar-brand" href="home">
            <img class="img-logo" src="https://webneel.com/sites/default/files/images/manual/logo-restaurant/best-restaurant-logo-design%20(32).gif" alt="Logo" >
          </a>
            <ul class="nav nav-pills justify-content-end">
                <li class="nav-item active">
                  <a class="nav-link select" href="{{ URL::to('/') }}">Trang chủ</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link select dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-current="page" href="{{URL::to('/menu/0')}}">Menu</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    @foreach (session('categories') as $category)
                      <a class="dropdown-item" href="{{URL::to('/menu/' .$category->id)}}">{{ $category->name }}</a>
                    @endforeach
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link select" href="{{ URL::to('/list-posts') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link select" href="{{ URL::to('/ve-chung-toi') }}">Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link select" href="{{ URL::to('contact') }}">Liên hệ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link select" href="{{ URL::to('gio-hang-cua-toi') }}">Giỏ hàng</a>
                </li>
                  @if (session('user'))
                    <li class="nav-item dropdown">
                      <a class="nav-link select dropdown-toggle" id="navbarDropdownAccountLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-current="page" href="{{ URL::to('/management-account')}}">
                          <img src="{{ asset(session('user')->avatar) }}" alt="" class="avatar-user-home">
                          {{session('user')->name}}
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownAccountLink">
                          <a class="dropdown-item" href="{{ URL::to('/management-account')}}">Quản lý tài khoản</a>
                          <a class="dropdown-item" href="{{ URL::to('/logout')}}" style="display: block ">Đăng xuất</a>
                      </div>
                    </li>
                  @else
                    <li class="nav-item">
                        <a class="nav-link select" href="{{ URL::to('tai-khoan') }}">Tài khoản</a>
                    </li>
                  @endif
              </ul>
        </div>
    </header>
    @yield('content')
    <button onclick="topFunction()" id="BtnTop" title="Trở về đầu trang">
      <i class="fas fa-chevron-up"></i><br>
      Top</button>
    	<footer>
        <div class="container-fluid" style="padding-top: 70px;padding-bottom: 70px;padding-left: 70px;padding-right: 70px;background-color:  #191919;">
          <div class="row">
            <div class="col-sm-3">
              <h3>MUA NGAY</h3>
              <p>Nhà hàng Max.2Lon là nhà hàng luôn quan tâm chăm chút đến từng món ăn cho quý khách. Thực khách đến đây là để trải nghiệm những hương vị, sự tinh túy gói gọn trong từng món ăn, từng miếng gà, lát thịt.</p>
              <button class="send" style="border-radius: 4px;width: 30%;">MUA NGAY</button>
            </div>
            <div class="col-sm-3">
              <h3>CÁC NỀN TẢNG KHÁC</h3>
            </div>
            <div class="col-sm-3">
              <h3>VỀ CHÚNG TÔI</h3>
              <p>Sứ mệnh của chúng tôi là tạo ra những món ăn mang mỹ vị của cuộc sống</p>
      
               <p><i class="fas fa-phone-alt"></i>(+386) 40 123 456</p>
               <p><i class="fas fa-envelope"></i>info@barber.com</p>
               <p><i class="fas fa-home"></i>www.barber.com</p>
            </div>
            <div class="col-sm-3">
              <h3>THỜI GIAN MỞ CỬA</h3><br>
              <div class="start">
                <p><span class="day">Monday</span><span class="hour">08:00-15:00</span></p>
                <p><span class="day">Tuesday</span><span class="hour">10:00-16:00</span></p>
                <p><span class="day">Wednesday</span><span class="hour">08:00-15:00</span></p>
                <p><span class="day">Thursday</span><span class="hour">08:00-18:00</span></p>
                <p><span class="day">Friday</span><span class="hour">07:00-19:00</span></p>
                <p><span class="day">Saturday</span><span class="hour">CLOSED</span></p>
                <p><span class="day">Sunday</span><span class="hour">CLOSED</span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid" style="text-align: center;padding: 20px;">
          <h4>MAX.2LON RESTAURANT</h4>
          <p>11 Phan Đình Phùng, phường 1, thành phố Đông Hà, tỉnh Quảng Trị</a></p>
        </div>
      </footer>
    
    <script src="../resources/js/user.js"></script>
</body>
</html>