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
    <link rel="stylesheet" type="text/css" href="../resources/css/user.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xác thực tài khoản</title>
</head>
<body>
    <div class="container-fuild">
        <div class="authen">
            <form action="" method="POST">
                <div class="form-group-pass">
                    <label>Xác nhận mã code</label>
                    <input type="password" class="form-control input-lg" required/>
                </div>
                <div class="buttons" >
                    <a href="#">
                        <button class="blob-btn">
                            XÁC NHẬN
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
            </form>
        </div>
    </div>
    <script type="text/javascript" src="../resources/js/login.js"></script>
</body>
</html>