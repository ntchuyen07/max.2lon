<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="../resources/css/login.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xác thực tài khoản</title>
</head>
<body>
    <div class="container-fuild">
        <div class="cont">
            <div class="form sign-in"> 
                <h2>Mừng bạn quay trở lại,</h2>
                <form action="../Model/login.php" method="POST">
                    <label>
                        <span>Email</span>
                        <input type="email" name="email" required="">
                    </label>
                    <label>
                        <span>Mật khẩu</span>
                        <input type="password" name="password" required="">
                    </label>  
                    <input type="submit" value="Đăng nhập" required="" class="submit">
                    <p class="forgot-pass"><a href="../View/forgotpass.php" class="forgot-pass">Quên mật khẩu?</a></p>
                </form>
                <div class="social-media">
                    <ul>
                        <li><span class="log-gg"><img class="img-gg" src="https://brasol.vn/public/ckeditor/uploads/tin-tuc/13-logo-google.png" alt=""> Đăng nhập bằng Google</span></li>
                    </ul>
                </div>
                 <a href="home" class="back-home">
                    <i class="fas fa-home"></i> Trở về trang chủ</a>
            </div>
            <div class="sub-cont">
                <div class="img">
                    <div class="img-text m-up">
                        <h2>Xin Chào Bạn!!</h2>
                        <p>Đăng ký và khám phá nhiều cơ hội mới!</p>
                    </div>
                    <div class="img-text m-in">
                        <h2>Một trong số chúng tôi?</h2>
                        <p>Nếu bạn đã có tài khoản, chỉ cần đăng nhập. Chúng tôi rất nhớ bạn!</p>
                    </div>
                    <div class="img-btn">
                        <span class="m-up">Đăng ký</span>
                        <span class="m-in">Đăng nhập</span>
                    </div>
                </div>
                <div class="form sign-up">
                    <h2 style="margin-top: -30px;">Tôi là thành viên mới,</h2>
                    <form action="" method="POST">
                        <label>
                            <span>Họ và tên</span>
                            <input type="text" name="name" required="">
                        </label>
                        <label>
                            <span>Email</span>
                            <input type="email" name="email" required="">
                        </label>
                        <label>
                            <span>Mật khẩu</span>
                            <input type="password" name="password" required="">
                        </label>
                        <label>
                            <span>Xác nhận mật khẩu</span>
                            <input type="password" name="repassword" required="">
                        </label>
                        <label>
                            <span>Số điện thoại</span>
                            <input type="text" name="phone">
                        </label>
                        <input type="submit" value="Đăng ký" name="submit" class="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="../resources/js/login.js"></script>
</body>
</html>