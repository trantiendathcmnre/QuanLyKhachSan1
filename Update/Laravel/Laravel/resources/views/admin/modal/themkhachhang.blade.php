<!--Modal dat phong-->
<div id="themkh" class="modal small text-left" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content small">
      <div class="modal-header bg-dark">
        <h5 class="modal-title text-light">Thêm khách hàng</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <form>
          <table width="100%" align="center" cellpadding="4" cellspacing="0" border="0">
            <tbody>
              <tr>
                <td><span id="messsuccess"></span></td>
              </tr>
              <tr>
                <td width="30%">Họ và tên</td>
                <td width="70%">
                  <input type="text" class="form-control-sm w-100" name="hoten">
                  
                </td>
              </tr>
              <tr>
                <td width="30%">CMND</td>
                <td width="70%">
                  <input type="text" class="form-control-sm w-100" name="cmnd">
                  
                </td>
              </tr>
              <tr>
                <td width="30%">Giới tính</td>
                <td width="70%">
                  <input type="radio" name="gioitinh" checked="checked" id="gioitinh" value="nam"> Nam
                  <input type="radio" name="gioitinh" id="gioitinh" value="nữ">Nữ
                </td>
              </tr>
              <tr>
                <td width="30%">Ngày sinh</td>
                <td width="70%">
                  <input type="date" class="form-control-sm w-100" name="ngaysinh">
                </td>
              </tr>
              <tr>
                <td width="30%">Số điện thoại</td>
                <td width="70%">
                  <input type="text" class="form-control-sm w-100" name="sdt">
                  
                </td>
              </tr>
              <tr>
                <td width="30%">Địa chỉ</td>
                <td width="70%">
                  <input type="text" class="form-control-sm w-100" name="diachi">
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">Đóng</button>
        <button type="submit" id="themkhachhang" class="btn btn-outline-secondary btn-sm">Thêm</button>
      </div>
    </div>
  </div>
</div>
<!--end modal dat phong-->
