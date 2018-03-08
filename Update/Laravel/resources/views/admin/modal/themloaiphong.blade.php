
<!-- The Modal -->
  <div class="modal fade" id="add-floorstyle">
    <div class="modal-dialog">
      <div class="modal-content">
        <form class="needs-validation" id="frm-themloaiphong" novalidate action="admin/floor/addfloorstyle" method="POST">
        {{ csrf_field() }}
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Thêm loại phòng</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>      
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-row">
              <label for="ten" class="col-md-2" style="padding-top: 9px">Tên loại</label>
              <div class="col-md-10">
                <input type="text" class="form-control" name="loaiphong" placeholder="Tên loại phòng" required>
                <div class="invalid-feedback">
                  Vui lòng nhập tên loại phòng!
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

