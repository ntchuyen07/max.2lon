    @extends('layouts.user')
    @section('title',$post->title)
    @section('style')
    <link rel="stylesheet" href="{{ asset('assests/css/user/user.detail-post.css') }}">
    <link rel="stylesheet" href="{{ asset('assests/css/user/user.css') }}">
    @endsection
    @section('content')
        <div class="container-fuild">
            <div class="container-fuild">
                <div class="big-theme">
                    <div class="big-topic">{{$post->title}}</div>
                    <div class="inline"></div>
                    <p class="desc-theme">Chia sẻ kinh nghiệm hay - Mỗi ngày một kiến thức mới</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="post">
                        <div class="div-img">
                            <img class="img-post" src="{{ asset($post->path)}}" alt="">
                        </div>
                        <div class="div-user">
                            <img class="user-post" src="{{asset($post->avatar)}}">
                        </div>
                        <div class="intro-post">
                            <span class="poster"><i class="fas fa-user-alt"></i>  Đăng tải bởi: <b> {{$post->name}}</b></span><span class="time-posting"><i class="fas fa-clock"></i>  Vào lúc:<b> {{$post->created_at ->format('H:i:s d-m-Y')}}</b></span><span class="amount">{{$post->view}} lượt xem</span>
                        </div>
                        <div class="title-post">
                            {{$post->title}}
                        </div>
                        <div class="content-post">
                            {!!$post->content!!}
                            <p><i><span class="fas fa-tags icon-tags"></span><b>Nấu nướng, Đồ uống</b></i></p>
                            <h5 class="amount"><i>{{$post->name}}</i></h5>
                        </div>
                    </div>
                    <div class="form-comment">
                        <div class="topic">
                            BÌNH LUẬN (12)
                            <div class="under_line" style="margin-top: 10px"></div>
                        </div>
                        <div class="add-comment">
                            <form action="">
                                <input type="text" placeholder="Thêm bình luận..." class="input-comment">
                                <a href="#" type="submit" class="btn-send"><img class="img-send" src="https://listapa.com.br/site/images/send-button.svg" alt=""></a>
                            </form>
                        </div>
                        <div id="scroll-comment">
                            <div class="item-comment">
                                <div>
                                    <img class="avatar-cmt" src="https://scr.vn/wp-content/uploads/2020/07/T%E1%BA%A3i-h%C3%ACnh-n%E1%BB%81n-%C4%91%E1%BA%B9p-nh%E1%BA%A5t-1.jpg" alt="">
                                </div>
                                <div>
                                    <div class="content-comment">
                                        <div class="user-comment">Nguyễn Thị Cẩm Huyền</div>
                                        <div class="comment">Bài viết rất bổ ích, cảm ơn rất nhiều</div>
                                    </div>
                                    <div class="react-comment"><span class="time-comment">1 ngày</span><span class="react-toggle">Thích</span><span class="reply">Phản hồi</span></div>
                                </div>
                            </div>
                            <div class="item-reply">
                                <div>
                                    <img class="avatar-reply" src="https://upanh123.com/wp-content/uploads/2020/10/tai-anh-anime-ve-lam-avatar7.jpg" alt="">
                                </div>
                                <div>
                                    <div class="content-comment">
                                        <div class="user-comment">Administrator</div>
                                        <div class="comment">Cảm ơn bạn rất nhiều, hi vọng bạn sẽ yêu thích các bài viết khác cũng như nhà hàng của chúng tôi</div>
                                    </div>
                                    <div class="react-comment"><span class="time-comment">1 ngày</span><span class="react-toggle">Thích</span><span class="reply">Phản hồi</span></div>
                                </div>
                            </div>
                            <div class="item-comment">
                                <div>
                                    <img class="avatar-cmt" src="https://scr.vn/wp-content/uploads/2020/07/T%E1%BA%A3i-h%C3%ACnh-n%E1%BB%81n-%C4%91%E1%BA%B9p-nh%E1%BA%A5t-1.jpg" alt="">
                                </div>
                                <div>
                                    <div class="content-comment">
                                        <div class="user-comment">Nguyễn Thị Cẩm Huyền</div>
                                        <div class="comment">Bài viết rất bổ ích, cảm ơn rất nhiều</div>
                                    </div>
                                    <div class="react-comment"><span class="time-comment">1 ngày</span><span class="react-toggle">Thích</span><span class="reply">Phản hồi</span></div>
                                </div>
                            </div>
                            <div class="item-reply">
                                <div>
                                    <img class="avatar-reply" src="https://upanh123.com/wp-content/uploads/2020/10/tai-anh-anime-ve-lam-avatar7.jpg" alt="">
                                </div>
                                <div>
                                    <div class="content-comment">
                                        <div class="user-comment">Administrator</div>
                                        <div class="comment">Cảm ơn bạn rất nhiều, hi vọng bạn sẽ yêu thích các bài viết khác cũng như nhà hàng của chúng tôi</div>
                                    </div>
                                    <div class="react-comment"><span class="time-comment">1 ngày</span><span class="react-toggle">Thích</span><span class="reply">Phản hồi</span></div>
                                </div>
                            </div>
                            <div class="item-comment">
                                <div>
                                    <img class="avatar-cmt" src="https://scr.vn/wp-content/uploads/2020/07/T%E1%BA%A3i-h%C3%ACnh-n%E1%BB%81n-%C4%91%E1%BA%B9p-nh%E1%BA%A5t-1.jpg" alt="">
                                </div>
                                <div>
                                    <div class="content-comment">
                                        <div class="user-comment">Nguyễn Thị Cẩm Huyền</div>
                                        <div class="comment">Bài viết rất bổ ích, cảm ơn rất nhiều</div>
                                    </div>
                                    <div class="react-comment"><span class="time-comment">1 ngày</span><span class="react-toggle">Thích</span><span class="reply">Phản hồi</span></div>
                                </div>
                            </div>
                            <div class="item-reply">
                                <div>
                                    <img class="avatar-reply" src="https://upanh123.com/wp-content/uploads/2020/10/tai-anh-anime-ve-lam-avatar7.jpg" alt="">
                                </div>
                                <div>
                                    <div class="content-comment">
                                        <div class="user-comment">Administrator</div>
                                        <div class="comment">Cảm ơn bạn rất nhiều, hi vọng bạn sẽ yêu thích các bài viết khác cũng như nhà hàng của chúng tôi</div>
                                    </div>
                                    <div class="react-comment"><span class="time-comment">1 ngày</span><span class="react-toggle">Thích</span><span class="reply">Phản hồi</span></div>
                                </div>
                            </div>
                            <div class="item-comment">
                                <div>
                                    <img class="avatar-cmt" src="https://scr.vn/wp-content/uploads/2020/07/T%E1%BA%A3i-h%C3%ACnh-n%E1%BB%81n-%C4%91%E1%BA%B9p-nh%E1%BA%A5t-1.jpg" alt="">
                                </div>
                                <div>
                                    <div class="content-comment">
                                        <div class="user-comment">Nguyễn Thị Cẩm Huyền</div>
                                        <div class="comment">Bài viết rất bổ ích, cảm ơn rất nhiều</div>
                                    </div>
                                    <div class="react-comment"><span class="time-comment">1 ngày</span><span class="react-toggle">Thích</span><span class="reply">Phản hồi</span></div>
                                </div>
                            </div>
                            <div class="item-reply">
                                <div>
                                    <img class="avatar-reply" src="https://upanh123.com/wp-content/uploads/2020/10/tai-anh-anime-ve-lam-avatar7.jpg" alt="">
                                </div>
                                <div>
                                    <div class="content-comment">
                                        <div class="user-comment">Administrator</div>
                                        <div class="comment">Cảm ơn bạn rất nhiều, hi vọng bạn sẽ yêu thích các bài viết khác cũng như nhà hàng của chúng tôi</div>
                                    </div>
                                    <div class="react-comment"><span class="time-comment">1 ngày</span><span class="react-toggle">Thích</span><span class="reply">Phản hồi</span></div>
                                </div>
                            </div>
                            <div class="item-comment">
                                <div>
                                    <img class="avatar-cmt" src="https://scr.vn/wp-content/uploads/2020/07/T%E1%BA%A3i-h%C3%ACnh-n%E1%BB%81n-%C4%91%E1%BA%B9p-nh%E1%BA%A5t-1.jpg" alt="">
                                </div>
                                <div>
                                    <div class="content-comment">
                                        <div class="user-comment">Nguyễn Thị Cẩm Huyền</div>
                                        <div class="comment">Bài viết rất bổ ích, cảm ơn rất nhiều</div>
                                    </div>
                                    <div class="react-comment"><span class="time-comment">1 ngày</span><span class="react-toggle">Thích</span><span class="reply">Phản hồi</span></div>
                                </div>
                            </div>
                            <div class="item-reply">
                                <div>
                                    <img class="avatar-reply" src="https://upanh123.com/wp-content/uploads/2020/10/tai-anh-anime-ve-lam-avatar7.jpg" alt="">
                                </div>
                                <div>
                                    <div class="content-comment">
                                        <div class="user-comment">Administrator</div>
                                        <div class="comment">Cảm ơn bạn rất nhiều, hi vọng bạn sẽ yêu thích các bài viết khác cũng như nhà hàng của chúng tôi</div>
                                    </div>
                                    <div class="react-comment"><span class="time-comment">1 ngày</span><span class="react-toggle">Thích</span><span class="reply">Phản hồi</span></div>
                                </div>
                            </div>
                            <div class="item-comment">
                                <div>
                                    <img class="avatar-cmt" src="https://scr.vn/wp-content/uploads/2020/07/T%E1%BA%A3i-h%C3%ACnh-n%E1%BB%81n-%C4%91%E1%BA%B9p-nh%E1%BA%A5t-1.jpg" alt="">
                                </div>
                                <div>
                                    <div class="content-comment">
                                        <div class="user-comment">Nguyễn Thị Cẩm Huyền</div>
                                        <div class="comment">Bài viết rất bổ ích, cảm ơn rất nhiều</div>
                                    </div>
                                    <div class="react-comment"><span class="time-comment">1 ngày</span><span class="react-toggle">Thích</span><span class="reply">Phản hồi</span></div>
                                </div>
                            </div>
                            <div class="item-reply">
                                <div>
                                    <img class="avatar-reply" src="https://upanh123.com/wp-content/uploads/2020/10/tai-anh-anime-ve-lam-avatar7.jpg" alt="">
                                </div>
                                <div>
                                    <div class="content-comment">
                                        <div class="user-comment">Administrator</div>
                                        <div class="comment">Cảm ơn bạn rất nhiều, hi vọng bạn sẽ yêu thích các bài viết khác cũng như nhà hàng của chúng tôi</div>
                                    </div>
                                    <div class="react-comment"><span class="time-comment">1 ngày</span><span class="react-toggle">Thích</span><span class="reply">Phản hồi</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="suggest-post">
                        <div class="topic">Bài viết gợi ý
                            <div class="under_line"></div>
                        </div>
                        <div>
                            <a href=""  class="row item-post">
                                <div class="col-md-4">
                                    <img class="img-suggest" src="https://i.pinimg.com/originals/f7/c3/87/f7c3871f0b1bd5f9b63f67c067f835a4.jpg" alt="">
                                </div>
                                <div class="col-md-8">
                                    <div class="title-suggest">Gỏi cuốn thịt gà chấm mắm me - ngon không thể cưỡng! Đơn giản dễ làm</div>
                                    <div class="time-suggest"><i class="fas fa-clock"></i>  06/08/2021  <i class="fas fa-user-alt"></i>  Administrator</div>
                                </div>
                            </a>
                        </div>
                        <div class="row item-post">
                            <div class="col-md-4">
                                <img class="img-suggest" src="https://vnn-imgs-f.vgcloud.vn/2019/05/22/10/cach-chon-rau-cu-qua-sach-tuoi-ngon-khong-ngam-doc.jpg">
                            </div>
                            <div class="col-md-8">
                                <div class="title-suggest">Mách bạn cách lựa chọn rau củ tươi ngon</div>
                                <div class="time-suggest"><i class="fas fa-clock"></i>  06/08/2021  <i class="fas fa-user-alt"></i>  Administrator</div>
                            </div>
                        </div>
                        <div class="row item-post">
                            <div class="col-md-4">
                                <img class="img-suggest" src="https://nhahang37hungvuong.com/wp-content/uploads/2020/10/hai-san-hau-nuong-mo-hanh.jpg">
                            </div>
                            <div class="col-md-8">
                                <div class="title-suggest">Hàu nướng mỡ hành</div>
                                <div class="time-suggest"><i class="fas fa-clock"></i>  06/08/2021  <i class="fas fa-user-alt"></i>  Administrator</div>
                            </div>
                        </div>
                        <div class="row item-post">
                            <div class="col-md-4">
                                <img class="img-suggest" src="https://photo-cms-baonghean.zadn.vn/w607/Uploaded/2021/nkdkswkqoc/201704/original/images1869169_muc_nhay_luoc.jpg">
                            </div>
                            <div class="col-md-8">
                                <div class="title-suggest">Mực hấp gừng thơm lừng nức mũi</div>
                                <div class="time-suggest"><i class="fas fa-clock"></i>  06/08/2021  <i class="fas fa-user-alt"></i>  Administrator</div>
                            </div>
                        </div>
                    </div>
                    <div class="tags-post">
                        <div class="topic">Tags
                            <div class="under_line"></div>
                        </div>
                        <div class="row div-tags">
                            <a href="" class="tags">Ẩm thực</a>
                            <a href="" class="tags">Nấu nướng</a>
                            <a href="" class="tags">Món Việt</a>
                            <a href="" class="tags">Gà</a>
                            <a href="" class="tags">Đồ uống</a>
                            <a href="" class="tags">Bánh</a>
                            <a href="" class="tags">Trái cây</a>
                            <a href="" class="tags">Món Âu</a>
                            <a href="" class="tags">Nhà hàng</a>
                            <a href="" class="tags">Kinh nghiệm</a>
                            <a href="" class="tags">Rau củ</a>
                            <a href="" class="tags">Kem</a>
                            <a href="" class="tags">Thịt</a>
                            <a href="" class="tags">Hải sản</a>
                        </div>
                    </div>
                    <div class="suggest-post">
                        <div class="topic">Phổ biến nhất
                            <div class="under_line"></div>
                        </div>
                        <div>
                            <a href=""  class="row item-post">
                                <div class="col-md-4">
                                    <img class="img-suggest" src="https://jes.edu.vn/wp-content/uploads/2020/05/bento-4.jpg">
                                </div>
                                <div class="col-md-8">
                                    <div class="title-suggest">Làm cơm Bento cho bé bữa trưa vừa ngon lại an toàn tại trường</div>
                                    <div class="time-suggest"><i class="fas fa-clock"></i>  06/08/2021  <i class="fas fa-user-alt"></i>  Administrator</div>
                                </div>
                            </a>
                        </div>
                        <div class="row item-post">
                            <div class="col-md-4">
                                <img class="img-suggest" src="https://rockit.vn/wp-content/uploads/2018/09/cach-lam-sua-chua-hoa-qua.jpg" alt="">
                            </div>
                            <div class="col-md-8">
                                <div class="title-suggest">Công thức làm sữa chua trái cây đơn giản</div>
                                <div class="time-suggest"><i class="fas fa-clock"></i>  06/08/2021  <i class="fas fa-user-alt"></i>  Administrator</div>
                            </div>
                        </div>
                        <div class="row item-post">
                            <div class="col-md-4">
                                <img class="img-suggest" src="https://thue.today/media/images/upload/B%C3%A0i%20Vi%E1%BA%BFt/Nha%20hang%20-%20Khach%20san/pha%20ch%E1%BA%BF%20cocktail%20t%E1%BA%A1i%20nh%C3%A0.jpg">
                            </div>
                            <div class="col-md-8">
                                <div class="title-suggest">Công thức pha chế Cocktail đơn giản tại nhà</div>
                                <div class="time-suggest"><i class="fas fa-clock"></i>  06/08/2021  <i class="fas fa-user-alt"></i>  Administrator</div>
                            </div>
                        </div>
                        <div class="row item-post">
                            <div class="col-md-4">
                                <img class="img-suggest" src="https://i.pinimg.com/originals/f7/c3/87/f7c3871f0b1bd5f9b63f67c067f835a4.jpg" alt="">
                            </div>
                            <div class="col-md-8">
                                <div class="title-suggest">Gỏi cuốn thịt gà chấm mắm me</div>
                                <div class="time-suggest"><i class="fas fa-clock"></i>  06/08/2021  <i class="fas fa-user-alt"></i>  Administrator</div>
                            </div>
                        </div>
                    </div>
                    <div class="tags-post">
                        <div class="topic">
                            Tìm kiếm bài viết
                            <div class="under_line"></div>
                        </div>
                        <div>
                            <input type="text" placeholder=" Search..." class="in-search">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
