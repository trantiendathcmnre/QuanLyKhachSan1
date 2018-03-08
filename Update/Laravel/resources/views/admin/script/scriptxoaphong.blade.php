@section('script')
<script>
  
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
                $('#delete').modal('toggle');
                $("#success").modal();
                
              }
              else
              {
                $('#delete').modal('toggle');
                alert("Xóa thành thất bại");
              }
              

            }
          })
    
        })
    });

</script>
@endsection