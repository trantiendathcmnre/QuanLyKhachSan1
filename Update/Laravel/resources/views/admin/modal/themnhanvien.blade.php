

  <!-- The Modal-->
  <div class="modal fade bd-example-modal-lg" id="themnhanvien" style="font-size: 13px">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form class="needs-validation" novalidate id="frm-themnhanvien" action="{{ URL::to('admin/employee/addstaff') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Thêm nhân viên</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>      
        <!-- Modal body -->
        <div class="modal-body" style="font-size: 13px">
          <!-- ma bo phan -->
            <div class="form-group row">
              <label for="manhanvien" class="col-md-2" style="padding-top: 9px">Mã nhân viên</label>
              <div class="col-md-4">
                <input type="text" class="form-control" name="manhanvien" placeholder="Mã nhân viên" required>
                <div class="invalid-feedback">
                  Vui lòng nhập mã nhân viên!
                </div>
              </div>
              <!-- ten nhan vien  -->
              <label for="tennhanvien" class="col-md-2" style="padding-top: 9px">Tên nhân viên</label>
              <div class="col-md-4">
                <input type="text" class="form-control" name="tennhanvien" placeholder="Tên nhân viên" required>
                <div class="invalid-feedback">
                  Vui lòng nhập tên nhân viên!
                </div>
              </div>
            </div>
            <!-- ten bo phan -->
            <div class="form-group row">
              
            </div>
            <!-- gioi tinh -->
            <div class="form-group row">
              <label for="gioitinh" class="col-md-2" style="padding-top: 9px">Giới tính</label>
              <div class="col-md-4">
                <div class="form-check form-check-inline ">
                <input class="form-check-input" type="radio" name="gioitinh" value="Nam" checked>
                <label class="form-check-label" for="inlineRadio1"> Nam </label>
              </div>
              <div class="form-check form-check-inline ">
                <input class="form-check-input" type="radio" name="gioitinh" value="Nữ">
                <label class="form-check-label" for="inlineRadio2"> Nữ</label>
              </div>
              </div>
              <!-- so dien thoai -->
              <label for="sdt" class="col-md-2" style="padding-top: 9px">Số điện thoại</label>
              <div class="col-md-4">
                <input type="text" class="form-control" name="sdt" placeholder="Số điện thoại" required>
                <div class="invalid-feedback">
                  Vui lòng nhập số điện thoại!
                </div>
              </div>

            </div>
            <!-- ngày sinh  -->
            <div class="form-group row">
              <label for="ngaysinh" class="col-md-2" style="padding-top: 9px">Ngày sinh</label>
              <div class="col-md-4">
                <input type="date" class="form-control" name="ngaysinh" placeholder="Ngày sinh" required>
                <div class="invalid-feedback">
                  Vui lòng chọn ngày sinh!
                </div>
              </div>
              <!-- email -->
              <label for="email" class="col-md-2" style="padding-top: 9px">Email</label>
              <div class="col-md-4">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
                <div class="invalid-feedback">
                  Vui lòng nhập email !
                </div>
              </div>
            </div>

            <div class="form-group row">
              <label for="trangthai" class="col-md-2" style="padding-top: 9px">Trạng thái</label>
              <div class="col-md-4">
                <select name="trangthai" class="form-control">
                  <option value=1>Đang làm</option>
                  <option value=0>Nghỉ việc</option>
                </select>
                <div class="invalid-feedback">
                  Vui lòng chọn trạng thái!
                </div>
              </div>
              <!-- email -->
              <label for="bophan" class="col-md-2" style="padding-top: 9px">Bộ phận</label>
              <div class="col-md-4">
                <select name="bophan" class="form-control">
                  @foreach($bophan as $bp)
                  <option value="{{ $bp->id }}">{{ $bp->tenBP }}</option>
                  @endforeach
                </select>
                <div class="invalid-feedback">
                  Vui lòng chọn bộ phận !
                </div>
              </div>
            </div>
            
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
          <input class="btn btn-primary" type="submit" value="Lưu" />
        </div>
      </form>  
      </div>
    </div>
  </div>

