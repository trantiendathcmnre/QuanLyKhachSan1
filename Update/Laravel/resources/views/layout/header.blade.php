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
          <ul class="list-unstyled">
            <li >
              <div class="inset">
                  <img src="{{asset('images/av.jpg')}}" class="img-fluid"> 
            </li>
            <li class="dropdown">
              <span class="dropdown-toggle" style="color: #fff; padding-top: 15px;" data-toggle="dropdown">
              </span>
              <div class="dropdown-menu dropdown-menu-right" style="background: #DDE5EA">
                <div class="container"><!--Thông tin người dùng-->
                  <div class="row">
                    <div class="col-12">
                      <img src="{{ asset('images/av.jpg') }}" alt="Alternate Text" class="img-responsive" width="120px" height="120px">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <p class="text-muted small">email</p>
                      <div style="border-bottom: solid #CCCCCC 1px;"></div>
                    </div>
                    <div class="col-md-12">
                      <a href="#" class="btn-default btn-xs"><i class="far fa-user"></i>Cá nhân</a>
                    </div>
                    <div class="col-md-12" >
                      <a class="btn btn-default btn-sm" title="Đổi mật khẩu"><i class="fas fa-unlock"></i>Đổi mật khẩu</a>
                      <a class="btn btn-default btn-sm" title="Đăng xuất" href=""><i class="fas fa-sign-out-alt"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</header><!-- /header -->