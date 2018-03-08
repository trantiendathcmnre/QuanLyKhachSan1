@extends('admin.layout.master')

@section('title','Trang chủ')
@include('admin.modal.themnhanvien')
@section('submenu')
<div id="submenu" style="padding-top: 70px">
  <div class="container">
    <div class="row white">
      <div class="col-md-4">
        <!-- Nav pills menu con quan ly nhan vien-->
        <ul class="nav nav-pills" role="tablist">
          <li class="nav-item">
            <a class="btn btn-dark nav-link active" data-toggle="pill" href="#menu1">Bộ phận</a>
          </li>
          
          <li class="nav-item">
            <a class="btn btn-dark nav-link " data-toggle="pill" href="#menu2">Quản lý nhân viên</a>
          </li>

          <li class="nav-item">
            <a class="btn btn-dark nav-link" data-toggle="pill" href="#menu3">Lương</a>
          </li>

        </ul>
      </div>
      <div class="col-md-8">
        @if(session('thongbao'))
          <div class="alert alert-danger mt-2">
            {{ session('thongbao') }}
          </div>
        @endif
      </div>
    </div>
  </div>
</div>
@endsection

@section('content')
<div class="tab-content">
  <!--quan ly nhan vien/ nhom nhan vien-->
  <div id="menu1" class="container tab-pane active"><br>
      
      <div class="container">
        <div class="row"><!--quan li nhom nhan vien-->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                @include('admin.modal.thembophan')
                @include('admin.modal.thanhcong')
                @include('admin.modal.thatbai')
                <div class="row">
                  <div class="col-7 col-md-auto">
                    <h5>Thông tin phòng ban</h5>
                  </div>
                  <div class="col-5 col-md-auto ml-auto">
                    <a class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#thembophan" > <i class="fas fa-plus"></i> Thêm</a>
                  </div>
                </div>
              </div>

              <div class="card-body">
                <!--Danh sach nhóm nhan vien-->
                <div class="row" >
                  <div class="col-md-12">
                    <div class="table-responsive" id="tbbophan">
                      <table class="table table-striped table-hover table-bordered table-sm text-center " style="font-size: 13px">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Mã bộ phận</th>
                            <th>Tên bộ phận</th>
                            <th>Điện thoại</th>
                            <th>Công cụ</th>
                          </tr>
                        </thead>
                        <tbody> 
                          <?php $i = 1 ?>
                          @foreach($bophan as $BP)
                          <tr>
                            <td><?php echo $i++ ?></td>
                            <td>{{ $BP->maBP }}</td>
                            <td>{{ $BP->tenBP }}</td>
                            <td>{{ $BP->dienthoaiBP }}</td>
                            <td>
                              <a class="btn btn-warning btn-sm text-light" href="admin/employee/editdepartment/{{ $BP->id }}" ><i class="fas fa-pencil-alt"></i></a>&nbsp;
                              <a class="btn btn-danger btn-sm text-light" href="javascript:xoabophan('{{ $BP->id }}')"><i class="fas fa-trash-alt"></i></a>
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
        
      </div>
  </div>
  <!--quan ly nhan vien/ nhan vien-->
  <div id="menu2" class="container tab-pane fade"><br>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              
              
              <div class="row">
                <div class="col-7 col-md-auto">
                  <h5>Thông tin nhân viên</h5>
                </div>
                <div class="col-5 col-md-auto ml-auto">
                  <a class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#themnhanvien" > <i class="fas fa-plus"></i> Thêm</a>
                </div>
              </div>
            </div>

            <div class="card-body" id="tbnhanvien">
              <div class="table-responsive">
                <table class="table table-hover table-sm text-center table-bordered" style="font-size: 13px">
                  <thead>
                    <tr>
                      <th>#</th>
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
                    <?php $i = 1 ?>
                    @foreach($nhanvien as $NV)
                    <tr>
                      <td><?php echo $i++ ?></td>
                      <td>{{ $NV->maNV }}</td>
                      <td>{{ $NV->hotenNV }}</td>
                      <td>{{ $NV->gioitinhNV }}</td>
                      <td>{{ $NV->ngaysinhNV }}</td>
                      <td>{{ $NV->sdtNV }}</td>
                      <td>{{ $NV->emailNV }}</td>
                      <td>{{ $NV->ngayvaoNV }}</td>
                      <td><?php if($NV->trangthaiNV == 1)
                                  echo "Đang làm";
                                else 
                                  echo "Nghỉ việc"; 
                      ?></td>
                      <td>{{ $NV->thuocbp->tenBP }}</td>
                      <td>
                        <a class="btn btn-warning btn-sm text-light" href="admin/employee/editstaff/{{ $NV->id }}"><i class="fas fa-pencil-alt"></i></a>&nbsp;
                        <a class="btn btn-danger btn-sm text-light" href="javascript:xoanhanvien('{{ $NV->id }}')"><i class="fas fa-trash-alt"></i></a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>

              {{ $nhanvien -> links("pagination::bootstrap-4") }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--quan ly nhan vien/ muc luong-->
  <div id="menu3" class="container tab-pane fade"><br>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              
              <div class="row">
                <div class="col-7 col-md-auto">
                  <h5>Mức lương nhân viên</h5>
                </div>
                <div class="col-5 col-md-auto ml-auto">
                  <a class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#themtang" > <i class="fas fa-plus"></i> Thêm</a>
                </div>
              </div>
            </div>

            <div class="card-body">
              <div class="table-responsive" id="tbphong">
                <table class="table table-striped table-hover table-sm table-bordered" style="font-size: 13px">
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
      <!--Danh sach luong nhan vien-->
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

//ajax phan trang nhan vien------------------------------------------------------------------

  // $(document).on('click', '.pagination a',function(e){
  //     e.preventDefault();
  //     var page = $(this).attr('href').split('page=')[1];
  //     readPage(page)

  // });

  // function readPage(page)
  // {
  //   $.ajax({
  //     url: "admin/employee/pagination?page="+page
  //   }).done(function(data){
  //     $('#tbnhanvien').html(data) 
  //     location.hash=page;
  //   })
  // }

  //Them bo phan-------------------------------------------------------------------------------
  $('#frm-thembophan').on('submit',function(e){
    e.preventDefault();
    var data = $(this).serialize();
    var url = $(this).attr('action');
    var pos = $(this).attr('method');
    $.ajax({
      type : pos,
      url : url,
      data : data,
      dataTy : 'json',
      success:function(data)
      {
        if(data == 'OK')
        {
          
          $('#thembophan').modal('toggle');
          alert("Thêm thành công !");
        }
        else
        {
          $('#thembophan').modal('toggle');
          alert("Thêm thất bại ! Vui lòng kiểm tra lại");
        }
        

      }
    })
    
  })

  //xoa bo phan---------------------------------------------------------------------------------
  function xoabophan(id)
  {
      an=confirm("Bạn có chắc muốn xóa không?");
      if(an)    
      {
          location.href="admin/employee/deletedepartment/"+id;     
      }
  }

  //Them nhanvien-------------------------------------------------------------------------------
  $('#frm-themnhanvien').on('submit',function(e){
    e.preventDefault();
    var data = $(this).serialize();
    var url = $(this).attr('action');
    var pos = $(this).attr('method');
    $.ajax({
      type : pos,
      url : url,
      data : data,
      dataTy : 'json',
      success:function(data)
      {
        if(data == 'OK')
        {

          $('#themnhanvien').modal('toggle');
          alert("Thêm thành công !");
        }
        else
        {
          $('#themthatbai').modal('toggle');
          alert("Thêm thất bại ! Vui lòng kiểm tra lại");
        }
        

      }
    })
    
  })

  //xoa bo phan---------------------------------------------------------------------------------
  function xoanhanvien(id)
  {
      an=confirm("Bạn có chắc muốn xóa không?");
      if(an)    
      {
          location.href="admin/employee/deletestaff/"+id;     
      }
  }

</script>



@endsection