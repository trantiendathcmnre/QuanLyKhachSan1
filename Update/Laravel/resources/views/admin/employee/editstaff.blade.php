@extends('admin.layout.master')

@section('title','Nhân viên')

@section('content')
  <!--quan ly phong/ thong tin phong-->
  
  <div class="container" style="padding-top:70px"><br>
    <div class="row" >
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5>Sửa thông tin nhân viên</h5>
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
        
              <form action="admin/employee/editstaff/{{ $suanhanvien->id }}" method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
 
                <div class="form-group row">
                  <label for="manhanvien" class="col-md-2" style="padding-top: 9px">Mã nhân viên</label>
                  <div class="col-md-4">
                    <input type="text" class="form-control" name="manhanvien" placeholder="Mã nhân viên" value="{{ $suanhanvien->maNV }}">
              
                  </div>
                  <!-- ten nhan vien  -->
                  <label for="tennhanvien" class="col-md-2" style="padding-top: 9px">Tên nhân viên</label>
                  <div class="col-md-4">
                    <input type="text" class="form-control" name="tennhanvien" placeholder="Tên nhân viên" value="{{ $suanhanvien->hotenNV }}">
                    
                  </div>
                </div>
                <!-- gioi tinh -->
                <div class="form-group row">

                  <label for="gioitinh" class="col-md-2" style="padding-top: 9px">Giới tính</label>
                  <div class="col-md-4">
                    <div class="form-check form-check-inline ">
                    <input class="form-check-input" type="radio" name="gioitinh" value="Nam" 
                    @if($suanhanvien->gioitinhNV == 'Nam')
                    {{ "checked" }}
                    @endif
                    >
                    <label class="form-check-label" for="inlineRadio1"> Nam </label>
                  </div>

                  <div class="form-check form-check-inline ">
                    <input class="form-check-input" type="radio" name="gioitinh" value="Nữ"
                    @if($suanhanvien->gioitinhNV == 'Nữ')
                    {{ "checked" }}
                    @endif
                    >
                    <label class="form-check-label" for="inlineRadio2"> Nữ</label>
                  </div>
                  </div>

                  <!-- so dien thoai -->
                  <label for="sdt" class="col-md-2" style="padding-top: 9px">Số điện thoại</label>
                  <div class="col-md-4">
                    <input type="text" class="form-control" name="sdt" placeholder="Số điện thoại" value="{{ $suanhanvien->sdtNV }}">
                  </div>

                </div>
                <!-- ngày sinh  -->
                <div class="form-group row">

                  <label for="ngaysinh" class="col-md-2" style="padding-top: 9px">Ngày sinh</label>
                  <div class="col-md-4">
                    <input type="date" class="form-control" name="ngaysinh" placeholder="Ngày sinh" value="{{ $suanhanvien->ngaysinhNV }}">
                  </div>

                  <!-- email -->
                  <label for="email" class="col-md-2" style="padding-top: 9px">Email</label>
                  <div class="col-md-4">
                    <input type="email" class="form-control" name="email" placeholder="Email" value="{{ $suanhanvien->emailNV }}">
                  </div>
                </div>

                <div class="form-group row">

                  <label for="trangthai" class="col-md-2" style="padding-top: 9px">Trạng thái</label>
                  <div class="col-md-4">
                    <select name="trangthai" class="form-control">
                      <option
                      @if($suanhanvien->trangthaiNV == 1)
                      {{ "selected" }}
                      @endif
                       value=1>Đang làm</option>
                      <option
                      @if($suanhanvien->trangthaiNV == 0)
                      {{ "selected" }}
                      @endif
                       value=0>Nghỉ việc</option>
                    </select>
    
                  </div>

                  <!-- email -->
                  <label for="bophan" class="col-md-2" style="padding-top: 9px">Bộ phận</label>
                  <div class="col-md-4">
                    <select name="bophan" class="form-control">
                      @foreach($bophan as $bp)
                      <option
                      @if($suanhanvien->idBPNV == $bp->id)
                        {{ "selected" }}
                      @endif
                       value="{{ $bp->id }}">{{ $bp->tenBP }}</option>
                      @endforeach
                    </select>
                    
                  </div>
                </div>

                <input class="btn btn-secondary" type="submit" value="Lưu" />
                  </form>  
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
    </div>
  </div>


@endsection

