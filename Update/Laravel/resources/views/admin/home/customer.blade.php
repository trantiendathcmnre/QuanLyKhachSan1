<form class="form-inline">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input id="tukhoa" class="form-control-sm mr-2" type="text" placeholder="Tìm kiếm" aria-label="Search">
  <input type="submit" class="btn btn-success btn-sm text-light" value="Tìm" id="search"/>
  &nbsp;
  <a href="#" class="btn btn-sm btn-primary ml-auto mb-1" title="Thêm khách hàng" data-toggle="modal" data-target="#themkh">
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
      <tr id="{{ $KH->id }}">
        <td><?php echo $i++ ?></td>
        <td>{{ $KH->hotenKH }}</td>
        <td>{{ $KH->gioitinhKH }}</td>
        <td>{{ $KH->ngaysinhKH }}</td>
        <td>{{ $KH->cmndKH }}</td>
        <td>{{ $KH->diachiKH }}</td>
        <td>{{ $KH->sdtKH }}</td>
        <td>{{ $KH->luotthueKH }}</td>
        <td>
          <a class="btn btn-warning btn-sm text-light " id="edit"><i class="fas fa-pencil-alt"></i></a>&nbsp; 
          <button class="btn btn-danger btn-sm text-light " data-id="{{ $KH->id }}" id="deletecustomer"><i class="fas fa-trash-alt"></i></button>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>
{{ $khachhang -> links("pagination::bootstrap-4") }}
@include('admin.modal.themkhachhang')
@include('admin.modal.xoakh')
@section('script')
<script>
//xoa khachhang--------------------------------------------------------------------------------
  $(document).on('click','#deletecustomer',function(){
      var id = $(this).data('id');
        $("#delete-kh").modal();
        $('#frm-xoakh').on('submit',function(e){
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
                $('#delete-kh').modal('toggle');
                $("#success").modal();
                
              }
              else
              {
                $('#delete-kh').modal('toggle');
                alert("Xóa thành thất bại");
              }
              

            }
          })
    
        })
    });
</script>
@endsection