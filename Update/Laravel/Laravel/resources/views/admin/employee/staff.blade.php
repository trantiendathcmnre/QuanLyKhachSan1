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
              <a class="nav-link btn at" href="{{ url('admin/employee/staff') }}"><i class="fas fa-user" title="Trợ giúp"></i> NHÂN VIÊN</a>
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
@endsection

@section('content')
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
            @if(session('thongbao'))
              <script>
                alert('{{ session('thongbao') }}');

              </script>
              @endif
            <a class="btn btn-primary btn-sm text-light" data-toggle="modal" data-target="#thembophan"><i class="fas fa-plus"></i> Thêm</a>
          </div>
        </div>
        @include('admin.modal.thembophan')
        <!--Danh sach nhóm nhan vien-->
        <div class="row white" >
          <div class="col-md-12">
            <div class="table-responsive" id="tbbophan">
              <table class="table table-striped table-hover table-sm text-center">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Mã bộ phận</th>
                    <th>Tên bộ phận</th>
                    <th>Điện thoại</th>
                    <th>Công cụ</th>
                  </tr>
                </thead>
                <tbody> 
                  @foreach($bophan as $BP)
                  <tr>
                    <td>{{ $BP->id }}</td>
                    <td>{{ $BP->maBP }}</td>
                    <td>{{ $BP->tenBP }}</td>
                    <td>{{ $BP->dienthoaiBP }}</td>
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
  <!--quan ly nhan vien/ nhan vien-->
  <div id="menu2" class="container-fluid tab-pane fade"><br>
    <div id="content">
      <div class="container-fluid">
        <div class="row borderbt"><!--quan li nhan vien-->
          <div class="col-md-auto mr-auto">
            <h5>Danh sách nhân viên</h5>
          </div>
          <div class="col-md-auto align-self-center">
            <a class="btn btn-primary btn-sm text-light"><i class="fas fa-plus"></i> Thêm</a>
          </div>
        </div>
        <!--Danh sach nhan vien-->
        <div class="row white" >
          <div class="col-md-12">
            <div class="table-responsive" id="tbphong">
              <table class="table table-striped table-hover table-sm text-center">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Mã nhân viên</th>
                    <th>Họ tên</th>
                    <th>Giới tính</th>
                    <th>Ngày sinh</th>
                    <th>Điện thoại</th>
                    <th>Email</th>
                    <th>Ngày vào làm</th>
                    <th>Trạng thái</th>
                    <th>Bộ phận</th>
                    <th>Công cụ</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($nhanvien as $NV)
                  <tr>
                    <td>{{ $NV->id }}</td>
                    <td>{{ $NV->maNV }}</td>
                    <td>{{ $NV->hotenNV }}</td>
                    <td>{{ $NV->gioitinhNV }}</td>
                    <td>{{ $NV->ngaysinhNV }}</td>
                    <td>{{ $NV->sdtNV }}</td>
                    <td>{{ $NV->emailNV }}</td>
                    <td>{{ $NV->ngayvaoNV }}</td>
                    <td>{{ $NV->trangthaiNV }}</td>
                    <td>{{ $NV->thuocbp->tenBP }}</td>
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
                    <th>STT</th>
                    <th>Nhân viên</th>
                    <th>Lương căn bản</th>
                    <th>Phụ cấp</th>
                    <th>Tạm ứng</th>
                    <th>Khấu trừ</th>
                    <th>Ngày nghỉ</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 0 ?>
                  @foreach($luong as $LG)
                  <tr>
                    <td><?php echo ++$i ?></td>
                    <td>{{ $LG->luongnv->hotenNV }}</td>
                    <td>
                      {{ $LG->luongcbML }}
                      <img src="{{asset('images/edit-icon.png')}}" alt="">
                    </td>
                    <td>
                      {{ $LG->phucapML }}
                      <img src="{{asset('images/add-icon.png')}}" alt="">
                    </td>
                    <td>
                      {{ $LG->tamungML }}
                      <img src="{{asset('images/add-icon.png')}}" alt="">
                    </td>
                    <td>
                      {{ $LG->khautruML }}
                      <img src="{{asset('images/add-icon.png')}}" alt="">
                    </td>
                    <td>
                      {{ $LG->nghiphepML }}
                      <img src="{{asset('images/add-icon.png')}}" alt="">
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