@extends('user.account')
@section('content')
<div id="infor" class="tabcontent">
    <form action="{{URL::to('/management-account/update')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row change-img">
            <div class="col-md-7 infor-form">
                    <label>
                        <span class="span-infor">Họ và tên:</span>
                        <input name="name" class="input-infor" type="text" value="{{ session('user')->name }}" required>
                    </label>
                    <label>
                        <span class="span-infor">Email:</span>
                        <input name="email" class="input-infor" type="email" value="{{ session('user')->email }}" required disabled>
                    </label>
                    <label>
                        <span class="span-infor">Số điện thoại:</span>
                        <input name="phone" class="input-infor" type="text" value="{{ session('user')->phone }}" required>
                    </label>
                    <label>
                        <span class="span-infor">Địa chỉ:</span>
                        <input name="address" class="input-infor" type="text" value="{{ session('user')->address }}">
                    </label>
                    <button class="btn-update" type="submit">CẬP NHẬT</button>
            </div>
            <div class="col-md-4 change-img">
                <img class="img-change" src="{{ asset(session('user')->avatar) }}" alt="">
                <input type="file" name="image" id="image" onchange="readURL(this);" style="display: none;" accept="image/*">
                <label for="image" class="label-img" >
                <img class="img-add-avatar" src="https://cdn.iconscout.com/icon/premium/png-512-thumb/camera-1564671-1325543.png" alt=""></label>
            </div>
        </div>
    </form>
</div>
@endsection