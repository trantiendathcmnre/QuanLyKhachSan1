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

      @yield('mainmenu')
      
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
    $(document).ready(function(){ 

     $("#chonhet").click(function() 
      { 
       var checked_status = this.checked; 
       $("input[name=chon]").each(function() 
       { 
        this.checked = checked_status; 
       }); 
      }); 

    });


    //chuc nang refresh 
    function ReLoad()
    {
      location.reload();
    }
    </script>
    @yield('script')
  </body>
</html>