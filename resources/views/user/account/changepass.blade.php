@extends('user.account')
@section('content')
<div id="changepass" class="tabcontent">
    <form action="">
        <div class="form-group-pass">
            <label>Mật khẩu cũ</label>
            <input type="password" class="form-control input-lg" required/>
       </div>
       <div class="form-group-pass">
            <label>Mật khẩu mới</label>
            <input type="password" class="form-control input-lg" required/>
        </div>
        <div class="form-group-pass">
            <label>Xác nhận mật khẩu</label>
            <input type="password" class="form-control input-lg" required/>
        </div>
        <div class="buttons" >
            <a href="#">
                <button class="blob-btn">
                    CẬP NHẬT
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
    </form>
</div>
@endsection