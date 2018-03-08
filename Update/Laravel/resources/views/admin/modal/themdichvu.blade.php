<div class="container">
  <!-- The Modal -->
  <div class="modal fade bd-example-modal-lg" id="themdichvu">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form class="needs-validation" id="frm-themdichvu" novalidate action="{{ URL::to('admin/information/addservice') }}" method="POST">
        {{ csrf_field() }}
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Thêm dịch vụ</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>      
        <!-- Modal body -->
          <div class="modal-body">
            <div class="form-group row">
              <!-- ten dich vu -->
              <label for="tendv" class="col-md-2" style="padding-top: 9px">Tên dịch vụ</label>
              <div class="col-md-4">
                <input type="text" class="form-control" name="tendv" placeholder="Tên dịch vụ" required>
                <div class="invalid-feedback">
                  Vui lòng nhập tên dịch vụ!
                </div>
              </div>


              <!-- don vi dich vu -->
              <label for="donvi" class="col-md-2" style="padding-top: 9px">Đơn vị</label>
              <div class="col-md-4">
                <input type="text" class="form-control" name="donvi" placeholder="Đơn vị" required>
                <div class="invalid-feedback">
                  Vui lòng nhập đơn vị!
                </div>
              </div>
            </div>
          
          
          
            <div class="form-group row">

            <!-- so luong -->
              <label for="soluong" class="col-md-2" style="padding-top: 9px">Số lượng</label>
              <div class="col-md-4">
                <input type="number" class="form-control" name="soluong" placeholder="Số lượng" required>
                <div class="invalid-feedback">
                  Vui lòng nhập số lượng!
                </div>
              </div>

              <!-- don gia  -->
          
              <label for="dongia" class="col-md-2" style="padding-top: 9px">Đơn giá</label>
              <div class="col-md-4">
                <input type="text" class="form-control" name="dongia" placeholder="Đơn giá" required>
                <div class="invalid-feedback">
                  Vui lòng nhập đơn giá!
                </div>
              </div>
         
            </div>
          </div>
          
        
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
            <input class="btn btn-success" type="submit" value="Thêm" />
          </div>
      </form>  
      </div>
    </div>
  </div>
</div>

