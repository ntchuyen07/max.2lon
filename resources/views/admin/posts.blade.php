@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="../../resources/css/admin.user.css">
@endsection
@section('content')
<div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Quản lý bài viết</h4>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>STT </th>
                  <th>Tiêu đề bài viết </th>
                  <th>Tác giả</th>
                  <th>Lượt xem</th>
                  <th>Lượt bình luận</th>
                  <th>Hoạt động</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td>1</td>
                    <td>Cách làm trà bí đao</td>
                    <td>Administrator</td>
                    <td>118</td>
                    <td>240</td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Thử làm ngay món gà nướng muối ngon mê mẩn!</td>
                    <td>Administrator</td>
                    <td>118</td>
                    <td>240</td>
                    <td></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Làm ngay món gà rang cay ngon hết xẩy cho ngày thời tiết ẩm ương!</td>
                    <td>Administrator</td>
                    <td>118</td>
                    <td>240</td>
                    <td></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Cách làm chân gà chiên nước mắm đậm đà, ngon tuyệt cú mèo!</td>
                    <td>Administrator</td>
                    <td>118</td>
                    <td>240</td>
                    <td></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>TOP 10 món ăn đặc sản ở Đà Nẵng không thể bỏ qua !</td>
                    <td>Administrator</td>
                    <td>118</td>
                    <td>240</td>
                    <td></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Những thực phẩm vàng để tăng sức đề kháng trong mùa dịch</td>
                    <td>Administrator</td>
                    <td>118</td>
                    <td>240</td>
                    <td></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Hàu nướng mỡ hành</td>
                    <td>Administrator</td>
                    <td>118</td>
                    <td>240</td>
                    <td></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Cốm - món quà mùa thu của người Hà Nội</td>
                    <td>Administrator</td>
                    <td>118</td>
                    <td>240</td>
                    <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection