@extends('user.account')
@section('content')
<div id="mypost" class="tabcontent">
    <div class="buttons" style="margin-top:-40px">
        <a href="{{URL::to('/chia-se-bai-viet')}}" target="_blank">
            <button class="blob-btn">
                Đăng bài viết
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
    <table style="width: 100%;" class="table-bordered">
        <tr>
            <th>STT</th>
            <th>Tiêu đề bài viết</th>
            <th>Lượt xem</th>
            <th>Lượt bình luận</th>
            <th>Tình trạng</th>
        </tr>
        @foreach ($posts as $index=>$post)
        <tr>
            <td class="center-post">{{$index+1}}</td>
            <td><a href="{{URL::to('/post/' .$post->slug )}}" class="name-mypost" target="_blank">{{$post->title}}</a></td>
            <td class="center-post">{{$post->view}}</td>
            <td class="center-post">40</td>
            @if ($post->isCheck==2)
            <th>Chưa duyệt</th>
            @else
            <th>Đã duyệt</th> 
            @endif
        </tr>
        @endforeach
    </table>
</div>
@endsection