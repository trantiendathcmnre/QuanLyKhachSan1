
  <!-- The Modal-->
  <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <form class="needs-validation" novalidate>

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Đặt phòng</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>      
        <!-- Modal body -->
        <div class="modal-body" style="font-size: 13px">
            <div class="row form-group">
              <label for="khachhang" class="col-md-2" style="padding-top: 9px">Khách hàng:</label>
              <div class="col-md-4">
                <input type="text" class="form-control" name="khachhang" placeholder="Tên khách hàng" required>
                <div class="invalid-feedback">
                  Vui lòng nhập tên khách hàng!
                </div>
              </div>
              <label for="cmnd" class="col-md-2" style="padding-top: 9px">CMND:</label>
              <div class="col-md-4">
                <input type="text" class="form-control" name="cmnd" placeholder="CMND" required>
                <div class="invalid-feedback">
                  Vui lòng nhập CMND!
                </div>
              </div>

            </div>
        
            <div class="row form-group">
              <label class="col-md-2" style="padding-top: 9px">Phòng:</label>
              <div class="col-md-4">
                <input type="text" class="form-control" name="phong" readonly value="">     
              </div>
              
              <label for="gia" class="col-md-2" style="padding-top: 9px">Giá</label>
                <div class="col-md-4">
                  <input class="form-control" type="text" name="gia" value="" readonly>
                </div>
            </div>
            <div class="row form-group">
              <label for="khunggio" class="col-md-2" style="padding-top: 9px">Khung giờ</label>
              <div class="col-md-4">
                <select id="khunggio" name="khunggio" class="form-control ">
                  <option value="0">-----------------------</option>}
                  
                  <option value=""></option>
                  
                </select>
              </div>
              <label for="sdt" class="col-md-2" style="padding-top: 9px">Số điện thoại</label>
              <div class="col-md-4">
                <input class="form-control" type="text" name="sdt" placeholder="Số điện thoại" required>
                <div class="invalid-feedback">
                  Vui lòng nhập số điện thoại!
                </div>
              </div>
            </div>

            <div class="row form-group">
              <label for="ngayden" class="col-md-2" style="padding-top: 9px">Ngày đến</label>
              <div class="col-md-4">
                <input class="form-control" type="datetime-local" name="ngayden" required>
                <div class="invalid-feedback">
                  Vui lòng chọn ngày đến!
                </div>
              </div>
              <label for="ngaydi" class="col-md-2" style="padding-top: 9px">Ngày đi</label>
              <div class="col-md-4">
                <input class="form-control" type="datetime-local" name="ngaydi" required>
                <div class="invalid-feedback">
                  Vui lòng chọn ngày đi!
                </div>
              </div>
            </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
          <input class="btn btn-primary" type="submit" value="Đặt phòng"/>
        </div>
      </form>  
      </div>
    </div>
  </div>



