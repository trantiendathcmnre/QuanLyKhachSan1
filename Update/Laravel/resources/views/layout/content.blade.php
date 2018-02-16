<div id="content">
  <div class="container-fluid">
        <div class="row borderbt">
          <div class="col-md-auto mr-auto">
            <h5>Danh sách phòng</h5>
          </div>
          <div class="col-md-auto">
            <div id="list">
              <ul class="list-unstyled">
                <li><a><i class="far fa-sticky-note" title="Nhật kí công việc"></i></a></li><!--hien thi nhat ki cong viec theo ngay, nhan phong, tra phong, da dat coc,...-->
                <li><a><i class="far fa-calendar-alt" title="Hiện trạng phòng"></i></a></li><!--hien thi thong ke hien trang phong-->
                <li><a><i class="far fa-chart-bar" title="Báo cáo"></i></a></li><!--yeu cau in bao cao-->
                <li><a><i class="fas fa-sync-alt" title="Cập nhật mới"></i></a></li><!--cap nhat lai he thong-->
              </ul>
            </div>
          </div>
        </div>
        <!--Tong so phong , chu thich ki hieu-->
        <div class="row white" >
          <div class="col-md-auto">
            <div id="thumb">
              <ul class="list-unstyled">
                <li><span class="trong">37</span>&nbsp;<label>Còn trống</label></li>
                <li><span class="dadat">15</span>&nbsp;<label>Đã đặt</label></li>
                <li><span class="dango">37</span>&nbsp;<label>Đang ở</label></li>
                <li><img src="{{asset('images/icon-Stop.png')}}" alt="">&nbsp;<label>Cần sửa</label></li>
                <li><img src="{{asset('images/icon-Alert.png')}}" alt="">&nbsp;<label>Chưa dọn</label></li>
              </ul>
            </div>
          </div>
        </div>
        <!--Danh sach phong va hien trang-->
        <div class="row white" >
          <div class="col-md-12">
            @include('modal.mdhoadon')
            <div class="room rmaintenance" data-toggle="modal" data-target="#modalhoadon">101</div>
            <div class="room rbooked rnotready">102</div>
            <div class="room rnotready">103</div>
            <div class="room rbooked rnotready">104</div>
            <div class="room rbooked rnotready">105</div>
            <div class="room rnotready">106</div>
            <div class="room  rnotready">107</div>
            <div class="room rmaintenance rnotready">108</div>
            <div class="room rbooked rnotready">109</div>
            <div class="room rbooked rnotready">110</div>
          </div>
          <div class="col-md-12">
            <div class="room rbooked">201</div>
            <div class="room rbooked rnotready">202</div>
            <div class="room">203</div>
            <div class="room rmaintenance rprepare">204</div>
            <div class="room rbooked rnotready">205</div>
            <div class="room">206</div>
            <div class="room rbooked rnotready">207</div>
            <div class="room">208</div>
            <div class="room rmaintenance rprepare">209</div>
            <div class="room rbooked rnotready">210</div>
          </div>
          <div class="col-md-12">
            <div class="room rmaintenance">301</div>
            <div class="room rbooked rnotready">302</div>
            <div class="room rnotready">303</div>
            <div class="room rbooked rnotready">304</div>
            <div class="room rbooked rnotready">305</div>
            <div class="room rnotready">306</div>
            <div class="room  rnotready">307</div>
            <div class="room rmaintenance rnotready">308</div>
            <div class="room rbooked rnotready">309</div>
            <div class="room rbooked rnotready">310</div>
          </div>
          <div class="col-md-12">
            @include('modal.mddatphong')
            <div class="room" data-toggle="modal" data-target="#myModal">401</div>
            <div class="room">402</div>
            <div class="room">403</div>
            <div class="room">404</div>
            <div class="room">405</div>
            <div class="room">406</div>
            <div class="room">407</div>
            <div class="room">408</div>
            <div class="room">409</div>
            <div class="room">410</div>
          </div>
        </div>
        <div class="row borderbt" >
          <div class="col-md-auto mr-auto">
            <h5>Khách hàng đang ở và đã đặt</h5>
          </div>
          <div class="col-md-auto">
            <form class="form-inline">
              <input id="search" class="form-control w-75 mr-2" type="text" placeholder="Tìm kiếm" aria-label="Search">
              <i class="fas fa-search" aria-hidden="true"></i>
            </form>
          </div>
        </div>
        <!--Tong so phong , chu thich ki hieu-->
        <div class="row white">
          <div class="col-md-8">
            <div id="thaotac">
              <form class="form-inline ">
                <select class="form-control sl" name="">
                  <option value="">Chọn thao tác</option>
                  <option value="">Đặt phòng</option>
                  <option value="">Nhận phòng</option>
                  <option value="">Thêm vào phòng</option>
                  <option value="">Cảnh báo khách hàng</option>
                </select>
              </form>
            </div>
          </div>
          <div class="col-md-4 text-right align-items-center align-self-center mr-auto" style="font-size: 20px">
            @include('modal.mdthemkh')
            <a style="text-decoration: none" href="#" class="text-dark" title="Thêm khách hàng" data-toggle="modal" data-target="#mdthemkh">
              <i class="fas fa-plus-circle"></i> Thêm khách hàng</a><!--Them khach hang-->
          </div>
        </div>
        <!--Danh sach phong va hien trang-->
        <div class="row white" >
          <div class="col-md-12">
            <div class="table-responsive" id="tbkhachhang">
              <table class="table table-striped table-hover table-sm">
                <thead>
                  <tr>
                    <th>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input id="chonhet" type="checkbox" class="form-check-input" value="">Họ tên
                        </label>
                      </div>
                    </th>
                    <th>Giới tính</th>
                    <th>Ngày sinh</th>
                    <th>CMND/ID</th>
                    <th>Địa chỉ</th>
                    <th>Điện thoại</th>
                    <th>Lượt/Năm</th>
                    <th>Tổng lượt</th>
                    <th>Trong năm</th>
                    <th>Thanh toán</th>
                    <th>Công cụ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input name="chon" type="checkbox" class="form-check-input" value="">Nguyễn Văn A
                        </label>
                      </div>
                    </td>
                    <td>Nam</td>
                    <td>20/10/1990</td>
                    <td>212781094</td>
                    <td>Quận Bình Tân</td>
                    <td>01677265514</td>
                    <td>4</td>
                    <td>9</td>
                    <td>9,505,000</td>
                    <td>15,347,000</td>
                    <td>
                      <a class="text-dark" href="#"><i class="fas fa-pencil-alt"></i></a>&nbsp;
                      <a class="text-dark" href="#"><i class="fas fa-trash-alt"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input name="chon" type="checkbox" class="form-check-input" value="">Nguyễn Văn A
                        </label>
                      </div>
                    </td>
                    <td>Nam</td>
                    <td>20/10/1990</td>
                    <td>212781094</td>
                    <td>Quận Bình Tân</td>
                    <td>01677265514</td>
                    <td>4</td>
                    <td>9</td>
                    <td>9,505,000</td>
                    <td>15,347,000</td>
                    <td>
                      <a class="text-dark" href="#"><i class="fas fa-pencil-alt"></i></a>&nbsp;
                      <a class="text-dark" href="#"><i class="fas fa-trash-alt"></i></a>
                    </td>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input name="chon" type="checkbox" class="form-check-input" value="">Nguyễn Văn A
                        </label>
                      </div>
                    </td>
                    <td>Nam</td>
                    <td>20/10/1990</td>
                    <td>212781094</td>
                    <td>Quận Bình Tân</td>
                    <td>01677265514</td>
                    <td>4</td>
                    <td>9</td>
                    <td>9,505,000</td>
                    <td>15,347,000</td>
                    <td>
                      <a class="text-dark" href="#"><i class="fas fa-pencil-alt"></i></a>&nbsp;
                      <a class="text-dark" href="#"><i class="fas fa-trash-alt"></i></a>
                    </td>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input name="chon" type="checkbox" class="form-check-input" value="">Nguyễn Văn A
                        </label>
                      </div>
                    </td>
                    <td>Nam</td>
                    <td>20/10/1990</td>
                    <td>212781094</td>
                    <td>Quận Bình Tân</td>
                    <td>01677265514</td>
                    <td>4</td>
                    <td>9</td>
                    <td>9,505,000</td>
                    <td>15,347,000</td>
                    <td>
                      <a class="text-dark" href="#"><i class="fas fa-pencil-alt"></i></a>&nbsp;
                      <a class="text-dark" href="#"><i class="fas fa-trash-alt"></i></a>
                    </td>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!--Phan trang danh sach khach hang-->
        <div class="row white">
          <div class="col-md-auto ml-auto" id="phantrang">
            <ul class="pagination pagination-sm">
              <li class="page-item"><a class="page-link rounded-circle" href="#"><i class="fas fa-angle-left"></i></a></li>
              <li class="page-item"><a class="page-link rounded-circle" href="#">1</a></li>
              <li class="page-item"><a class="page-link rounded-circle" href="#">2</a></li>
              <li class="page-item"><a class="page-link rounded-circle" href="#">3</a></li>
              <li class="page-item"><a class="page-link rounded-circle" href="#">4</a></li>
              <li class="page-item"><a class="page-link rounded-circle" href="#">5</a></li>
              <li class="page-item"><a class="page-link rounded-circle" href="#"><i class="fas fa-angle-right"></i></a></li>
            </ul>
          </div>
        </div>
  </div>
</div>