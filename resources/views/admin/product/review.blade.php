@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="../../resources/css/admin.user.css">
@endsection
@section('content')
<div class="row">
    <div class="col-12 grid-margin">
      <div class="card"  style="margin: 20px;">
        <div class="card-body">
          <h4 class="card-title">Danh sách đánh giá sản phẩm (2 đánh giá)</h4>
          <div style="padding-bottom: 40px;">
            <button class="btn btn-outline-success ">
              <div style="color:rgb(236, 189, 31);" class="d-flex align-items-center">
                <span class="mdi mdi-star"></span>
                <span class="mdi mdi-star"></span>
                <span class="mdi mdi-star"></span>
                <span class="mdi mdi-star"></span>
                <span class="mdi mdi-star"></span>
              </div>
            </button>
            <button class="btn btn-outline-warning">
              <div style="color:rgb(236, 189, 31);" class="d-flex align-items-center">
                <span class="mdi mdi-star"></span>
                <span class="mdi mdi-star"></span>
                <span class="mdi mdi-star"></span>
                <span class="mdi mdi-star"></span>
                <span class="mdi mdi-star-outline"></span>
              </div>
            </button>
            <button class="btn btn-outline-info">
              <div style="color:rgb(236, 189, 31);" class="d-flex align-items-center">
                <span class="mdi mdi-star"></span>
                <span class="mdi mdi-star"></span>
                <span class="mdi mdi-star"></span>
                <span class="mdi mdi-star-outline"></span>
                <span class="mdi mdi-star-outline"></span>
              </div>
            </button>
            <button class="btn btn-outline-danger">
              <div style="color:rgb(236, 189, 31);" class="d-flex align-items-center">
                <span class="mdi mdi-star"></span>
                <span class="mdi mdi-star"></span>
                <span class="mdi mdi-star-outline"></span>
                <span class="mdi mdi-star-outline"></span>
                <span class="mdi mdi-star-outline"></span>
              </div>
            </button>
            <button class="btn btn-outline-primary">
              <div style="color:rgb(236, 189, 31);" class="d-flex align-items-center">
                <span class="mdi mdi-star"></span>
                <span class="mdi mdi-star-outline"></span>
                <span class="mdi mdi-star-outline"></span>
                <span class="mdi mdi-star-outline"></span>
                <span class="mdi mdi-star-outline"></span>
              </div>
            </button>
          </div>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="text-align: center">STT </th>
                  <th>Star Rating</th>
                  <th style="width: 45%;">Nội dung đánh giá</th>
                  <th>Khách hàng</th>
                  <th>Sản phẩm</th>
                  <th>Thời gian</th>
                  <th>Trả lời</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td style="text-align: center">1</td>
                    <td>
                        <div style="color:rgb(236, 189, 31);" class="d-flex align-items-center">
                            <span class="mdi mdi-star"></span>
                            <span class="mdi mdi-star"></span>
                            <span class="mdi mdi-star"></span>
                            <span class="mdi mdi-star"></span>
                            <span class="mdi mdi-star"></span>
                        </div>
                    </td>
                    <td>
                        <div>
                            Mình từng ăn sushi ở nhiều chỗ, cảm thấy rất ngon. Về Quảng Trị thì không thấy bán nên hơi tiếc, may mắn sao biết được nhà hàng và có đặt ăn thử. <br> Hơi bị ngon luôn á hahaha
                        </div>
                        <div>
                            <img class="image-review-item" src="https://upload.wikimedia.org/wikipedia/commons/6/60/Sushi_platter.jpg" alt="">
                            <img class="image-review-item" src="https://hieuhaisan.com/contents_hieuhaisan/uploads/images/tong-hop-sushi-nhat.jpg" alt="">
                        </div>
                    </td>
                    <td>Hoài Hương</td>
                    <td>Sushi Nhật Bản</td>
                    <td>19:30 06/08/2021</td>
                    <td><button class="btn btn-info btn-icon" data-toggle="modal" data-target="#replyModal" ><i class="mdi mdi-reply"></i></button></td>
                </tr>
                <tr>
                    <td style="text-align: center">2</td>
                    <td>
                        <div style="color:rgb(236, 189, 31);" class="d-flex align-items-center">
                            <span class="mdi mdi-star"></span>
                            <span class="mdi mdi-star"></span>
                            <span class="mdi mdi-star"></span>
                            <span class="mdi mdi-star"></span>
                            <span class="mdi mdi-star"></span>
                        </div>
                    </td>
                    <td>Rất đáng để tham khảo</td>
                    <td>Thanh Nga</td>
                    <td>Sushi Nhật Bản</td>
                    <td>19:30 06/08/2021</td>
                    <td><button class="btn btn-info btn-icon" data-toggle="modal" data-target="#replyModal" ><i class="mdi mdi-reply"></i></button></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection