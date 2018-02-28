

<div class="container">
  <!-- The Modal-->
  <div class="modal fade" id="themphong" style="font-size: 13px">
    <div class="modal-dialog">
      <div class="modal-content">
        <form class="needs-validation" novalidate>

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Thêm phòng</h4>
          <span class="alert alert-success d-none" style="margin-left: 40px"></span>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>      
        <!-- Modal body -->
        <div class="modal-body" style="font-size: 13px">
            <div class="form-row">
              <label for="ma" class="col-md-3" style="padding-top: 9px">Mã:</label>
              <div class="col-md-9">
                <input type="text" class="form-control" id="ma" placeholder="Mã phòng" required>
                <div class="invalid-feedback">
                  Vui lòng nhập mã phòng!
                </div>
              </div>
            </div>
            <hr>
            <div class="form-row">
              <label for="ten" class="col-md-3" style="padding-top: 9px">Tên:</label>
              <div class="col-md-9">
                <input type="text" class="form-control" id="ten" placeholder="Tên phòng" required>
                <div class="invalid-feedback">
                  Vui lòng nhập tên phòng!
                </div>
              </div>
            </div>
            <hr>
            <!--select tang lau-->
            <div class="form-row">
              <label for="tang" class="col-md-3" style="padding-top: 9px">Tầng:</label>
              <div class="col-md-9">
                <select name="tang" class="form-control">
                  @foreach($tang as $TG)
                  <option value="{{ $TG->id }}">{{ $TG->tenT }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <hr>
            <!--select loai phong-->
            <div class="form-row">
              <label for="loaiphong" class="col-md-3" style="padding-top: 9px">Loại phòng:</label>
              <div class="col-md-9">
                <select name="loaiphong" class="form-control">
                  @foreach($loaiphong as $LP)
                  <option value="{{ $LP->id }}">{{ $LP->tenLP }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <hr>
            <div class="form-row">
              <label for="songuoi" class="col-md-3" style="padding-top: 9px">Số người:</label>
              <div class="col-md-4">
                <select name="songuoi" class="form-control" style="width: 55px">
                  @for($i = 1;$i < 7 ;$i++)
                  <option value="">{{ $i }}</option>
                  @endfor
                </select>
              </div>
              <label for="sogiuong" class="col-md-3 " style="padding-top: 9px">Số giường:</label>
              <div class="col-md-2">
                <select name="sogiuong" class="form-control ml-auto">
                  @for($i = 1;$i < 4 ;$i++)
                  <option value="">{{ $i }}</option>
                  @endfor
                </select>
              </div>
            </div>
            <hr>
            <!-- Tiện nghi -->
            <div class="form-row">
              <label for="tiennghi" class="col-md-3" style="padding-top: 9px">Tiện nghi</label>
              <div class="col-md-9">
                <textarea name="tiennghi" class="form-control " required></textarea>
                <div class="invalid-feedback">
                  Vui lòng nhập tiện nghi phòng!
                </div>
              </div>
            </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
          <button class="btn btn-primary" type="submit">Thêm</button>
        </div>
      </form>  
      </div>
    </div>
  </div>
</div>
