@extends('layout.master')

@section('title','Trang chủ')

@section('submenu')
<div id="submenu">
  <div class="container-fluid">
    <div class="row white">
      <div class="col-md-12">
        <!-- Nav pills menu con thong ke-->
        <ul class="nav nav-pills" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="pill" href="#menu1">Doanh thu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#menu2">Tổng chi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#menu3">Danh sách hóa đơn</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#menu4">Hiện trạng phòng</a>
          </li>
        </ul>
      
      </div>
    </div>
  </div>
</div>
@endsection

@section('content')
<div class="tab-content">
  <!--thong ke/ doanh thu-->
  <div id="menu1" class="container-fluid tab-pane active"><br>
    <div id="content">
      <div class="container-fluid">
        <div class="row borderbt"><!--quan li doanh thu khach san-->
          <div class="col-md-auto mr-auto">
            <h5>Doanh thu</h5>
          </div>
        </div>
        <div class="row white"><!--quan li doanh thu khach san-->
          <div class="col-md-auto mr-auto">
            <div id="dthu">
              <span>Chọn thời gian</span>
              <input type="date" name=""> - 
              <input type="date" name="" value="">
              <input type="button" name="search" value="Tìm kiếm" class="btn btn-secondary btn-sm">
              <a><i class="fas fa-file-excel fa-2x "></i></a>
            </div>
          </div>
        </div>
        <!--Danh sach doanh thu-->
        <div class="row white" >
          <div class="col-md-12">
            <div class="table-responsive" id="tbphong">
              <table class="table table-striped table-hover table-sm">
                <thead>
                  <tr>
                    <th></th>
                    <th>Lượt phòng</th>
                    <th>Số khách</th>
                    <th>Tiền phòng</th>
                    <th>Tiền dịch vụ</th>
                    <th>Khuyến mãi</th>
                    <th>Khoản khác</th>
                    <th>Trả trước</th>
                    <th>Tiền mặt</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Hôm nay</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0 VND</td>
                    <td>0 VND</td>
                    <td>0 VND</td>
                    <td>0 VND</td>
                    <td>0 VND</td>
                    <td>0 VND</td>
                  </tr>
                  <tr>
                    <td>Hôm qua</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0 VND</td>
                    <td>0 VND</td>
                    <td>0 VND</td>
                    <td>0 VND</td>
                    <td>0 VND</td>
                    <td>0 VND</td>
                  </tr>
                  <tr>
                    <td>Trong 1 tuần</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0 VND</td>
                    <td>0 VND</td>
                    <td>0 VND</td>
                    <td>0 VND</td>
                    <td>0 VND</td>
                    <td>0 VND</td>
                  </tr>
                  <tr>
                    <td>Trong 30 ngày</td>
                    <td>11</td>
                    <td>11</td>
                    <td>172,740,000 VND</td>
                    <td>184,000 VND</td>
                    <td>0 VND</td>
                    <td>0 VND</td>
                    <td>1,100,000 VND</td>
                    <td>173,409,000 VND</td>
                  </tr>
                                              <tr>
                    <td>8/2/2018</td>
                    <td>11</td>
                    <td>11</td>
                    <td>172,740,000 VND</td>
                    <td>184,000 VND</td>
                    <td>0 VND</td>
                    <td>0 VND</td>
                    <td>1,100,000 VND</td>
                    <td>173,409,000 VND</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--thong ke danh thu-->
  <div id="menu2" class="container-fluid tab-pane fade"><br>
    <div id="content">
      <div class="container-fluid">
        <div class="row borderbt"><!--quan li nhan vien-->
          <div class="col-md-auto mr-auto">
            <h5>Danh sách nhân viên</h5>
          </div>
          <div class="col-md-auto align-self-center">
            <img src="{{asset('images/icAd.png')}}" alt=""> THÊM NHÂN VIÊN
          </div>
        </div>
        <!--Danh sach nhan vien-->
        <div class="row white" >
          <div class="col-md-12">
            <div class="table-responsive" id="tbphong">
              <table class="table table-striped table-hover table-sm">
                <thead>
                  <tr>
                    <th>Họ tên</th>
                    <th>Tên đăng nhập</th>
                    <th>Tên nhóm</th>
                    <th>Điện thoại</th>
                    <th>Email</th>
                    <th>Ngày vào làm</th>
                    <th>Trạng thái</th>
                    <th>Công cụ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Kế toán 1</td>
                    <td>ketoan</td>
                    <td>Kế toán</td>
                    <td></td>
                    <td>ketoan@gmail.com</td>
                    <td>7/2/2018</td>
                    <td>Đang làm việc</td>
                    <td>
                      <a class="text-dark" href="#"><i class="fas fa-pencil-alt"></i></a>&nbsp;
                      <a class="text-dark" href="#"><i class="fas fa-trash-alt"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Kế toán 1</td>
                    <td>ketoan</td>
                    <td>Kế toán</td>
                    <td></td>
                    <td>ketoan@gmail.com</td>
                    <td>7/2/2018</td>
                    <td>Đang làm việc</td>
                    <td>
                      <a class="text-dark" href="#"><i class="fas fa-pencil-alt"></i></a>&nbsp;
                      <a class="text-dark" href="#"><i class="fas fa-trash-alt"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Kế toán 1</td>
                    <td>ketoan</td>
                    <td>Kế toán</td>
                    <td></td>
                    <td>ketoan@gmail.com</td>
                    <td>7/2/2018</td>
                    <td>Đang làm việc</td>
                    <td>
                      <a class="text-dark" href="#"><i class="fas fa-pencil-alt"></i></a>&nbsp;
                      <a class="text-dark" href="#"><i class="fas fa-trash-alt"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Kế toán 1</td>
                    <td>ketoan</td>
                    <td>Kế toán</td>
                    <td></td>
                    <td>ketoan@gmail.com</td>
                    <td>7/2/2018</td>
                    <td>Đang làm việc</td>
                    <td>
                      <a class="text-dark" href="#"><i class="fas fa-pencil-alt"></i></a>&nbsp;
                      <a class="text-dark" href="#"><i class="fas fa-trash-alt"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!---->
  <div id="menu3" class="container-fluid tab-pane fade"><br>
    <div id="content">
      <div class="container-fluid">
        <div class="row borderbt"><!--quan li luong nhan vien-->
          <div class="col-md-auto mr-auto">
            <h5>Quản lý lương</h5>
          </div>
        </div>
        <!--Danh sach luong nhan vien-->
        <div class="row white" >
          <div class="col-md-12">
            <div class="table-responsive" id="tbphong">
              <table class="table table-striped table-hover table-sm">
                <thead >
                  <tr>
                    <th>Họ tên</th>
                    <th>Mức lương</th>
                    <th>Phụ cấp</th>
                    <th>Tạm ứng</th>
                    <th>Khấu trừ</th>
                    <th>Ngày nghỉ</th>
                    <th>Lương nhận</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Kế toán 1</td>
                    <td>
                      3,000,000.00
                      <img src="{{asset('images/edit-icon.png')}}" alt="">
                    </td>
                    <td>
                      150,000.00
                      <img src="{{asset('images/add-icon.png')}}" alt="">
                    </td>
                    <td>
                      0.00
                      <img src="{{asset('images/add-icon.png')}}" alt="">
                    </td>
                    <td>
                      0.00
                      <img src="{{asset('images/add-icon.png')}}" alt="">
                    </td>
                    <td>
                      0.00
                      <img src="{{asset('images/add-icon.png')}}" alt="">
                    </td>
                    <td>3,150,000 VND</td>
                  </tr>
                  <tr>
                    <td>Kế toán 1</td>
                    <td>
                      3,000,000.00
                      <img src="{{asset('images/edit-icon.png')}}" alt="">
                    </td>
                    <td>
                      150,000.00
                      <img src="{{asset('images/add-icon.png')}}" alt="">
                    </td>
                    <td>
                      0.00
                      <img src="{{asset('images/add-icon.png')}}" alt="">
                    </td>
                    <td>
                      0.00
                      <img src="{{asset('images/add-icon.png')}}" alt="">
                    </td>
                    <td>
                      0.00
                      <img src="{{asset('images/add-icon.png')}}" alt="">
                    </td>
                    <td>3,150,000 VND</td>
                  </tr>
                  <tr>
                    <td>Kế toán 1</td>
                    <td>
                      3,000,000.00
                      <img src="{{asset('images/edit-icon.png')}}" alt="">
                    </td>
                    <td>
                      150,000.00
                      <img src="{{asset('images/add-icon.png')}}" alt="">
                    </td>
                    <td>
                      0.00
                      <img src="{{asset('images/add-icon.png')}}" alt="">
                    </td>
                    <td>
                      0.00
                      <img src="{{asset('images/add-icon.png')}}" alt="">
                    </td>
                    <td>
                      0.00
                      <img src="{{asset('images/add-icon.png')}}" alt="">
                    </td>
                    <td>3,150,000 VND</td>
                  </tr>
                  <tr>
                    <td>Kế toán 1</td>
                    <td>
                      3,000,000.00
                      <img src="{{asset('images/edit-icon.png')}}" alt="">
                    </td>
                    <td>
                      150,000.00
                      <img src="{{asset('images/add-icon.png')}}" alt="">
                    </td>
                    <td>
                      0.00
                      <img src="{{asset('images/add-icon.png')}}" alt="">
                    </td>
                    <td>
                      0.00
                      <img src="{{asset('images/add-icon.png')}}" alt="">
                    </td>
                    <td>
                      0.00
                      <img src="{{asset('images/add-icon.png')}}" alt="">
                    </td>
                    <td>3,150,000 VND</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
