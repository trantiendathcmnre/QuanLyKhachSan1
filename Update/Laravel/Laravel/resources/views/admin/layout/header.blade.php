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

</style>
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
      </div>
    </div>
  </div>
</header><!-- /header -->