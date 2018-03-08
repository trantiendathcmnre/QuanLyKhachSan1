@include('admin.modal.themkhachhang')
@include('admin.modal.hoadon')
@include('admin.modal.datphong')
@include('admin.modal.xoakh')
@include('admin.modal.thanhcong')
@include('admin.modal.thatbai')
<div style="padding-top: 70px">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 >Danh sách phòng</h5>
          </div>
          <div class="card-body">
            <div id="thumb">
              <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                  <!--Thong ke so luong phong con trong-->
                  <span class="trong">&nbsp;
                  @if(isset($trong))
                    {{ $trong }}
                  @endif
                  &nbsp;
                  </span>&nbsp;
                  <label>Còn trống</label>
                </li>
                <li class="list-inline-item">
                  <span class="dadat">&nbsp;
                  @if(isset($dadat))
                    {{ $dadat }}
                  @endif
                  &nbsp;
                  </span>&nbsp;
                  <label>Đã đặt</label>
                </li>
                <li class="list-inline-item">
                  <span class="dango">&nbsp;
                  @if(isset($dango))
                    {{ $dango }}
                  @endif&nbsp;
                  </span>&nbsp;
                  <label>Đang ở</label>
                </li>
                
              </ul>
            </div>
            
              @foreach($phong as $PHG)
              
              <!--Hiển thị phòng trống-->
              @if($PHG->trangthaiPHG == 0)
                <a style="text-decoration: none" class="room btn-outline-dark" href="admin/home/book/{{ $PHG->id }}">  {{ $PHG->maPHG }}  </a>
              @endif

              <!--Hiển thị phòng đã đang ở-->
              @if($PHG->trangthaiPHG == 2)

                <a class="room rmaintenance btn-outline-dark" data-toggle="modal" data-target="#modalhoadon">  {{ $PHG->maPHG }}  </a>
              @endif

              <!--Hiển thị phòng đặ đặt-->
              @if($PHG->trangthaiPHG == 1)
                <a class="room rbooked btn-outline-dark" data-toggle="modal" data-target="#myModal">  {{ $PHG->maPHG }}  </a>
              @endif

              
            
            
            @endforeach
          </div>

        </div>
      </div>
    </div>
    
    <div class="row" >
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5>Khách hàng </h5>
          </div>
          <div class="card-body" id="tbkhachhang">
            <form class="form-inline">

              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input id="tukhoa" class="form-control-sm mr-2" type="text" placeholder="Tìm kiếm" aria-label="Search">
              <input type="submit" class="btn btn-success btn-sm text-light" value="Tìm" id="search"/>
              &nbsp;

              <a class="btn btn-sm btn-primary text-light ml-auto mb-1" title="Thêm khách hàng" href="admin/home/addcustomer">
              <i class="fas fa-plus"></i> Thêm
            </a><!--Them khach hang-->

            </form>
            <div class="table-responsive">
              <table class="table table-hover table-bordered text-center table-sm">
                <thead >
                  <tr>
                    <th>#</th>
                    <th>Họ tên</th>
                    <th>Giới tính</th>
                    <th>Ngày sinh</th>
                    <th>CMND/ID</th>
                    <th>Địa chỉ</th>
                    <th>Điện thoại</th>
                    <th>Lượt thuê</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody id="noidung">
                  <?php $i=1 ?>
                  <!--Lấy thông tin khách hàng -->
                  @foreach($khachhang as $KH)
                  <tr id="kh{{ $KH->id }}">
                    <td><?php echo $i++ ?></td>
                    <td>{{ $KH->hotenKH }}</td>
                    <td>{{ $KH->gioitinhKH }}</td>
                    <td>{{ $KH->ngaysinhKH }}</td>
                    <td>{{ $KH->cmndKH }}</td>
                    <td>{{ $KH->diachiKH }}</td>
                    <td>{{ $KH->sdtKH }}</td>
                    <td>{{ $KH->luotthueKH }}</td>
                    <td>
                      <a class="btn btn-warning btn-sm text-light " href="admin/home/editcustomer/{{ $KH->id }}"><i class="fas fa-pencil-alt"></i></a>&nbsp; 
                      <a class="btn btn-danger btn-sm text-light " data-id="{{ $KH->id }}" id="deletecustomer"><i class="fas fa-trash-alt"></i></a>

                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
            {{ $khachhang -> links("pagination::bootstrap-4") }}
            
            
   
            
          </div>
        </div>
      </div>
    </div>
       
  </div>

</div>
@section('script')
<script >
  $(document).ready(function(){
    // Them khachhang-------------------------------------------------------
  // $('#frm-themkhachhang').on('submit',function(e){
  //     e.preventDefault();
  //     var data = $(this).serialize();
  //     var url = $(this).attr('action');
  //     var pos = $(this).attr('method');
  //     $.ajax({
  //       type : pos,
  //       url : url,
  //       data : data,
  //       success:function(data)
  //       {
  //         if(data.msg == 'OK')
  //         {
  //           $('#add-customer').modal('hide');
  //           $('#success').modal('show');
  //         }
  //         else
  //         {
  //           $('#add-customer').modal('hide');
  //           $('#fail').modal('show');
  //         }
  //       }
  //     })  
  //   })

      
  })


  // $(document).ready(function(){
  //   $("#search").click(function(){
  //     var tukhoa = $("#tukhoa").val();
  //     $.get(
  //       "/admin/home/search"+'/'+tukhoa,function(data){
  //         console.log(data);
  //       });
  //   });
  // });

  //ajax phan trang dich vu------------------------------------------------------------------

  // $(document).on('click', '.pagination a',function(e){
  //     e.preventDefault();
  //     var page = $(this).attr('href').split('page=')[1];
  //     readPage(page)

  // });

  // function readPage(page)
  // {
  //   $.ajax({
  //     url: "admin/home/pagination?page="+page
  //   }).done(function(data){
  //     $('#tbkhachhang').html(data) 
  //     location.hash=page;
  //   })
  // }


  
</script>

@endsection