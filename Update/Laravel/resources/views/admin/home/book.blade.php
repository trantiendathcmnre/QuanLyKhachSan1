@extends('admin.layout.master')

@section('title','Đặt phòng')

@section('content') 
  <div class="container" style="padding-top: 70px ">
    <div class="row" >
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5>Đặt phòng</h5>
            </div>
            <div class="card-body">
              @if(count($errors)>0)
                <div class="alert alert-danger">
                  @foreach($errors->all() as $error)
                  {{ $error }}<br>
                  @endforeach
                </div>
              @endif

              @if(session('thongbao'))
                <div class="alert alert-success">
                  {{ session('thongbao') }}
                </div>
              @endif
          <form id="frm-themkhachhang" action="admin/home/book/{{ $hienphong->id }}" method="post" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="row form-group">
                    <label for="khachhang" class="col-md-2" style="padding-top: 9px">Khách hàng:</label>
                    <div class="col-md-4">
                      <div id="khachhang"></div>
                      
                    </div>
                    <label for="cmnd" class="col-md-2" style="padding-top: 9px">CMND:</label>
                    <div class="col-md-4">
                      <select id="cmnd" class="form-control">
                        @foreach($khachhang as $kh)
                        <option value="{{ $kh->cmndKH }}">{{ $kh->cmndKH }}</option>
                        @endforeach
                      </select>
                      
                    </div>

                  </div>
              
                  <div class="row form-group">
                    <label class="col-md-2" style="padding-top: 9px">Phòng:</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="phong" readonly value="{{ $hienphong->maPHG }}">   
                      <input type="hidden" id="idloai" value="{{ $hienphong->idLPPHG}}" />
                    </div>
                    
                    <label for="gia" class="col-md-2" style="padding-top: 9px">Giá</label>
                      <div class="col-md-4">
                        <div id="gia"></div>
                      </div>
                  </div>
                  <div class="row form-group">
                    <label for="khunggio" class="col-md-2" style="padding-top: 9px">Khung giờ</label>
                    <div class="col-md-4">
                      <select id="khunggio" name="khunggio" class="form-control ">
                        <option value="0">-----------------------</option>}
                        @foreach($khunggio as $kg)
                        <option value="{{ $kg->id }}">{{ $kg->tenKG }}</option>
                        @endforeach
                      </select>
                    </div>
                    <label for="sdt" class="col-md-2" style="padding-top: 9px">Số điện thoại</label>
                    <div class="col-md-4">
                      <input class="form-control" type="text" name="sdt" placeholder="Số điện thoại" >
                      
                    </div>
                  </div>

                  <div class="row form-group">
                    <label for="ngayden" class="col-md-2" style="padding-top: 9px">Ngày đến</label>
                    <div class="col-md-4">
                      <input class="form-control" type="datetime-local" name="ngayden" >
                      
                    </div>
                    <label for="ngaydi" class="col-md-2" style="padding-top: 9px">Ngày đi</label>
                    <div class="col-md-4">
                      <input class="form-control" type="datetime-local" name="ngaydi">
                      <div class="invalid-feedback">
                        Vui lòng chọn ngày đi!
                      </div>
                    </div>
                  </div>


                  <div class="row form-group">
                    <label for="tratruoc" class="col-md-2" style="padding-top: 9px">Trả trước</label>
                    <div class="col-md-4">
                      <input class="form-control" type="numeric" name="tratruoc" >
                      
                    </div>
                    <label for="nhanvien" class="col-md-2" style="padding-top: 9px">Nhân viên</label>
                    <div class="col-md-4">
                      <select name="nhanvien" class="form-control">
                        @foreach($rep as $nv)
                        <option value="{{ $nv->id }}">{{ $nv->hotenNV }}</option>
                        @endforeach
                      </select>
                  </div>
              </div>
                  <input class="btn btn-secondary btn" type="submit" value="Đặt phòng" />

              </form>  

            </div>
          </div>
        </div>
    </div>
  </div>
@endsection
@section('script')
<script>
  //dat phong------------------------------------------------------------
$(document).ready(function(){
  
  
  $("#khunggio").change(function(){
    var khunggio = $("#khunggio").val();
    var idloaiphong = $("#idloai").val();
      $.get("admin/home/gia/"+idloaiphong+'/'+khunggio,function(data){
        $("#gia").html(data);
        //console.log(data);
        
      })


  })

  $("#cmnd").change(function(){
    var cmnd = $("#cmnd").val();
    
      $.get("admin/home/khachhang/"+cmnd,function(data){
        $("#khachhang").html(data);
        //console.log(data);
        
      })


  })
})

</script>
@endsection