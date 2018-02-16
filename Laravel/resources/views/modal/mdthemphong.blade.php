<!--Modal dat phong-->
<div id="mdthemphong" class="modal text-left" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h5 class="modal-title text-light">Thêm phòng</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <table width="100%" align="center" cellpadding="4" cellspacing="0" border="0">
            <tbody>
              <tr>
                <td width="30%">Mã phòng</td>
                <td width="70%">
                  <input type="text" class="w-100">  
                </td>
              </tr>
              <tr>
                <td width="30%">Tên phòng</td>
                <td width="70%">
                  <input type="text" class="w-100">
                </td>
              </tr>
              <tr>
                <td width="30%">Tầng</td>
                <td width="70%">
                  <select name="tang">
                    <option value="">Tầng trệt</option><option value="">Tầng 1</option><option value="">Tầng 2</option><option value="">Tầng 3</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td width="30%">Loại phòng</td>
                <td width="70%">
                  <select name="loaiphong">
                    <option value="">Standard</option><option value="">Superior</option><option value="">Deluxe</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td width="30%">Tiện nghi</td>
                <td width="70%">
                  <textarea name="tiennghi"></textarea>
                </td>
              </tr>
              <tr>
                <td width="30%">Số người</td>
                <td width="70%">
                  <select name="songuoi" width="w-25">
                    <option value="">1</option><option value="">2</option>
                    <option value="">3</option><option value="">4</option>
                    <option value="">5</option><option value="">6</option>
                    <option value="">7</option><option value="">8</option>
                    <option value="">9</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td width="30%">Số giường</td>
                <td width="70%">
                  <select name="songuoi">
                    <option value="">1</option><option value="">2</option>
                    <option value="">3</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td width="30%">Ghi chú</td>
                <td width="70%">
                  <textarea name="tiennghi"></textarea>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">Đóng</button>
        <button type="button" class="btn btn-outline-secondary btn-sm">Thêm phòng</button>
      </div>
    </div>
  </div>
</div>
<!--end modal dat phong-->