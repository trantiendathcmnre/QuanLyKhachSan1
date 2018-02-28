@extends('admin.layout.master')

@section('title','Trang chủ')

@section('mainmenu')
<!--menu ngang-->
<div id="menu">
  <div class="container-fluid" style="padding: 0">
    <div class="row">
      <div class="col-md-auto mr-auto">
        <nav class="navbar navbar-expand-md navbar-dark">
          <button class="navbar-toggler" style="background-image: url('{{ asset('images/bgn.jpg') }}');" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item"><!--menu trang chu-->
              <a class="nav-link btn " href="{{ url('admin/home/index') }}"><i class="fas fa-home" title="Trợ giúp"></i> TRANG CHỦ</a>
            </li>
            <li class="nav-item"><!--menu quan ly phong-->
              <a class="nav-link btn" href="{{ url('admin/floor/room') }}"><i class="fas fa-book" title="Trợ giúp"></i> QUẢN LÝ PHÒNG</a>
            </li>
            <li class="nav-item"><!--menu quan ly nhan vien-->
              <a class="nav-link btn" href="{{ url('admin/employee/staff') }}"><i class="fas fa-user" title="Trợ giúp"></i> NHÂN VIÊN</a>
            </li>
            <li class="nav-item"><!--menu thong ke-->
              <a class="nav-link btn at" href="{{ url('admin/order/statistical') }}"><i class="fas fa-chart-pie" title="Trợ giúp"></i> THỐNG KÊ</a>
            </li>
            <li class="nav-item"><!--menu thong tin-->
              <a class="nav-link btn" href="{{ url('admin/information/infor') }}"><i class="fas fa-info-circle" title="Thoát"></i> THÔNG TIN</a>
            </li>    
            </ul>
          </div>  
        </nav>
      </div>
      <div class="col-md-auto">
      </div>
    </div>
  </div>
</div>
<!--end menu ngang-->
@endsection

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
          <div class="col-md-12">
            <div id="dthu" class="row">
              @include('admin.modal.nhapxuatexcel')
              <form class="form-group form-inline" method="POST">
                <span class="col-md-auto">&nbsp;Từ&nbsp;</span>
                <input class="form-control-sm col-md-auto" type="date" id="to">
                <span class="col-md-auto">&nbsp;đến&nbsp;</span>
                <input class="form-control-sm col-md-auto" type="date" id="from">&nbsp;&nbsp;
                <a class="btn btn-primary btn-sm text-light col-md-auto" id="search" >Tìm</a>&nbsp;&nbsp;
                <a class="btn btn-success btn-sm text-light col-md-auto" data-toggle="modal" data-target="#modal-excel" title="Nhập/Xuất excel"><i class="fas fa-file-excel" style="font-size: 20px"></i></a>
              </form>
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
            <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Thêm</a>
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
            <h5>Quản lý hóa đơn</h5>
          </div>
        </div>
        <!--Danh sach luong nhan vien-->
        <div class="row white" >
          <div class="col-md-12">
            <div class="table-responsive" id="tbphong">
              <table class="table table-striped table-hover table-sm">
                <thead >
                    <tr>
                      <th>STT</th>
                      <th>Mã hóa đơn</th>
                      <th>Ngày lập</th>
                      <th>Phụ thu</th>
                      <th>ID dịch vụ</th>
                      <th>ID thuê phòng</th>
                      <th>Tổng tiền</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($hoadon as $HD)
                    <tr>
                      <td>{{ $HD->id }}</td>
                      <td>{{ $HD->maHD }}</td>
                      <td>{{ $HD->ngaylapHD }}</td>
                      <td>{{ $HD->phuthuHD }}</td>
                      <td>{{ $HD->idDVHD }}</td>
                      <td>{{ $HD->idTPHD }}</td>
                      <td>{{ $HD->tongtienHD }}</td>
                    </tr>
                    @endforeach
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
@section('script')
<script>
  $(document).ready(function(){
    $("#search").click(function(){
      var to = $("#to").val();
      var from = $("#from").val();
      $.get({
        url:"/"

      });
    });
});

</script>

@endsection