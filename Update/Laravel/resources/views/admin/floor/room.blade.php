@extends('admin.layout.master')

@section('title','Quản lý phòng')


@section('submenu')
<div id="submenu" style="padding-top: 70px">
  <div class="container">
    <div class="row white">
      <div class="col-md-12">
        <!-- Nav pills menu con quan ly phong-->
        <ul class="nav nav-pills" role="tablist">
          
          <li class="nav-item">
            <a class="btn btn-dark nav-link active" data-toggle="pill" href="#menu1">Thông tin phòng</a>
          </li>
          
          <li class="nav-item">
            <a class="btn btn-dark nav-link " data-toggle="pill" href="#menu2">Giá phòng</a>
          </li>

          <li class="nav-item">
            <a class="btn btn-dark nav-link" data-toggle="pill" href="#menu3">Cài đặt giá</a>
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
  
  <div id="menu1" class="container tab-pane active"><br>
    <div class="row" >
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5>Thông tin phòng</h5>
            </div>
            <div class="card-body" id="tbphong">
              <form class="form-inline">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input id="tukhoa" class="form-control-sm mr-2" type="text" placeholder="Tìm kiếm" aria-label="Search">
                <input type="submit" class="btn btn-success btn-sm text-light" value="Tìm" id="search"/>
                &nbsp;
                <a class="btn btn-sm btn-primary text-light ml-auto mb-1" title="Thêm phòng" id="themphong">
                <i class="fas fa-plus"></i> Thêm
                </a><!--Them khach hang-->
              </form>
              <div class="table-responsive" id="tbkhachhang">
                <table class="table table-hover table-bordered table-sm text-center">
                  <thead>
                    <tr>
                      <th>#</th>
                      
                      <th>Phòng</th>
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
                      <?php $i= 1 ?>
                      @foreach($phanphong as $phg)
                      <tr id="phg{{ $phg->id }}">
                        <td><?php echo $i++ ?></td>
                        
                        <td>{{ $phg->maPHG }}</td>
                        <td>{{ $phg->tiennghiPHG }}</td>
                        <td>{{ $phg->ghichuPHG }}</td>
                        <td>{{ $phg->songuoiPHG }}</td>
                        <td>{{ $phg->sogiuongPHG }}</td>
                        <td>{{ $phg->trangthaiPHG }}</td>
                        <td>{{ $phg->phongtang->tenT }}</td>
                        <td>{{ $phg->phongloai->tenLP }}</td>
                        <td>
                          <a class="btn btn-warning btn-sm text-light" href="admin/floor/editroom/{{ $phg->id }}"><i class="fas fa-pencil-alt"></i></a>&nbsp;
                        <button class="btn btn-danger btn-sm text-light" data-id="{{ $phg->id }}" id="deleteroom"><i class="fas fa-trash-alt"></i></button>

                        
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                </table>
              </div>

              {{ $phanphong->links("pagination::bootstrap-4") }}
              @include('admin.modal.themphong')
              @include('admin.modal.xoa')
              @include('admin.modal.suaphong')

            </div>
          </div>
        </div>
    </div>
  </div>

  <!--quan ly phong/ gia phong-->
  <div id="menu2" class="container tab-pane fade"><br>
    <!-- thong tin tang -->
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            
            <div class="row">
              <div class="col-7 col-md-auto">
                <h5>Thông tin tầng</h5>
              </div>
              <div class="col-5 col-md-auto ml-auto">
                <a class="btn btn-primary btn-sm text-light" id="themtang" > <i class="fas fa-plus"></i> Thêm</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <!--Danh sach tang lau-->
            <div class="row">
              <div class="col-md-12">
                @foreach($tang as $T)
                <div class="floor">
                  <strong>{{ $T->tenT }}</strong>
                  <div id="cn-floor">
                    
                    <a href="javascript:xoatang('{{ $T->id }}')" class="btn btn-danger btn-sm"> Xóa </a>
                    <a>|</a>
                    <a href="admin/floor/editfloor/{{ $T->id }}" class="btn btn-warning btn-sm text-light"> Sửa </a>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
            @include('admin.modal.themtang')
            @include('admin.modal.xoatang')
          </div>
        </div>
      </div>
    </div>
      <!-- thong tin loai phong -->
    <div class="row mt-4">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            @include('admin.modal.themloaiphong')
            <div class="row ">
              <div class="col-7 col-md-auto">
                <h5>Phân loại phòng</h5>
              </div>
              <div class="col-5 col-md-auto ml-auto"><!--them moi loai phong-->
                <a class="btn btn-primary btn-sm text-light" id="themloaiphong" ><i class="fas fa-plus"></i> Thêm</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row" >
              <div class="col-md-12">
                
                @foreach($loaiphong as $LP)
                <div class="floor">
                  <strong>{{ $LP->tenLP }}</strong>
                  <div id="cn-floor">
                    <a href="javascript:xoaloaiphong('{{ $LP->id }}')" class="btn btn-danger btn-sm "> Xóa </a>
                    <a>|</a>
                    <a href="admin/floor/editfloorstyle/{{ $LP->id }}" class="btn btn-warning btn-sm text-light"> Sửa </a>
                  </div>
                </div>
                @endforeach
                
              </div>
            </div>
            <!--/Danh sach loai phong-->
          </div>
        </div>
      </div>
    </div>
 
    <!--Thong tin chi tiet tien nghi cua tung phong-->
    <div class="row mt-4" >
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5>Bảng giá phòng</h5>
          </div>
          <div class="card-body">
            <div class="table-responsive" id="tbphong">
              <table class="table table-hover table-sm table-bordered">
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
                    <td>{{ number_format($GP->giaGP) }}đ</td>
                    <td>{{ $GP->giakhunggio->tenKG }}</td>
                    <td>{{ $GP->gialoai->tenLP }}</td>
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

  <!--quan ly phong/ cai dat gia-->
  <div id="menu3" class="container-fluid tab-pane fade"><br>
  </div><!--quan ly phong/ cai dat gia-->
