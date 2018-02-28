<!--Modal dat phong-->
<div id="myModal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content small">
      <form>
        <div class="modal-header ">
          <h5 class="modal-title ">Đặt phòng</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <table width="100%" align="center" cellpadding="4" cellspacing="0" border="0">
              <tbody>
                <tr>
                  <td width="30%">Khách hàng</td>
                  <td width="70%">
                    <input type="text" class="w-50">
                    <input type="text" class="w-25" placeholder="CMND/ID">
                  </td>
                </tr>
                <tr>
                  <td width="30%">Phòng</td>
                  <td width="70%">401
                  <label class="text-right">600000</label>
                  </td>
                </tr>
                <tr>
                  <td> Lựa chọn</td>
                  <td>
                    <input type="radio" name="rs_status" checked="checked"> Nhận phòng
                    <input type="radio" name="rs_status"> Đặt phòng
                  </td>
                </tr>
                <tr>
                  <td>Ngày vào</td>
                  <td>
                    <input type="date"> lúc 
                    <select name="date_in_hour">
                      <option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12" selected="selected">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option>
                    </select> h 
                    <select id="rb_date_in_minute" name="date_in_minute">
                      <option value="0" selected="selected">0</option><option value="5">5</option><option value="10">10</option><option value="15">15</option><option value="20">20</option><option value="25">25</option><option value="30">30</option><option value="35">35</option><option value="40">40</option><option value="45">45</option><option value="50">50</option><option value="55">55</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>Ngày ra</td>
                  <td>
                    <input type="date"> lúc 
                    <select name="date_out_hour"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12" selected="selected">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option>
                    </select> h
                  </td>
                </tr>
                <tr>
                  <td>Trả trước</td>
                  <td>
                    <input size="15">
                    <input type="checkbox"> Qua thẻ
                  </td>
                </tr>
                <tr>
                  <td>Khuyến mãi</td>
                  <td>
                    <input id="rb_discount" name="discount" size="15"> (số tiền hoặc %)
                    <input id="rb_other" name="other" size="15" type="hidden">
                  </td>
                </tr>
                <tr>
                  <td valign="middle">Ghi chú</td>
                  <td><textarea id="rb_note" rows="2" name="note" class="w100" style="margin-top: 5px;"></textarea></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">Đóng</button>
          <button type="button" class="btn btn-outline-secondary btn-sm">Áp dụng</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!--end modal dat phong-->