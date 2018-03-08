<style type="text/css">
  .tbmap { line-height: 20px}
  .tbmap img {padding-top: 4px}
  .tbmap a {text-decoration: underline; line-height: 20px}
  .tbmap a:hover {text-decoration: none}
  .maptt {border-bottom: 1px solid #999; font-size: 14px; font-weight: 700;}
</style>

@extends('admin.layout.master')

@section('title','Trang chủ')

@section('submenu')
<div id="submenu">
  <div class="container " style="padding-top: 70px">
    <div class="row white">
      <div class="col-md-12">
        <!-- Nav pills menu con thong tin-->
        <ul class="nav nav-pills" role="tablist">
          <li class="nav-item">
            <a class="btn btn-dark nav-link active" data-toggle="pill" href="#menu1">Khách sạn</a>
          </li>
          
          <li class="nav-item">
            <a class="btn btn-dark nav-link " data-toggle="pill" href="#menu2">Dịch vụ</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection

@section('content')
<div class="tab-content">
  <!--thong ke/ doanh thu-->
  <div id="menu1" class="container tab-pane active"><br>
    <div id="content">
      <div class="container">
        <div class="row"><!--khach san-->
          <div class="col-md-6">
              <div class="card">
                <div class="card-body">
                  <!-- ban do khach san -->
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.0868231393206!2d106.60647861480165!3d10.881000792250612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752a0a7dcc47f7%3A0x282af3326b671058!2zMzA3IFTDtCBLw70sIFTDom4gWHXDom4sIEjDs2MgTcO0biwgSOG7kyBDaMOtIE1pbmg!5e0!3m2!1sen!2s!4v1520160166149" width="480" height="430" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>
            
          </div>
          <div class="col-md-6">
            <!-- thong tin khach san -->
            <div class="card pb-4">
              @foreach($thongtinkhachsan as $tt)
              <div class="card-header">
                <h3>{{ $tt->ten }}</h3>
              </div>
              <div class="card-body" style="font-size: 14px">
                <p>
                <i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp; {{ $tt->diachi }}
                </p>
                <p>
                  <i class="fas fa-phone"></i>&nbsp; {{ $tt->dienthoai }}
                </p>
                <p>
                  <i class="fas fa-envelope"></i> &nbsp;{{ $tt->email }}
                </p>
                <img src="{{ asset('images/ks.jpg') }}" alt="Khách sạn 307" class="img-fluid">
              </div>
              @endforeach
            </div>
          </div>
 
        </div>
      </div>
    </div>
  </div>
  <!--thong ke danh thu-->
  <div id="menu2" class="containertab-pane fade"><br>
      <div class="container">
        <div class="row"><!--quan li nhan vien-->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-7 col-md-auto">
                    <h5>Dịch vụ</h5>
                  </div>
                  <div class="col-5 col-md-auto ml-auto">
                    <a class="btn btn-primary btn-sm" href="admin/information/addservice" > <i class="fas fa-plus"></i> Thêm</a>
                  </div>
                </div>
                @include('admin.modal.themdichvu')
                @include('admin.modal.thanhcong')
                @include('admin.modal.thatbai')
              </div>
              <div class="card-body" id="tbdichvu">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-sm text-center" style="font-size: 13px">
                    <thead >
                      <tr>
                        <th>#</th>
                        <th>Tên dịch vụ</th>
                        <th>Đơn vị</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1 ?>
                      @foreach($dichvu as $DV)
                      <tr>
                        <td><?php echo $i++ ?></td>
                        <td>{{ $DV->tenDV }}</td>
                        <td>{{ $DV->donviDV }}</td>
                        <td>{{ $DV->soluongDV }}</td>
                        <td>{{ $DV->dongiaDV }}</td>
                        <td>
                          <a class="btn btn-warning btn-sm" href="admin/information/editservice/{{ $DV->id }}"><i class="fas fa-pencil-alt"></i></a>&nbsp;
                          <a class="btn btn-danger btn-sm" href="javascript:xoadichvu('{{ $DV->id }}')"><i class="fas fa-trash-alt"></i> </a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                {{ $dichvu->links("pagination::bootstrap-4") }}
              </div>
            </div>
          </div>
          <div class="col-md-auto align-self-center">
            
          </div>
        </div>
        <!--Danh sach nhan vien-->
        <div class="row white" >
          <div class="col-md-12">
            
          </div>
        </div>
      </div>
  
  </div>
  <!---->
</div>
@endsection

@section('script')
<script>
  // Them tang-------------------------------------------------------------------------------
  // $('#frm-themdichvu').on('submit',function(e){
  //   e.preventDefault();
  //   var data = $(this).serialize();
  //   var url = $(this).attr('action');
  //   var pos = $(this).attr('method');
  //   $.ajax({
  //     type : pos,
  //     url : url,
  //     data : data,
  //     dataTy : 'json',
  //     success:function(data)
  //     {
  //       if(data == 'OK')
  //       {
  //         $('#thanhcong').modal('toggle');
  //         $('#themdichvu').modal('toggle');
  //       }
  //       else
  //       {
  //         $('#thatbai').modal('toggle');
  //         $('#themdichvu').modal('toggle');
  //       }
        

  //     }
  //   })
    
  // })

//---------------------------------------------------------------------------------

//xoa dich vu---------------------------------------------------------------------------------
  function xoadichvu(id)
  {
      an=confirm("Bạn có chắc muốn xóa không?");
      if(an)    
      {
          location.href="admin/information/deleteservice/"+id;     
      }
  }

  

//ajax phan trang dich vu------------------------------------------------------------------




  $(document).on('click', '.pagination a',function(e){
      e.preventDefault();
      var page = $(this).attr('href').split('page=')[1];
      readPage(page)

  });

  function readPage(page)
  {
    $.ajax({
      url: "admin/information/pagination?page="+page
    }).done(function(data){
      $('#tbdichvu').html(data) 
      location.hash=page;
    })
  }
</script>
@endsection
