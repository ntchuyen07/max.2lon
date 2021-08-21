@extends('layouts.admin')
@section('style')
    <link rel="stylesheet" href="../../resources/css/admin.questions.css">
@endsection
@section('content')
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Quản lý danh mục</h4>
                <div class="table-responsive" style="width: 100%">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>STT </th>
                                <th style="width: 17%">Thông tin người dùng </th>
                                <th>Nội dung </th>
                                <th style="width: 11%">Sản phẩm </th>
                                <th> Trả lời </th>
                                <th>Hoạt động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Nguyễn Thị Cẩm Huyền <br><br>14:20 08/08/2021</td>
                                <td>Cho em hỏi là một suất này đủ cho bao nhiêu người ăn ạ</td>
                                <td>Sushi Nhật Bản</td>
                                <td><button class="btn btn-info btn-icon" data-toggle="modal" data-target="#replyModal" ><i class="mdi mdi-reply"></i></button></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Nguyễn Thị Cẩm Huyền <br><br>14:20 08/08/2021</td>
                                <td>Cho em hỏi là một suất này đủ cho bao nhiêu người ăn ạ</td>
                                <td>Sushi Nhật Bản</td>
                                <td><button class="btn btn-info btn-icon" data-toggle="modal" data-target="#replyModal" ><i class="mdi mdi-reply"></i></button></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Nguyễn Thị Cẩm Huyền <br><br>14:20 08/08/2021</td>
                                <td>Cho em hỏi là một suất này đủ cho bao nhiêu người ăn ạ</td>
                                <td>Sushi Nhật Bản</td>
                                <td><button class="btn btn-info btn-icon" data-toggle="modal" data-target="#replyModal" ><i class="mdi mdi-reply"></i></button></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Nguyễn Thị Cẩm Huyền <br><br>14:20 08/08/2021</td>
                                <td>Cho em hỏi là một suất này đủ cho bao nhiêu người ăn ạ</td>
                                <td>Sushi Nhật Bản</td>
                                <td><button class="btn btn-info btn-icon" data-toggle="modal" data-target="#replyModal" ><i class="mdi mdi-reply"></i></button></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Nguyễn Thị Cẩm Huyền <br><br>14:20 08/08/2021</td>
                                <td>Cho em hỏi là một suất này đủ cho bao nhiêu người ăn ạ</td>
                                <td>Sushi Nhật Bản</td>
                                <td><button class="btn btn-info btn-icon" data-toggle="modal" data-target="#replyModal" ><i class="mdi mdi-reply"></i></button></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Nguyễn Thị Cẩm Huyền <br><br>14:20 08/08/2021</td>
                                <td>Cho em hỏi là một suất này đủ cho bao nhiêu người ăn ạ</td>
                                <td>Sushi Nhật Bản</td>
                                <td><button class="btn btn-info btn-icon" data-toggle="modal" data-target="#replyModal" ><i class="mdi mdi-reply"></i></button></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>

        
        </div>

        
  </div>


  <div class="admin-question-model modal fade" id="replyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div  class="modal-dialog" role="document">
      <div style="width: 700px;" class="modal-content">
        <div class="modal-header" style="padding: 10px 16px;">
          <h5 class="modal-title"id="exampleModalLabel">Sushi Nhật Bản <a href="http://localhost/max.2lon/public/chi-tiet-san-pham-sushi" target="_blank" class="link-product"><em>Xem chi tiết sản phẩm</em></a></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <div id="scroll-comment">
                <div id="group-comment">
                    <div class="item-comment">
                        <div>
                            <img class="avatar-cmt" src="https://scr.vn/wp-content/uploads/2020/07/T%E1%BA%A3i-h%C3%ACnh-n%E1%BB%81n-%C4%91%E1%BA%B9p-nh%E1%BA%A5t-1.jpg" alt="">
                        </div>
                        <div>
                            <div class="content-comment">
                                <div class="user-comment">Nguyễn Thị Cẩm Huyền</div>
                                <div class="comment">Cho em hỏi là một suất này đủ cho bao nhiêu người ăn ạ</div>
                                <div class="react-comment"><span class="time-comment">1 ngày</span><span class="reply">Trả lời</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-reply">
                        <div class="form-reply-wrap">
                            <div class="item-reply">
                                <div>
                                    <img class="avatar-reply" src="https://upanh123.com/wp-content/uploads/2020/10/tai-anh-anime-ve-lam-avatar7.jpg" alt="">
                                </div>
                                <div>
                                    <div class="content-reply">
                                        <div class="user-comment">MAX.2LON <span class="role"><em>Quản trị viên</em></span></div>
                                        <div class="comment">Chào bạn Cẩm Huyền, sushi Nhật bán với 450gr/ suất nên có thể đủ cho ba người ăn ạ</div>
                                        <div class="react-comment"><span class="time-comment">1 ngày</span><span class="reply">Trả lời</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-reply">
                                <div>
                                    <img class="avatar-reply" src="https://scr.vn/wp-content/uploads/2020/07/H%C3%ACnh-%C4%91%E1%BA%A1i-di%E1%BB%87n-%C4%91%E1%BA%B9p-cho-con-g%C3%A1i.jpg" alt="">
                                </div>
                                <div>
                                    <div class="content-reply">
                                        <div class="user-comment">Hoài Phương</div>
                                        <div class="comment">Nếu em đặt mà không dùng liền có để lâu được không ạ</div>
                                        <div class="react-comment"><span class="time-comment">1 ngày</span><span class="reply">Trả lời</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-reply">
                                <div>
                                    <img class="avatar-reply" src="https://upanh123.com/wp-content/uploads/2020/10/tai-anh-anime-ve-lam-avatar7.jpg" alt="">
                                </div>
                                <div>
                                    <div class="content-reply">
                                        <div class="user-comment">MAX.2LON <span class="role"><em>Quản trị viên</em></span></div>
                                        <div class="comment">Chào bạn Hoài Phương, sushi Nhật ngon hơn khi ăn liền, tuy nhiên bạn cũng có thể để lâu hơn một chút miễn là trong thời gian cho phép. Bạn có thể tham khảo cách bảo quản của chúng tôi ở phần giới thiệu. Trân trọng!</div>
                                        <div class="react-comment"><span class="time-comment">1 ngày</span><span class="reply">Trả lời</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
                <div class="form-group mb-0">
                  <label for="message-text" class="col-form-label ">Nội dung phản hồi:</label>
                  <textarea class="form-control" id="message-text"></textarea>
                </div>
          </form>
        </div>
        <div class="modal-footer pt-0 pt-0">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          <button type="button" class="btn btn-primary">Phản hồi</button>
        </div>
      </div>
    </div>
  </div>
@endsection