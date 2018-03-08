
<div class="container">
  <!-- The Modal-->
  <div class="modal fade" id="thembophan" style="font-size: 13px">
    <div class="modal-dialog">
      <div class="modal-content">
        <form class="needs-validation" novalidate id="frm-thembophan" action="{{ URL::to('admin/employee/adddepartment') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Thêm bộ phận</h4>
          <span class="alert alert-success d-none" style="margin-left: 40px"></span>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>      
        <!-- Modal body -->
        <div class="modal-body" style="font-size: 13px">
          <!-- ma bo phan -->
            <div class="form-group row">
              <label for="mabophan" class="col-md-3" style="padding-top: 9px">Mã bộ phận:</label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="mabophan" placeholder="Mã bộ phận" required>
                <div class="invalid-feedback">
                  Vui lòng nhập mã bộ phận!
                </div>
              </div>
            </div>
            <!-- ten bo phan -->
            <div class="form-group row">
              <label for="tenbophan" class="col-md-3" style="padding-top: 9px">Tên:</label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="tenbophan" placeholder="Tên bộ phận" required>
                <div class="invalid-feedback">
                  Vui lòng nhập tên bộ phận!
                </div>
              </div>
            </div>
            <!-- so dien thoai -->
            <div class="form-group row">
              <label for="sdtbophan" class="col-md-3" style="padding-top: 9px">Số điện thoại:</label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="sdtbophan" placeholder="Số điện thoại">
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
</div>
