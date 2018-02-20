@extends('admin.layout.master')

@section('title','Quản lý phòng')

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
              <a class="nav-link btn at" href="{{ url('admin/floor/room') }}"><i class="fas fa-book" title="Trợ giúp"></i> QUẢN LÝ PHÒNG</a>
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
@endsection

@section('submenu')
<div id="submenu">
      <div class="container-fluid">
        <div class="row white">
          <div class="col-md-12">
            <!-- Nav pills menu con quan ly phong-->
            <ul class="nav nav-pills" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="#menu1">Thông tin phòng</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#menu2">Giá phòng</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#menu3">Cài đặt giá</a>
              </li>
            </ul>
          <!-- Tab panes -->
          </div>
        </div>
      </div>
</div>
@endsection

@section('content')
<div class="tab-content">
  <!--quan ly phong/ thong tin phong-->
  <div id="menu1" class="container-fluid tab-pane active"><br>
    <div id="content">
      <div class="container-fluid">
        <div class="row borderbt"><!--Phan loai phong-->
          <div class="col-md-auto mr-auto">
            <h5>Phân loại phòng</h5>
          </div>
          <div class="col-md-auto">
            {!! $mess or '' !!}
          </div>
        </div>
        <!--Phan loai tang lau-->
        <div id="title">
          @include('admin.modal.themtang')
          <div class="row white" style="padding-bottom: 15px;padding-top: 15px">
            <div class="col-7 col-md-auto">
              Thông tin tầng:
            </div>
            <div class="col-5 col-md-auto ml-auto">
              <span class="error text-center alert alert-danger d-none"> </span>&nbsp;
              <a class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#themtang" > <i class="fas fa-plus"></i> Thêm</a>
            </div>
          </div>
        </div>
        <!--Danh sach tang lau-->
        <div class="row white">
          <div class="col-md-auto">
            @foreach($tang as $T)
            <div class="floor">
              <strong>{{ $T->tenT }}</strong>
              <div id="cn-floor">
                <a href="#" class="text-dark"> Xóa </a>
                <a>|</a>
                <a href="#" class="text-dark"> Sửa </a>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <!--/Danh sach tang lau-->
        <!--Danh sach loai phong-->
        <div id="title">
          @include('admin.modal.themloaiphong')
          <div class="row white align-self-center" style="padding-bottom: 15px;padding-top: 15px">
            <div class="col-7 col-md-auto">
              Phân loại phòng:
            </div>
            <div class="col-5 col-md-auto ml-auto"><!--them moi loai phong-->
              <a class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#themloaiphong"><i class="fas fa-plus"></i> Thêm</a>
            </div>
          </div>
        </div>
        <div class="row white" >
          <div class="col-md-12">
            @foreach($loaiphong as $LP)
            <div class="floor">
              <strong>{{ $LP->tenLP }}</strong>
              <div id="cn-floor">
                <a href="#" class="text-dark"> Xóa </a>
                <a>|</a>
                <a href="#" class="text-dark"> Sửa </a>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <!--/Danh sach loai phong-->
        <!--Thong tin chi tiet tien nghi cua tung phong-->
        @include('admin.modal.themphong')
        <div class="row borderbt" >
          <div class="col-md-auto mr-auto" >
            <h5>Thông tin phòng</h5>
          </div>
          <div class="col-md-auto ml-auto align-self-center" style="padding-bottom: 15px;padding-top: 15px">
            <a href="#" class="btn btn-primary btn-sm" title="Thêm phòng"  data-target="#themphong" data-toggle="modal"><i class="fas fa-plus"></i> Thêm</a><!--Them moi phong-->
          </div>
        </div>
        <!--Thong tin tung phong -->
        <!--Danh sach phong va thong tin phong-->
        <div class="row white" >
          <div class="col-md-12">
            <div class="table-responsive" id="tbphong">
              <table class="table table-striped table-hover table-sm text-center">
                <thead>
                  <tr>
                    <th>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input id="chonhet" type="checkbox" class="form-check-input" value="">Phòng
                        </label>
                      </div>
                    </th>
                    <th>Tên phòng</th>
                    <th>Tiện nghi</th>
                    <th>Thông tin phòng</th>
                    <th>Số người</th>
                    <th>Số giường</th>
                    <th>Trạng thái</th>
                    <th>Tầng</th>
                    <th>Loại phòng</th>
                    <th>Công cụ</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($phanphong as $phg)
                    <tr>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input name="chon" type="checkbox" class="form-check-input" value="">{{ $phg->maPHG }}
                          </label>
                        </div>
                      </td>
                      <td>{{ $phg->tenPHG }}</td>
                      <td>{{ $phg->tiennghiPHG }}</td>
                      <td>{{ $phg->ghichuPHG }}</td>
                      <td>{{ $phg->songuoiPHG }}</td>
                      <td>{{ $phg->sogiuongPHG }}</td>
                      <td>{{ $phg->trangthaiPHG }}</td>
                      <td>{{ $phg->phongtang->tenT }}</td>
                      <td>{{ $phg->phongloai->tenLP }}</td>
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
        <!--Phan trang danh sach khach hang-->
        <div class="row white">
          <div class="col-md-auto ml-auto" id="phantrang">
            {!! $phanphong->links() !!}
          </div>
        </div>
      </div>
    </div>
  </div><!--/quan ly phong/ thong tin phong-->
  <!--quan ly phong/ gia phong-->
  <div id="menu2" class="container-fluid tab-pane fade"><br>
    <div id="content">
      <div class="container-fluid">
        <div class="row borderbt"><!--Phan loai phong-->
          <div class="col-md-auto mr-auto">
            <h5>Giá phòng</h5>
          </div>
        </div>
        <!--Danh sach phong va thong tin phong-->
        <div class="row white" >
          <div class="col-md-12">
            <div class="table-responsive" id="tbphong">
              <table class="table table-striped table-hover table-sm">
                <thead>
                  <tr>
                    <th>Mã giá</th>
                    <th>Giá </th>
                    <th>Khung giờ</th>
                    <th>Loại phòng</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($giaphong as $GP)
                  <tr>
                    <td>{{ $GP->maGP }}</td>
                    <td>{{ $GP->giaGP }}</td>
                    <td>{{ $GP->giakhunggio->tenKG }}</td>
                    <td>{{ $GP->gialoai->tenLP }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!--Phan trang danh sach khach hang-->
        <div class="row white">
          <div class="col-md-auto ml-auto" id="phantrang">
            
          </div>
        </div>
      </div>
    </div>
  </div><!--/quan ly phong/ gia phong-->
  <!--quan ly phong/ cai dat gia-->
  <div id="menu3" class="container-fluid tab-pane fade"><br>
    <div id="content">
      <div class="container-fluid">
        <div class="row borderbt"><!--Danh sach phong de cai dat gia-->
          <div class="col-md-auto mr-auto">
            <h5>Danh sách phòng</h5>
          </div>
          <div class="col-md-auto">
            <div id="thaotac">
              <a href="#">Chọn tất cả</a>
              <a>|</a>
              <a href="#">Bỏ chọn tất cả</a>
            </div>
          </div>
        </div>
        <!--cai dat theo loai phong-->
        <div id="caidat">
          <div class="row white" >
            <div class="col-md-auto">
              Cài đặt giá cho:
              <a href="#">Chưa xếp loại</a>
              <a>|</a>
              <a href="#">Deluxe</a>
              <a>|</a>
              <a href="#">Standard</a>
              <a>|</a>
              <a href="#">Superior</a>
              <a>|</a>
              <a href="#">Vip</a>
            </div>
            
          </div>
        </div>
        <!--Danh sach phong-->
        <div class="row white" >
          <div class="col-md-12">
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">101
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">102
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">103
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">104
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">105
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">106
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">107
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">108
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">109
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">110
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">201
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">202
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">203
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">204
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">205
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">206
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">207
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">208
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">209
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">210
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">301
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">302
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">303
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">304
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">305
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">306
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">307
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">308
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">309
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">310
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">401
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">402
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">403
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">404
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">405
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">406
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">407
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">408
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">409
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
            <div class="floor">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">410
                </label>
              </div>
              <div id="cn-floor">
                <a href="#" class="text-dark">Xem</a>
                <a>|</a>
                <a href="#" class="text-dark">Sửa</a>
              </div>
            </div>
          </div>
        </div>
        <!--Gia ap dung cho cac phong-->    
        <div class="row borderbt" >
          <div class="col-md-auto mr-auto">
            <h5>Giá áp dụng</h5>
          </div>
        </div>
        <div class="row white"><!--Khung gia qui dinh-->
          <div class="col-md-4"><!--Gia ap dung theo gio-->
            <div id="khunggia">
              <p><strong>Theo giờ:</strong></p>
              <div id="kg-body">
                <input type="text" name="" style="width: 50px; height: 20px">
                <span> Giờ </span>
                <input type="text" name="" style="width: 100px; height: 20px">
                <span> VND </span>
                <img src="{{asset('images/icAd.png')}}" alt="">THÊM
              </div>
              <p><strong>Giá qua đêm nhận phòng sau:</strong></p>
              <div id="kg-body">
                <input type="text" name="" style="width: 50px; height: 20px">
                <span> Giờ </span>
                <input type="text" name="" style="width: 100px; height: 20px">
                <span> VND </span>
                <img src="{{asset('images/icAd.png')}}" alt="">THÊM
              </div>
            </div>
          </div>
          <div class="col-md-4"><!--Gia ap dung theo ngay tuan thang-->
            <div id="khunggia">
              <p><strong>Theo ngày:</strong></p>
              <div id="kg-body">
                <input type="text" name="" style="width: 100px; height: 20px">
                <span> (VND) </span>
              </div>
              <p><strong>Theo tuần:</strong></p>
              <div id="kg-body">
                <input type="text" name="" style="width: 100px; height: 20px">
                <span> (VND) </span>
              </div>
              <p><strong>Theo tháng:</strong></p>
              <div id="kg-body">
                <input type="text" name="" style="width: 100px; height: 20px">
                <span> (VND) </span>
              </div>
              <p><strong>Qua đêm:</strong></p>
              <div id="kg-body">
                <input type="text" name="" style="width: 100px; height: 20px">
                <span> (VND) </span>
              </div>
            </div>
          </div>
          <div class="col-md-4"><!--Gia ap dung theo so nguoi-->
            <div id="khunggia">
              <p><strong>Theo số người:</strong></p>
              <div id="kg-body">
                <span>Thêm</span>
                <input type="text" name="" style="width: 50px; height: 20px">
                <span> người, cộng </span>
                <input type="text" name="" style="width: 100px; height: 20px">
                <span>VND (%)/người</span>
              </div>
              <div id="kg-body">
                <span>Công thêm</span>
                <input type="text" name="" style="width: 100px; height: 20px">
                <span>VND (%) /người cho những người tiếp theo</span>
              </div>
            </div>
          </div>
        </div>
        <div class="row white align-items-center ">
          <div class="col-md-12 ml-auto" style="margin-bottom: 15px">
            <a href="#" class="btn btn-dark">Cập nhật các phòng đã chọn</a>
          </div>
        </div>
      </div>
    </div>
  </div><!--quan ly phong/ cai dat gia-->
</div>
@endsection
@section('script')


<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

<!--Them tang-->
<script>
  
</script>
@endsection