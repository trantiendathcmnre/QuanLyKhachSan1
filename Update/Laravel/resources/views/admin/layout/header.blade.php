<!--Logo khách sạn và menu ngang-->
<style type="text/css" media="screen">
.btn-xs{
    padding: 1px 5px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 3px;
}
.btn-default{
    color: #333!important;
    background-color: #fff;
    border:solid #ccc 1px;
}
.btn-default:hover{
    background-color: #E6E6E6;
}
.navbar{
  padding: 0;
}

</style>
<nav class="navbar fixed-top navbar-dark bg-dark">
  
  <div id="logo" class="navbar-brand">
    <img class="img-fluid" src="{{asset('images/logo.png')}}" alt="307 Hotel" style="width: 80px; height: 35px">
    <h3 id="tenks"><strong>KHÁCH SẠN 307</strong></h3>
  </div>
  <div class="mn">
    <a class="btn text-light" href="{{ url('admin/home/index') }}"><i class="fas fa-home fa-lg" title="Trợ giúp"></i> <p style="font-size: 11px">Trang chủ</p>
    </a>
  
    <a class="btn text-light" href="{{ url('admin/floor/room') }}"><i class="fas fa-book fa-lg" title="Trợ giúp"></i> <p style="font-size: 11px">Quản lý phòng</p></a>
 
    <a class="btn text-light" href="{{ url('admin/employee/staff') }}"><i class="fas fa-user fa-lg" title="Trợ giúp"></i> <p style="font-size: 11px">Nhân viên</p></a>
 
    <a class="btn text-light" href="{{ url('admin/order/statistical') }}"><i class="fas fa-chart-pie fa-lg" title="Trợ giúp"></i> <p style="font-size: 11px">Thống kê</p></a>
 
    <a class="btn text-light" href="{{ url('admin/information/infor') }}"><i class="fas fa-info-circle fa-lg" title="Thoát"></i> <p style="font-size: 11px">Thông tin</p></a>
  </div>
  <div id="profile"><!--Avatar hinh dai dien-->
    @if(!Auth::guest())
    <ul class="list-unstyled">
      <li >
        <div class="inset">
          <img src="{{asset('images/av.jpg')}}" class="img-fluid">
        </div> 
      </li>
      <li class="dropdown">
        <span class="dropdown-toggle" style="color: #fff; padding-top: 15px;" data-toggle="dropdown">{{ Auth::user()->email }}
        </span>
        <div class="dropdown-menu dropdown-menu-right" >
          <div class="container"><!--Thông tin người dùng-->
            <div class="row">
              <div class="col-12">
                <img src="{{ asset('images/av.jpg') }}" alt="Alternate Text" class="img-responsive" width="120px" height="120px">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <p class="text-muted small">{{ Auth::user()->email }}</p>
                <hr>
              </div>
              
              <div class="col-md-12" >
                <a class="btn btn-default btn-sm" title="Đổi mật khẩu"><i class="fas fa-unlock"></i></a>
                <a class="btn btn-default btn-sm" title="Đăng xuất" href="admin/logout"><i class="fas fa-sign-out-alt"></i></a>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
    @endif
  </div>


</nav>

