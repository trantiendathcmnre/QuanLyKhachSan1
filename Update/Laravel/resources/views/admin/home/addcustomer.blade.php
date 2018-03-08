@extends('admin.layout.master')

@section('title','Quản lý khách hàng')

@section('content') 
  <div class="container" style="padding-top: 70px ">
    <div class="row" >
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5>Thêm khách hàng</h5>
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
              <form id="frm-themkhachhang" action="admin/home/addcustomer" method="post" novalidate>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="form-group row">
                    <label for="hoten" class="col-md-2" style="padding-top: 9px">Họ và tên</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="hoten" placeholder="Họ và tên" required >
                      <div class="invalid-feedback">
                        Vui lòng nhập họ tên khách hàng!
                      </div>
                    </div>
                    <!-- CMND -->
                    <label for="cmnd" class="col-md-2" style="padding-top: 9px">CMND</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="cmnd" placeholder="CMND" required>
                      <div class="invalid-feedback">
                        Vui lòng nhập CMND !
                      </div>
                    </div>
                  </div>
                
                  <!--select tang lau-->
                  <div class="form-group row">
                    <label for="gioitinh" class="col-md-2" style="padding-top: 9px">Giới tính</label>
                    <div class="form-inline col-md-4">
                      <input class="form-control" type="radio" name="gioitinh" checked="checked" id="gioitinh" value="Nam">&nbsp;Nam&nbsp;&nbsp;&nbsp;
                      <input class="form-control" type="radio" name="gioitinh" id="gioitinh" value="Nữ">&nbsp;Nữ
                    </div>

                    <!--select loai phong-->
                    <label for="ngaysinh" class="col-md-2" style="padding-top: 9px">Ngày sinh</label>
                    <div class="col-md-4">
                      <input type="date" class="form-control" name="ngaysinh">
                    </div>
                  </div>
              
                  
                  
              
                  <div class="form-group row">
                    <label for="sdt" class="col-md-2" style="padding-top: 9px">Số điện thoại</label>
                    <div class="col-md-4">
                      <input class="form-control" type="text" name="sdt" value="" placeholder="Số điện thoại" required> 
                      <div class="invalid-feedback">
                        Vui lòng nhập số điện thoại !
                      </div>
                    </div>

                    <label for="dc" class="col-md-2 " style="padding-top: 9px">Địa chỉ</label>
                    <div class="col-md-4">
                      <input class="form-control" type="text" name="dc" value="" placeholder="Địa chỉ">
                    </div>
                  </div>
                  
                  <input class="btn btn-secondary btn" type="submit" value="Thêm khách hàng" />

              </form>  

            </div>
          </div>
        </div>
    </div>
  </div>
@endsection