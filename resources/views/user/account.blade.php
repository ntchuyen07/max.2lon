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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css" integrity="sha512-C8Movfk6DU/H5PzarG0+Dv9MA9IZzvmQpO/3cIlGIflmtY3vIud07myMu4M/NTPJl8jmZtt/4mC9bAioMZBBdA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('assests/css/user/layout.user.css') }}">
    <link rel="stylesheet" href="{{ asset('assests/css/user/user.account.css') }}">
    <title>Quản lý thông tin cá nhân</title>
</head>
<body>
    <div class="container-fuild">
        <div class="row mx-0">
            <div class="col-md-3 menu-account">
                <div class="content-infor">
                    <div>
                        <img class="avatar-acc" src="{{ asset(session('user')->avatar) }}" alt="">
                    </div>
                    <div style="padding-left: 20px">
                        <div class="fullname">{{session('user')->name}}</div>
                        <div class="role-acc">Thành viên</div>
                    </div>
                </div>
                <div class="tabs">
                    <div>
                        <a class="tablinks" href="{{ URL::to('/management-account/information') }}"><i class="fas fa-user-alt i-tab"></i>HỒ SƠ CÁ NHÂN </a>
                    </div>
                    <div>
                        <a class="tablinks" href="{{ URL::to('/management-account/order') }}"><i class="fas fa-shopping-cart i-tab"></i>ĐƠN HÀNG CỦA TÔI </a>
                    </div>
                    <div>
                        <a class="tablinks" href="{{ URL::to('/gio-hang-cua-toi') }}"><i class="fas fa-shopping-basket i-tab"></i>GIỎ HÀNG CỦA TÔI </a>
                    </div>
                    <div>
                        <a class="tablinks" href="{{ URL::to('/management-account/contact') }}"><i class="fas fa-info-circle i-tab"></i>LIÊN HỆ HỖ TRỢ </a>
                    </div>
                    <div>
                        <a class="tablinks" href="{{ URL::to('/management-account/post') }}"><i class="fas fa-edit i-tab"></i>BÀI VIẾT CỦA TÔI </a>
                    </div>
                    <div>
                        <a class="tablinks" href="{{ URL::to('/management-account/changepass') }}"><i class="fas fa-user-lock i-tab"></i>ĐỔI MẬT KHẨU </a>
                    </div>
                    <div>
                        <a class="tablinks" href="{{ URL::to('/logout') }}"><i class="fas fa-arrow-circle-right i-tab"></i>ĐĂNG XUẤT</a>
                    </div>
                </div>
                <div class="btn-wrap" style="margin-top: -230px;">
                    <a href="{{ URL::to('/home') }}" class="link-more"><span class="text-more"> Trở về Trang chủ</span><span class="icon"><i class="fas fa-arrow-left"></i></span></a>
                </div> 
            </div>
            {{-- <div class="col-md-3"></div> --}}
            <div class="offset-md-3 col-md-9">
               <div class="tab-content">
                @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assests/js/user/account.js') }}"></script>
</body>
</html>