</div>
@include('admin.modal.thanhcong')
@include('admin.modal.thatbai')

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
  
//xoa tang---------------------------------------------------------------------------------
  function xoatang(id)
  {
      an=confirm("Bạn có chắc muốn xóa không?");
      if(an)    
      {
          location.href="admin/floor/deletefloor/"+id;     
      }
  }



  // Them loai phong-----------------------------------------------------------------------
  $(document).on('click','#themloaiphong',function(){
    $("#add-floorstyle").modal();
    $('#frm-themloaiphong').on('submit',function(e){
    e.preventDefault();
    var data = $(this).serialize();
    var url = $(this).attr('action');
    var pos = $(this).attr('method');
    $.ajax({
      type : pos,
      url : url,
      data : data,
      success:function(data)
      {
        if(data.msg == 'OK')
        {
          $('#add-floorstyle').modal('hide');
          $('#success').modal('show');
        }
        else
        {
          $('#add-floorstyle').modal('hide');
          $('#fail').modal('show');
        }
        

      }
    })
    
  })
  })

//xoa tang---------------------------------------------------------------------------------
  function xoaloaiphong(id)
  {
      an=confirm("Bạn có chắc muốn xóa không?");
      if(an)    
      {
          location.href="admin/floor/deletefloorstyle/"+id;     
      }
  }
  //ajax phan trang phong------------------------------------------------------------------

  // $(document).on('click', '.pagination a',function(e){
  //     e.preventDefault();
  //     var page = $(this).attr('href').split('page=')[1];
  //     readPage(page);
      
  // });

  // function readPage(page)
  // {
  //   $.ajax({
  //     url: "admin/floor/pagination?page="+page
  //   }).done(function(data){
  //     $('#tbphong').html(data) 
  //     location.hash=page;
  //   })

  // }

  // Them tang-------------------------------------------------------------------------------
  $(document).on('click','#themtang',function(){
  $("#add-floor").modal();
  $('#frm-themtang').on('submit',function(e){
    e.preventDefault();
    var data = $(this).serialize();
    var url = $(this).attr('action');
    var pos = $(this).attr('method');
    $.ajax({
      type : pos,
      url : url,
      data : data,
      success:function(data)
      {
        if(data.msg == 'OK')
        {
          $('#add-floor').modal('toggle');
          $("#success").modal();         
        }
        else
        {
          $('#add-floor').modal('toggle');
          $("#fail").modal();
        }    
      }
    })   
  })
})



  //xoa phong ----------------------------------------------------------
  $(document).on('click','#deleteroom',function(){
  var id = $(this).data('id');
  $("#delete").modal();
  $('#frm-xoa').on('submit',function(e){
    e.preventDefault();
    var url = $(this).attr('action');
    var pos = $(this).attr('method');
    
    $.ajax({
      type : pos,
      url : url,
      data : {
        id: id
      },
      
      success:function(data)
      {
        if(data == 'OK')
        {
          $('#delete').modal('hide');
          $('#success').modal('show');
          $('#phg'+id).remove();
          
        }
        else
        {
          $('#delete').modal('hide');
          $("#fail").modal('show');
        }     
      }
    })
  })
})



//ajax them phong------------------------------------------------------------------
$(document).on('click','#themphong',function(){
  $("#insert").modal();
  $('#frm-themphong').on('submit',function(e){
    e.preventDefault();
    var data = $(this).serialize();
    var url = $(this).attr('action');
    var pos = $(this).attr('method');
    $.ajax({
      type : pos,
      url : url,
      data : data,
      success:function(data)
      {
        if(data.msg == 'OK')
        {
          $('#insert').modal('toggle');
          $("#success").modal();         
        }
        else
        {
          $('#insert').modal('toggle');
          $("#fail").modal();
        }    
      }
    })   
  })
})

 </script>

 
@endsection