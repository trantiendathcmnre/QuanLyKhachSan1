
@include('admin.modal.themphong')
@include('admin.modal.thanhcong')
@include('admin.modal.thatbai')
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
            <a class="btn btn-warning btn-sm text-light" id="editroom"><i class="fas fa-pencil-alt"></i></a>&nbsp;
          <button class="btn btn-danger btn-sm text-light" data-id="{{ $phg->id }}" id="deleteroom"><i class="fas fa-trash-alt"></i></button>

          
          </td>
        </tr>
        @endforeach
      </tbody>
  </table>
</div>

{{ $phanphong->links("pagination::bootstrap-4") }}
@section('script')
<script type="text/javascript">
//xoa phong------------------------------------------------------------------- 
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
});

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

  //Xoa tang-----------------------------------------------------------------------------
  $(document).on('click','#xoatang',function(){
    $("#delete-floor").modal();
    var idtang = $(this).data('idtang');
      $('#frm-xoatang').on('submit',function(e){
        e.preventDefault();
        var url = $(this).attr('action');
        var pos = $(this).attr('method');
        
        $.ajax({
          type : pos,
          url : url,
          data : {
            idtang: idtang
          },
          
          success:function(data)
          {
            if(data.msg == 'OK')
            {
              $('#delete-floor').modal('toggle');
              $("#success").modal();
              
            }
            else
            {
              $('#delete-floor').modal('toggle');
              $("#fail").modal();
            }
            

          }
        })
  
      })
    })


</script>
@endsection

