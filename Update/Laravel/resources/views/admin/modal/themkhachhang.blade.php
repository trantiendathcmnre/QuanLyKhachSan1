<!-- The Modal-->
<div class="modal fade bd-example-modal-lg" id="add-customer" style="font-size: 13px">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form class="needs-validation" id="frm-themkhachhang" action="{{ URL::to('admin/home/addcustomer') }}" method="post" novalidate>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Thêm khách hàng</h4>
        <span class="alert alert-success d-none" style="margin-left: 40px"></span>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>      
      <!-- Modal body -->
      <div class="modal-body" style="font-size: 13px">
          <div class="form-group row">
            <label for="hoten" class="col-md-3" style="padding-top: 9px">Họ và tên</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="hoten" placeholder="Họ và tên" required>
              <div class="invalid-feedback">
                Vui lòng nhập họ tên khách hàng!
              </div>
            </div>
          </div>
          
          <div class="form-group row">
            <label for="cmnd" class="col-md-3" style="padding-top: 9px">CMND</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="cmnd" placeholder="CMND" required>
              <div class="invalid-feedback">
                Vui lòng nhập CMND !
              </div>
            </div>
          </div>
         
          <!--select tang lau-->
          <div class="form-group row">
            <label for="gioitinh" class="col-md-3" style="padding-top: 9px">Giới tính</label>
            <div class="form-inline col-md-9">
              <input class="form-control" type="radio" name="gioitinh" checked="checked" id="gioitinh" value="Nam">&nbsp;Nam&nbsp;&nbsp;&nbsp;
              <input class="form-control" type="radio" name="gioitinh" id="gioitinh" value="Nữ">&nbsp;Nữ
            </div>
          </div>
      
          <!--select loai phong-->
          <div class="form-group row">
            <label for="ngaysinh" class="col-md-3" style="padding-top: 9px">Ngày sinh</label>
            <div class="col-md-9">
              <input type="date" class="form-control" name="ngaysinh">
            </div>
          </div>
      
          <div class="form-group row">
            <label for="sdt" class="col-md-3" style="padding-top: 9px">Số điện thoại</label>
            <div class="col-md-9">
              <input class="form-control" type="text" name="sdt" value="" placeholder="Số điện thoại" required> 
              <div class="invalid-feedback">
                Vui lòng nhập số điện thoại !
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="dc" class="col-md-3 " style="padding-top: 9px">Địa chỉ</label>
            <div class="col-md-9">
              <input class="form-control" type="text" name="dc" value="" placeholder="Địa chỉ">
            </div>
          </div>
      </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Đóng</button>
        <input class="btn btn-primary btn-sm" type="submit" value="Lưu" />
      </div>
    </form>  
    </div>
  </div>
</div>


