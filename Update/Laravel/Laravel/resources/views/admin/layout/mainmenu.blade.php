<!--menu ngang-->
<div id="menu">
  <div class="container-fluid" style="padding: 0">
    <div class="row">
      <div class="col-md-auto mr-auto">
        <nav class="navbar navbar-expand-md navbar-dark text-left">
          <button class="navbar-toggler" style="background-image: url('{{ asset('images/bgn.jpg') }}');" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item"><!--menu trang chu-->
              <a class="nav-link btn at" href="{{ url('admin/home/index') }}"><i class="fas fa-home" title="Trợ giúp"></i> TRANG CHỦ</a>
            </li>
            <li class="nav-item"><!--menu quan ly phong-->
              <a class="nav-link btn" href="{{ url('admin/floor/room') }}"><i class="fas fa-book" title="Trợ giúp"></i> QUẢN LÝ PHÒNG</a>
            </li>
            <li class="nav-item"><!--menu quan ly nhan vien-->
              <a class="nav-link btn" href="{{ url('admin/employee/staff') }}"><i class="fas fa-user" title="Trợ giúp"></i> NHÂN VIÊN</a>
            </li>
            <li class="nav-item"><!--menu thong ke-->
              <a class="nav-link btn" href="{{ url('admin/order/statistical') }}"><i class="fas fa-chart-pie" title="Trợ giúp"></i> THỐNG KÊ</a>
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