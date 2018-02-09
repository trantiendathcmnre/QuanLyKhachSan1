<!doctype html>
<html lang="en">
  <head>
    <!--
      Management for Hotel 307
      Author: Tran Tien Dat
      Date: 8/2/2018 
    -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('plugin/font_awesome/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <title>Thống kê</title>  
    
  </head>
  <body>
    <!--header Logo khách sạn và menu ngang-->
    <header id="header">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-auto mr-auto">
            <div id="logo">
              <img src="{{asset('images/logo.png')}}" alt="307 Hotel" style="width: 80px; height: 35px">
              <h3 id="tenks"><strong>KHÁCH SẠN 307</strong></h3>
            </div>
          </div>
          <div class="col-md-auto">
            <div id="profile"><!--Avatar hinh dai dien-->
              <ul class="list-unstyled">
                <li>
                  <div class="inset">
                    <img src="{{asset('images/avatar.png')}}">
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!--/header -->
    <!--menu ngang-->
    <div id="menu">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-auto mr-auto">
              <ul class="nav nav-tabs">
                <li class="nav-item"><!--menu trang chu-->
                  <a class="nav-link " href="{{url('QLKS/index')}}"><i class="fas fa-home" title="Trợ giúp"></i> TRANG CHỦ</a>
                </li>
                <li class="nav-item"><!--menu quan ly phong-->
                  <a class="nav-link" href="{{url('QLKS/room')}}"><i class="fas fa-book" title="Trợ giúp"></i> QUẢN LÝ PHÒNG</a>
                </li>
                <li class="nav-item"><!--menu quan ly nhan vien-->
                  <a class="nav-link" href="{{url('QLKS/staff')}}"><i class="fas fa-user" title="Trợ giúp"></i> NHÂN VIÊN</a>
                </li>
                <li class="nav-item"><!--menu thong ke-->
                  <a class="nav-link" style="color:black !important; background-color: #6A8A9B!important;" href="{{url('QLKS/statistical')}}"><i class="fas fa-chart-pie" title="Trợ giúp"></i> THỐNG KÊ</a>
                </li>
                <li class="nav-item"><!--menu thong tin-->
                  <a class="nav-link" href="{{url('QLKS/index')}}"><i class="fas fa-info-circle" title="Thoát"></i> THÔNG TIN</a>
                </li>
              </ul>
          </div>
          <div class="col-md-auto">
          </div>
        </div>
      </div>
    </div>
    <!--end menu ngang-->
    <!--Menu con-->
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
    <!--end menu con-->
    <!-- Tab panes -->
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
                        <input type="button" name="search" value="Tìm kiếm">
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
      <!--quan ly nhan vien/ nhan vien-->
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
      <!--quan ly nhan vien/ muc luong-->
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
    <!--end content-->
    <!--footer-->
    <footer id="footer">
      <div class="container-fluid">
        <div class="row align-items-end">
          <div class="col-md-6">
            Phần mềm quản lý khách sạn 307 version 1.0
          </div>
          <div class="col-md-6">
            THIẾT KẾ VÀ PHÁT TRIỂN BỞI TIẾN ĐẠT
          </div>
        </div>
      </div>
    </footer>
    <!--end footer-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <!--Chọn tat ca trong bang danh sach khach hang-->
    <script> 
    $(document).ready(function(){ 

     $("#chonhet").click(function() 
      { 
       var checked_status = this.checked; 
       $("input[name=chon]").each(function() 
       { 
        this.checked = checked_status; 
       }); 
      }); 

    }); 
    </script>
  </body>
</html>