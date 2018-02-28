<style type="text/css">
  .tbmap { line-height: 20px}
  .tbmap img {padding-top: 4px}
  .tbmap a {text-decoration: underline; line-height: 20px}
  .tbmap a:hover {text-decoration: none}
  .maptt {border-bottom: 1px solid #999; font-size: 14px; font-weight: 700;}
</style>

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
              <a class="nav-link btn" href="{{ url('admin/order/statistical') }}"><i class="fas fa-chart-pie" title="Trợ giúp"></i> THỐNG KÊ</a>
            </li>
            <li class="nav-item"><!--menu thong tin-->
              <a class="nav-link btn at" href="{{ url('admin/information/infor') }}"><i class="fas fa-info-circle" title="Thoát"></i> THÔNG TIN</a>
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
  <div class="container-fluid ">
    <div class="row white">
      <div class="col-md-12">
        <!-- Nav pills menu con thong tin-->
        <ul class="nav nav-pills " role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="pill" href="#menu1">Khách sạn</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#menu2">Dịch vụ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#menu3">Trợ giúp</a>
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
        <div class="row borderbt"><!--khach san-->
          <div class="col-md-auto mr-auto">
            <h5>Thông tin khách sạn</h5>
          </div>
        </div>
        <div class="row white">
          <div class="offset-2 col-md-8">
            <form style="padding-top: 15px;font-size: 13px">
              @foreach($thongtinkhachsan as $TT)
              <div class="form-group row">
                <label for="tenkhachsan" class="col-sm-2 col-form-label">Tên khách sạn</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control-sm w-100" id="tenkhachsan" placeholder="Tên khách sạn" value="{{ $TT->ten }}">
                </div>
              </div>
              <div class="form-group row">
                <label for="tenviettat" class="col-sm-2 col-form-label">Tên viết tắt</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control-sm w-100" id="tenviettat" placeholder="Tên viết tắt" value="{{ $TT->viettat }}">
                </div>
              </div>
              <div class="form-group row">
                <label for="diachi" class="col-sm-2 col-form-label">Địa chỉ</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control-sm w-100" id="diachi" placeholder="Địa chỉ" value="{{ $TT->diachi }}">
                </div>
              </div>
              <div class="form-group row">
                <label for="dienthoai" class="col-sm-2 col-form-label">Số điện thoại</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control-sm w-100" id="dienthoai" placeholder="Điện thoại" value="{{ $TT->dienthoai }}">
                </div>
              </div>
              <div class="form-group row">
                <label for="fax" class="col-sm-2 col-form-label">Fax</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control-sm w-100" id="fax" placeholder="Fax" value="{{ $TT->fax }}">
                </div>
              </div>
              <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control-sm w-100" id="email" placeholder="Email" value="{{ $TT->email }}">
                </div>
              </div>
              <div class="form-group row">
                <label for="website" class="col-sm-2 col-form-label">Website</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control-sm w-100" id="website" value="{{ $TT->website }}" placeholder="Website">
                </div>
              </div>
              <div class="form-group row">
                <label for="website" class="col-sm-2 col-form-label">Giới thiệu </label>
                <div class="col-sm-10">
                  <textarea id="gioithieu" class="ckeditor">{{ $TT->gioithieu }}</textarea>
                </div>
              </div>
              @endforeach
              <div class="form-group row">
                <div class="offset-6 col-sm-6 ">
                  <button type="submit" class="btn btn-dark btn-sm">Áp dụng</button>
                </div>
              </div>
            </form>
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
            <h5>Dịch vụ</h5>
          </div>
          <div class="col-md-auto align-self-center">
            <a class="btn btn-primary btn-sm text-light"><i class="fas fa-plus"></i> Thêm</a>
          </div>
        </div>
        <!--Danh sach nhan vien-->
        <div class="row white" >
          <div class="col-md-12">
            <div class="table-responsive" id="tbphong">
              <table class="table table-striped table-hover table-sm " style="font-size: 13px">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Mã dịch vụ</th>
                    <th>Tên dịch vụ</th>
                    <th>Đơn vị</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                    <th>Chức năng</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1 ?>
                  @foreach($dichvu as $DV)
                  <tr>
                    <td><?php echo $i++ ?></td>
                    <td>{{ $DV->maDV }}</td>
                    <td>{{ $DV->tenDV }}</td>
                    <td>{{ $DV->donviDV }}</td>
                    <td>{{ $DV->soluongDV }}</td>
                    <td>{{ $DV->dongiaDV }}</td>
                    <td>
                      <a class="btn btn-warning btn-sm" href="#"><i class="fas fa-pencil-alt"></i> Sửa </a>&nbsp;
                      <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash-alt"></i> Xóa </a>
                    </td>
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
  <!---->
  <div id="menu3" class="container-fluid tab-pane fade"><br>
    <div id="content">
      <div class="container-fluid">
        <div class="row borderbt"><!--thong tin tro giup-->
          <div class="col-md-auto mr-auto">
            <h5>Trợ giúp</h5>
          </div>
        </div>
        <div class="row white" >
          <div class="col-md-12">
            <div class="table-responsive" id="tbphong">
              <table class="table table-striped table-hover table-sm">
                <table border="0" cellspacing="0" cellpadding="0">
                <tbody>
                  <tr valign="top">
                    <td class="box ctb newscont">
                      <div id="InfoIfTab_newfeatures_content" style="display:none"></div>
                        <div id="InfoIfTab_paymentmethods_content" style="display:none"></div>
                        <div id="InfoIfTab_sitemap_content" style="">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbmap">
                <tbody><tr>
                <td colspan="3" class="maptt">SƠ ĐỒ SITE </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td width="40" rowspan="3" valign="top"><b><a href="javascript:Tab.open('home');">Home</a></b><br>
                    <img width="12" height="215" src="img/02.gif">
                </td>
                <td width="50" rowspan="3" valign="top"><img width="49" height="142" src="{{ asset('images/001.gif') }}"></td>
                <td height="20" colspan="3" valign="top">Quản lý khách hàng: Danh sách khách  hàng<br>
                    Thao  tác trên khách hàng: Đặt phòng, chuyển phòng, thêm vào phòng, nhận phòng</td>
            </tr>
            <tr>
                <td height="30">
                    <table cellpadding="0" cellspacing="0" border="0" width="100%">
                        <tbody><tr>
                            <td width="180" valign="top">Thao tác trên biểu tượng  phòng</td>
                            <td width="3" valign="top"><img width="30" src="{{ asset('images/002.gif') }}"></td>
                            <td valign="top">Thông tin phòng<br>
                                Danh  sách đặt phòng<br>
                                Danh  sách khách hàng<br>
                                Thêm  dịch vụ<br>
                                Trả  phòng</td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <table cellpadding="0" cellspacing="0" border="0" width="100%">
                        <tbody><tr>
                            <td width="155" valign="top"><strong>Thao tác trên Icon tiện ích</strong></td>
                            <td width="50" valign="top"><img width="50" src="{{ asset('images/05.gif') }}"></td>
                            <td valign="top">
                                <strong>Hiện trạng phòng</strong><br>
                                <strong>Báo cáo </strong> (<a target="_blank" href="report-dskh">Danh sách khách hàng</a>, <a target="_blank" href="report-dsvk">Danh sách Việt kiều và nước ngoài</a>, <a target="_blank" href="report-tktt">Thống kê tạm trú</a>)<br>
                                <strong>Xem ngày tháng</strong>
                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
            <tr>
                <td colspan="5" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tbody><tr valign="top">
                            <td width="85"><a onclick="$('#tab_room_content').html(''); Tab.open('room');"><b>Quản lý phòng</b></a> <img width="12" height="62" src="{{ asset('images/004.gif') }}"><br></td>
                            <td width="50"><img width="49" height="53" src="{{ asset('images/003.gif') }}"></td>
                            <td><b><a onclick="$('#tab_room_content').html(''); Cookie.set('roomtab', 'info'); Tab.open('room');">Thông tin phòng</a>:</b> Thêm/Sửa/Xóa thông  tin lầu và phòng<br>
                                <b><a onclick="$('#tab_room_content').html(''); Cookie.set('roomtab', 'price'); Tab.open('room');">Giá  phòng</a>:</b> Xem thống chi tiết giá phòng<br>
                                <b><a onclick="$('#tab_room_content').html(''); Cookie.set('roomtab', 'setprice'); Tab.open('room');">Cài  đặt giá</a>:</b> Cài đặt giá phòng</td>
                        </tr>
                    </tbody></table></td>
            </tr>
            <tr>
                <td colspan="5" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tbody><tr valign="top">
                            <td width="64" rowspan="2"><a onclick="$('#tab_employment_content').html(''); Tab.open('employment');"><b>Nhân viên</b></a><br>
                                <img width="12" height="72" src="{{ asset('images/004.gif') }}"></td>
                            <td width="52" rowspan="2"><img width="49" height="53" src="{{ asset('images/003.gif') }}"></td>
                            <td colspan="3" height="25px"><strong><a onclick="$('#tab_employment_content').html(''); Cookie.set('EmployTab', 'department'); Tab.open('employment');">Quản  lý nhóm nhân viên</a></strong>: Quản  lý, Tiếp tân, Tạp vụ<br>
                                <strong><a onclick="$('#tab_employment_content').html(''); Cookie.set('EmployTab', 'employee'); Tab.open('employment');">Quản lý nhân viên</a></strong> : Danh sách nhân viên </td>
                        </tr>
                        <tr valign="top">
                            <td width="87"><strong><a onclick="$('#tab_employment_content').html(''); Cookie.set('EmployTab', 'salary'); Tab.open('employment');">Quản lý lương</a></strong></td>
                            <td width="45"><img width="44" height="28" src="{{ asset('images/005.gif') }}"></td>
                            <td><strong>Thêm ngày nghỉ, tạm ứng</strong><br>
                                <strong>Tính lương</strong>: Thông tin về việc tính  lương sẽ gởi Email cho người quản trị
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </td>
                        </tr>
                    </tbody></table></td>
            </tr>
            <tr>
                <td colspan="5" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tbody><tr valign="top">
                            <td width="64"><a onclick="$('#tab_sum_content').html(''); Tab.open('sum');"><b>Thống kê</b></a><br>
                                <img width="12" height="62" src="{{ asset('images/004.gif') }}"><br></td>
                            <td width="52"><img width="49" height="53" src="{{ asset('images/003.gif') }}"></td>
                            <td><strong><a onclick="$('#tab_sum_content').html(''); Cookie.set('sumtab', 'income'); Tab.open('sum');">Thu  nhập</a>: </strong> <br>
                                <strong><a onclick="$('#tab_sum_content').html(''); Cookie.set('sumtab', 'bill'); Tab.open('sum');">Danh sách hóa đơn</a></strong><br>
                                <strong><a onclick="$('#tab_sum_content').html(''); Cookie.set('sumtab', 'roomstatus'); Tab.open('sum');">Hiện trạng  phòng</a>: </strong>Xem hiện trạng phòng theo  thời gian được chọn
                            </td>
                        </tr>
                    </tbody></table></td>
            </tr>
            <tr>
                <td colspan="5" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tbody><tr valign="top">
                            <td width="64" rowspan="2"><b><a>Thông tin</a></b> </td>
                            <td width="52" rowspan="2"><img width="49" height="53" src="{{ asset('images/003.gif') }}"></td>
                            <td colspan="3"><strong><a href="javascript:InfoTab.open('hotel');">Khách  sạn</a></strong>: Các cài đặt về tính tiền phòng, thông tin  khách sạn, cài đặt hệ thống<br>
                                <strong><a href="javascript:InfoTab.open('service');">Dịch vụ</a></strong>:  Quản lý thông tin dịch vụ: Thêm/Sửa/Xóa dịch vụ (Ví dụ: Giặt ủi, Thức uống  ....)</td>
                        </tr>
                        <tr valign="top">
                            <td width="65"><strong><a>Trợ giúp</a></strong></td>
                            <td width="32"><img width="28" height="69" src="{{ asset('images/006.gif') }}"></td>
                            <td><strong>Tính  năng mới</strong>: Các tính  năng mới cập nhật và bổ sung của phần mềm<br>
                                <strong>Tin tức du lịch</strong>: Thông tin du lịch trực  tuyến<br>
                                <strong>Hỗ trợ thanh toán</strong>: Thông tin liên hệ  thanh toán và hỗ trợ cũng như khuyến mãi<br>
                                <strong>Site map và trợ giúp</strong>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </td>
                        </tr>
                    </tbody></table></td>
            </tr>
            <tr>
                <td colspan="3" style="padding-top: 20px" class="maptt">HƯỚNG DẪN CÀI ĐẶT </td>
            </tr>
            <tr>
                <td colspan="3">
        <table><tbody><tr>
        <td>- <a target="_blank" href="http://quanlykhachsan.org/huong-dan-su-dung-phan-mem-khach-san-nghiep-vu.html">Hướng đăng kí và sử dụng phần mềm</a><br>
          - <a href="setup">Xóa lịch sử giao dịch &amp; cài đặt từ đầu</a><br>
          - <a href="resetbillcode">Trả lại mã hóa đơn bắt đầu từ 01</a></td>
        <td>- <a target="_blank" href="IEPrinten">In trên trình duyệt Internet Explorer</a><br>
                    - <a target="_blank" href="FireFoxPrinten">In trên trình duyệt FireFox</a>                  
                </td>
        </tr></tbody></table>
            </td></tr>
        </tbody></table>
    


</div>
                    </td>
                   
                </tr>
            </tbody></table>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
