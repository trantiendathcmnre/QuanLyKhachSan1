<div class="container">
  <!-- The Modal -->
  <div class="modal fade" id="themtang">
    <div class="modal-dialog">
      <div class="modal-content">
        <form class="needs-validation" action="admin/floor/addfloor" method="POST" novalidate >
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Thêm tầng</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>      
        <!-- Modal body -->
        <div class="modal-body">
            <div class="form-row">
              <label for="ten" class="col-md-2" style="padding-top: 9px">Tên tầng</label>
              <div class="col-md-10">
                <input type="text" class="form-control" name="tentang" placeholder="Tên tầng" required>
                <div class="invalid-feedback">
                  Vui lòng nhập tên tầng!
                </div>
              </div>
            </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
          <button class="btn btn-primary" type="submit" id="themtang">Thêm</button>
        </div>
      </form>  
      </div>
    </div>
  </div>
</div>

