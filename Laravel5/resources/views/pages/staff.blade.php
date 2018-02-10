<!doctype html>
<html lang="en">
  <head>
    <!--
      Management for Hotel 307
      Author: Tran Tien Dat
      Date: 7/2/2018 
    -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('plugin/font_awesome/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <title>Quản lý nhân viên</title>  
    
  </head>
  <body>
    @include('layout.header')
    @include('layout.mainmenu')
    <div id="submenu">
      <div class="container-fluid">
        <div class="row white">
          <div class="col-md-12">
            <!-- Nav pills menu con quan ly nhan vien-->
            <ul class="nav nav-pills" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="#menu1">Quản lí nhóm nhân viên</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#menu2">Quản lý nhân viên</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#menu3">Mức lương</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Tab panes -->
    <div class="tab-content">
            <!--quan ly nhan vien/ nhom nhan vien-->
            <div id="menu1" class="container-fluid tab-pane active"><br>
              <div id="content">
                <div class="container-fluid">
                  <div class="row borderbt"><!--quan li nhom nhan vien-->
                    <div class="col-md-auto mr-auto">
                      <h5>Quản lý nhóm nhân viên</h5>
                    </div>
                    <div class="col-md-auto align-self-center">
                      <img src="{{asset('images/icAd.png')}}" alt=""> THÊM NHÓM
                    </div>
                  </div>
                  <!--Danh sach nhóm nhan vien-->
                  <div class="row white" >
                    <div class="col-md-12">
                      <div class="table-responsive" id="tbphong">
                        <table class="table table-striped table-hover table-sm">
                          <thead>
                            <tr>
                              <th>Tên nhóm</th>
                              <th>Quyền</th>
                              <th>Ghi chú</th>
                              <th>Công cụ</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Sale</td>
                              <td>Sale & Marketing</td>
                              <td></td>
                              <td>
                                <a class="text-dark" href="#"><i class="fas fa-pencil-alt"></i></a>&nbsp;
                                <a class="text-dark" href="#"><i class="fas fa-trash-alt"></i></a>
                              </td>
                            </tr>
                            <tr>
                              <td>Quản lý</td>
                              <td>Quản lý</td>
                              <td></td>
                              <td>
                                <a class="text-dark" href="#"><i class="fas fa-pencil-alt"></i></a>&nbsp;
                                <a class="text-dark" href="#"><i class="fas fa-trash-alt"></i></a>
                              </td>
                            </tr>
                            <tr>
                              <td>Lễ tân </td>
                              <td>Căn bản</td>
                              <td></td>
                              <td>
                                <a class="text-dark" href="#"><i class="fas fa-pencil-alt"></i></a>&nbsp;
                                <a class="text-dark" href="#"><i class="fas fa-trash-alt"></i></a>
                              </td>
                            </tr>
                            <tr>
                              <td>Kế toán</td>
                              <td>Kế toán</td>
                              <td></td>
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
    <!--end tab panes-->
    <!--footer-->
    @include('layout.footer')
    
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