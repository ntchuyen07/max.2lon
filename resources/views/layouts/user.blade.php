<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../resources/css/user.css">
    <title>@yield('title')</title>
    @yield('style')
</head>
<body>
    <header>
        <div class="header-nav navbar">
          <a class="navbar-brand" href="home">
            <img class="img-logo" src="https://webneel.com/sites/default/files/images/manual/logo-restaurant/best-restaurant-logo-design%20(32).gif" alt="Logo" >
          </a>
            <ul class="nav nav-pills justify-content-end">
                <li class="nav-item active">
                  <a class="nav-link select" href="{{ URL::to('/') }}">Trang chủ</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link select dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-current="page" href="menu">Menu</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="menu">Đồ ăn</a>
                    <a class="dropdown-item" href="#">Đồ uống</a>
                    <a class="dropdown-item" href="#">Đồ ngọt</a>
                    <a class="dropdown-item" href="#">Trái cây</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link select" href="{{ URL::to('/cach-lam-tra-bi-dao') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link select" href="#">Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link select" href="{{ URL::to('contact') }}">Liên hệ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link select" href="{{ URL::to('gio-hang-cua-toi') }}">Giỏ hàng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link select" href="{{ URL::to('login') }}">Tài khoản</a>
                </li>
              </ul>
        </div>
    </header>
    @yield('content')
    <button onclick="topFunction()" id="BtnTop" title="Trở về đầu trang">
      <i class="fas fa-chevron-up"></i><br>
      Top</button>
    <footer>

    </footer>
    <script src="../resources/js/user.js"></script>
</body>
</html>