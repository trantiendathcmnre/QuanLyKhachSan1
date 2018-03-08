<!doctype html>
<html lang="en">
  <head>
    <!--
      Management for Hotel 307
      Author: Tran Tien Dat
      Date: 6/2/2018 
    -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('plugin/font_awesome/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <title>@yield('title')</title>
    <base href="{{ asset('') }}">
    @yield('style')  
    
  </head>
  <body>
    <div class="container-fluid">
      @include('admin.layout.header')

      
      @yield('submenu')
      
      @yield('content')

      @include('admin.layout.footer')
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script type="text/javascript" language="javascript" src="{{ asset('ckeditor/ckeditor.js') }}" ></script>
    <!--Chọn tat ca trong bang danh sach khach hang-->
    <script> 
    // $(document).ready(function(){ 

    //  $("#chonhet").click(function() 
    //   { 
    //    var checked_status = this.checked; 
    //    $("input[name=chon]").each(function() 
    //    { 
    //     this.checked = checked_status; 
    //    }); 
    //   }); 

    // });

    //-----------------------------------------------------------------------------------
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
// //-----------------------------------------------------------------------------------
//       function xoa(id)
//       {
//           an=confirm("Bạn có chắc muốn xóa không?");
//           if(an)    
//           {
//               location.href="admin/home/deletecustomer/"+id;     
//           }
//       }

//xoa khachhang------------------------------------------------------------
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
            if(data.msg == 'OK')
            {
              $('#delete-kh').modal('hide');
              $('#success').modal('show');
              $('#kh'+id).remove();
              
            }
            else
            {
              $('#delete-kh').modal('hide');
              $("#fail").modal('show');
            }     
          }
        })
      })
    })



</script>
    </script>
    @yield('script')
    <script type="text/javascript">
          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
    </script>
  </body>
</html>