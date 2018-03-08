
<!-- The Modal-->
  <div class="modal fade bd-example-modal-lg" id="edit" style="font-size: 13px">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form class="needs-validation" novalidate id="frm-sua" action="{{ URL::to('admin/floor/editroom') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Thêm phòng</h4>
          <span class="alert alert-success d-none" style="margin-left: 40px"></span>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>      
        <!-- Modal body -->
        <div class="modal-body" style="font-size: 13px">
            <div class="form-group row">
              <label for="maphong" class="col-md-2" style="padding-top: 9px">Mã phòng:</label>
              <div class="col-md-10">
                <input type="text" class="form-control" name="maphong" placeholder="Mã phòng" required>
                <div class="invalid-feedback">
                  Vui lòng nhập mã phòng!
                </div>
              </div>
              
            </div>


            <div class="form-group row">
              <!-- loai phong -->
              <label for="loaiphong" class="col-md-2" style="padding-top: 9px">Loại phòng:</label>
              <div class="col-md-4">
                <select name="loaiphong" class="form-control">
                  @foreach($loaiphong as $LP)
                  <option value="{{ $LP->id }}">{{ $LP->tenLP }}</option>
                  @endforeach
                </select>
              </div>

              <!-- tang -->
              <label for="tang" class="col-md-2" style="padding-top: 9px">Tầng:</label>
              <div class="col-md-4">
                <select name="tang" class="form-control">
                  @foreach($tang as $TG)
                  <option value="{{ $TG->id }}">{{ $TG->tenT }}</option>
                  @endforeach
                </select>
              </div>
            </div>
      

            <div class="form-group row">
              <label for="songuoi" class="col-md-2" style="padding-top: 9px">Số người:</label>
              <div class="col-md-4">
                <select name="songuoi" class="form-control">
                  @for($i = 1;$i < 7 ;$i++)
                  <option value="{{ $i }}">{{ $i }}</option>
                  @endfor
                </select>
              </div>
              <label for="sogiuong" class="col-md-2 " style="padding-top: 9px">Số giường:</label>
              <div class="col-md-4">
                <select name="sogiuong" class="form-control ml-auto">
                  @for($i = 1;$i < 4 ;$i++)
                  <option value="{{ $i }}">{{ $i }}</option>
                  @endfor
                </select>
              </div>
            </div>

            <div class="form-group row">
              <!-- tien nghi -->
              <label for="tiennghi" class="col-md-2" style="padding-top: 9px">Tiện nghi</label>
              <div class="col-md-10">
                <textarea name="tiennghi" class="form-control " required></textarea>
                <div class="invalid-feedback">
                  Vui lòng nhập tiện nghi phòng!
                </div>
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

