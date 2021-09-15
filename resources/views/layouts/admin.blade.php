m<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MAX.2LON Restaurant Admin</title>
    <link rel="stylesheet" href="{{ asset('adminTemplate/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminTemplate/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('adminTemplate/assets/css/style.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assests/css/admin/admin.custom.css') }}">
    @yield('style')
    <!-- End layout styles -->
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html"><img src="https://webneel.com/sites/default/files/images/manual/logo-restaurant/best-restaurant-logo-design%20(32).gif" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('adminTemplate/assets/images/logo-mini.svg') }}" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="admin-search-form form-control bg-transparent border-0" placeholder="Tìm kiếm...">
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="{{ asset('adminTemplate/assets/images/faces/face1.jpg') }}" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-white">Administrator</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{URL::to('/admin/logout')}}">
                  <i class="mdi mdi-logout mr-2 text-primary"></i> Logout </a>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email-outline"></i>
                <span class="count-symbol bg-warning"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0">Messages</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="{{ asset('adminTemplate/assets/images/faces/face4.jpg') }}" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                    <p class="text-gray mb-0"> 1 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="{{ asset('adminTemplate/assets/images/faces/face2.jpg') }}" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                    <p class="text-gray mb-0"> 15 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="{{ asset('adminTemplate/assets/images/faces/face3.jpg') }}" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                    <p class="text-gray mb-0"> 18 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">4 new messages</h6>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count-symbol bg-danger"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-calendar"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                    <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-settings"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                    <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-link-variant"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                    <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">See all notifications</h6>
              </div>
            </li>
            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-power"></i>
              </a>
            </li>
            <li class="nav-item nav-settings d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-format-line-spacing"></i>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="{{ asset('adminTemplate/assets/images/faces/face1.jpg') }}" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">Administrator</span>
                  <span class="text-secondary text-small role"><em>Quản trị viên</em></span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::to('admin/dashboard') }}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item sidebar-actions" style="margin-top: -15px;">
              <span class="nav-link">
                <div class="border-bottom">
                  <h6 class="font-weight-normal mb-3">Quản lý nhà hàng</h6>
                </div>
              </span>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Danh mục</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-folder-multiple menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ URL::to('admin/management-categories') }}">Danh sách</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ URL::to('admin/category/create') }}">Thêm mới</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic-menu" aria-expanded="false" aria-controls="ui-basic-menu">
                <span class="menu-title">Thực đơn</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-food-fork-drink menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic-menu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ URL::to('admin/management-products') }}">Danh sách</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ URL::to('admin/product/create') }}">Thêm mới</a></li>
                  <li class="nav-item"> <a class="nav-link" href="./add-sale">Giảm giá</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./intro-restaurant">
                <span class="menu-title">Giới thiệu nhà hàng</span>
                <i class="mdi mdi-home-variant menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::to('admin/management-user') }}">
                <span class="menu-title">Người dùng</span>
                <i class="mdi mdi-account-box menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::to('admin/management-questions') }}">
                <span class="menu-title">Hỏi đáp</span>
                <i class="mdi mdi-comment-question-outline menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::to('admin/management-contacts') }}">
                <span class="menu-title">Hỗ trợ</span>
                <i class="mdi mdi-help-circle menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Đơn hàng</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-medical-bag menu-icon"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{URL::to('admin/management-orders')}}"> Đặt hàng </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Đang giao </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Đã giao </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> Đã hủy </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> Đặt bàn </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::to('admin/management-review') }}">
                <span class="menu-title">Đánh giá</span>
                <i class="mdi mdi-star-circle menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::to('admin/management-chart') }}">
                <span class="menu-title">Thống kê</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
              </a>
            </li>
            <li class="nav-item sidebar-actions">
              <span class="nav-link">
                <div class="border-bottom">
                  <h6 class="font-weight-normal mb-3">Quản lý bài viết</h6>
                </div>
                <a href="{{ URL::to('admin/post/create')}}" class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Đăng bài viết</a>
              </span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::to('admin/management-posts') }}">
                <span class="menu-title">Danh sách bài viết</span>
                <i class="mdi mdi-view-list menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::to('admin/post/check')}}">
                <span class="menu-title">Kiểm duyệt bài viết</span>
                <i class="mdi mdi-table-edit menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::to('admin/post/comment')}}">
                <span class="menu-title">Bình luận</span>
                <i class="mdi mdi-comment menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          @yield('content')
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('adminTemplate/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('adminTemplate/assets/vendors/chart.js/Chart.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('adminTemplate/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('adminTemplate/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('adminTemplate/assets/js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('adminTemplate/assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('adminTemplate/assets/js/todolist.js') }}"></script>
    @yield('js')
  </body>
</html>