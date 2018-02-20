<!--Modal hoa don-->
<div id="modalhoadon" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content small">
      <div class="modal-header bg-dark">
        <h5 class="modal-title text-light">Hóa đơn</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <table border="0" width="100%" style="font-size:12px" cellspacing="0" cellpadding="3">
            <tbody>
              <tr>
                <td colspan="2">
                  <div>Mã HD: <b>627</b></div>
                </td>
              </tr>
              <tr>
                <td width="95">Ngày vào:</td>
                <td>17:15 - 09/02/2018</td>
              </tr>
              <tr>
                <td>Ngày ra:</td>
                <td id="billdateout">22:23 - 09/02/2018</td>
              </tr>
              <tr>
                <td>Tiền phòng:</td>
                <td>
                  <span><b>190,000</b> VND</span>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Tiền dịch vụ:</td>
                <td class="checkout-service-list"></td>
              </tr>
              <tr class="quick-service">
                <td> </td>
                <td>
                  <select class="quick-service-list">
                  <optgroup label="Sử dụng nhiều">
                    <option value="6889"> &nbsp; Giặt ủi</option><option value="6891"> &nbsp; Nước suối </option></optgroup><optgroup label="Đồ uống"><option value="12134"> &nbsp; Bia Heineken</option><option value="12136"> &nbsp; Bia Tiger</option><option value="6897"> &nbsp; Bò cụng</option><option value="6901"> &nbsp; Cam ép Twister</option><option value="12126"> &nbsp; Cam ép Twister</option><option value="6895"> &nbsp; Coca cola</option><option value="12128"> &nbsp; Dr Thanh</option><option value="6899"> &nbsp; Nước yến</option><option value="6907"> &nbsp; Sữa chua</option><option value="6905"> &nbsp; Sữa tươi</option><option value="12118"> &nbsp; Trà xanh</option><option value="6893"> &nbsp; Trà xanh</option></optgroup><optgroup label="Đồ dùng"><option value="6915"> &nbsp; Bật lửa</option><option value="12140"> &nbsp; Bật lửa</option><option value="12138"> &nbsp; Thuốc Caraven</option><option value="6913"> &nbsp; Thuốc Caraven</option></optgroup><optgroup label="Dịch vụ"><option value="12114"> &nbsp; Giặt ủi</option><option value="7229"> &nbsp; VAT</option></optgroup><option value="-1">Mục khác</option>
                  </select>
                  <span> x 
                    <select style="font-size: 13px;">
                      <option value="1" selected="">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="0">Khác</option>
                      <option value="-1">-1</option>
                      <option value="-2">-2</option>
                      <option value="-3">-3</option>
                      <option value="-4">-4</option>
                      <option value="-5">-5</option>
                    </select>
                  </span>
                  
                  <input type="button" value="THÊM">
                </td>
              </tr>
              <tr>
                <td></td>
                <td>
                  <div >Tổng tiền (1): <b id="sumRoomService">190,000</b> VND
                  </div>
                </td>
              </tr>
              <tr>
                <td>Trả trước (2):</td>
                <td>
                  <input type="text" >&nbsp;VND&nbsp; 
                </td>
              </tr>
              <tr>
                <td>Khuyến mãi (3):</td>
                <td>
                  <input type="text">&nbsp;(VND/%)
                </td>
              </tr>
              <tr>
                <td valign="top">Khoản khác (4):</td>
                <td>
                  <input type="text"></td>
                </tr>
                <tr>
                  <td valign="middle">Ghi chú:</td>
                  <td>
                    <textarea id="pnote" rows="2" name="note" class="pnote" style="margin-top: 5px;"></textarea>
                  </td>
                </tr>
                <tr>
                  <td valign="top">Thanh toán:</td>
                  <td>
                    <b>190,000</b> VND  
                    <span>~ <b>8.92</b> USD</span><br>(1) - (2) - (3) +/- (4)
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td>
                    <label >
                      <input type="checkbox" > Chưa thanh toán
                    </label>
                    <label >
                      <input type="checkbox"> Qua thẻ
                    </label>
                  </td>
                </tr>
              </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">Đóng</button>
        <button type="button" class="btn btn-outline-secondary btn-sm">Áp dụng</button>
      </div>
    </div>
  </div>
</div>
<!--end modal hoa don-->