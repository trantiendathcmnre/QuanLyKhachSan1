<!doctype html>
<html lang="en">
  <head>
    <!--
      Management for Hotel 307
      Author: Tran Tien Dat
      Date: 7/2/2018 
    -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('plugin/font_awesome/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <title>Quản lý phòng</title>  
    
  </head>
  <body>
    @include('layout.header')
    @include('layout.mainmenu')
    <div id="submenu">
      <div class="container-fluid">
        <div class="row white">
          <div class="col-md-12">
            <!-- Nav pills menu con quan ly phong-->
            <ul class="nav nav-pills" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="#menu1">Thông tin phòng</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#menu2">Giá phòng</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#menu3">Cài đặt giá</a>
              </li>
            </ul>
          <!-- Tab panes -->
          
          </div>
        </div>
      </div>
    </div>
    <div class="tab-content">
      <!--quan ly phong/ thong tin phong-->
      <div id="menu1" class="container-fluid tab-pane active"><br>
              <div id="content">
                <div class="container-fluid">
                  <div class="row borderbt"><!--Phan loai phong-->
                    <div class="col-md-auto mr-auto">
                      <h5>Phân loại phòng</h5>
                    </div>
                  </div>
                  <!--Phan loai tang lau-->
                  <div id="title">
                    <div class="row white" >
                      <div class="col-md-auto">
                        Thông tin tầng:
                      </div>
                      <div class="col-md-auto ml-auto">
                        @include('modal.mdthemtang')
                        <a class="text-dark" href="#" data-toggle="modal" data-target="#mdthemtang"><img src="{{asset('images/icAd.png')}}" alt=""> Thêm tầng</a>
                      </div>
                    </div>
                  </div>
                  <!--Danh sach tang lau-->
                  <div class="row white" >
                    <div class="col-md-12">
                      <div class="floor">
                        <strong>Tầng trệt</strong>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xóa</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <strong>Tầng 1</strong>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xóa</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <strong>Tầng 2</strong>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xóa</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <strong>Tầng 3</strong>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xóa</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--/Danh sach tang lau-->
                  <!--Danh sach loai phong-->
                  <div id="title">
                    <div class="row white" >
                      <div class="col-md-auto">
                          Phân loại phòng:
                      </div>
                      <div class="col-md-auto ml-auto"><!--them moi loai phong-->
                          @include('modal.mdthemloaiphong')
                          <a class="text-dark" href="#" data-toggle="modal" data-target="#mdthemloaiphong"><img src="{{asset('images/icAd.png')}}" alt=""> Thêm loại phòng</a>
                      </div>
                    </div>
                  </div>
                  <div class="row white" >
                    <div class="col-md-12">
                      <div class="floor">
                        <strong>Deluxe</strong>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xóa</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <strong>Superior</strong>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xóa</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <strong>Standard</strong>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xóa</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--/Danh sach loai phong-->
                  <!--Thong tin chi tiet tien nghi cua tung phong-->
                  <div class="row borderbt" >
                    <div class="col-md-auto mr-auto">
                      <h5>Thông tin phòng</h5>
                    </div>
                    <div class="col-md-2 align-items-center align-self-center ml-auto">
                      @include('modal.mdthemphong')
                      <a href="#" class="text-dark" title="Thêm phòng" style="font-size: 15px; text-decoration: none" data-target="#mdthemphong" data-toggle="modal"><img src="{{asset('images/icAd.png')}}"> Thêm phòng</a><!--Them moi phong-->
                    </div>
                  </div>
                  <!--Thong tin tung phong -->
                  <!--Danh sach phong va thong tin phong-->
                  <div class="row white" >
                    <div class="col-md-12">
                      <div class="table-responsive" id="tbphong">
                        <table class="table table-striped table-hover table-sm">
                          <thead>
                            <tr>
                              <th>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input id="chonhet" type="checkbox" class="form-check-input" value="">Phòng
                                  </label>
                                </div>
                              </th>
                              <th>Tiện nghi</th>
                              <th>Thông tin phòng</th>
                              <th>Số người</th>
                              <th>Số giường</th>
                              <th>Công cụ</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input name="chon" type="checkbox" class="form-check-input" value="">101
                                  </label>
                                </div>
                              </td>
                              <td>Tivi, tủ lạnh, máy lạnh, máy giặt sấy,bồn tắm, phòng xông hơi</td>
                              <td>Phòng đầy đủ tiện nghi.</td>
                              <td>8</td>
                              <td>4</td>
                              <td>
                                <a class="text-dark" href="#"><i class="fas fa-pencil-alt"></i></a>&nbsp;
                                <a class="text-dark" href="#"><i class="fas fa-trash-alt"></i></a>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input name="chon" type="checkbox" class="form-check-input" value="">102
                                  </label>
                                </div>
                              </td>
                              <td>Tivi, tủ lạnh, máy lạnh, </td>
                              <td>Hư vòi nước</td>
                              <td>2</td>
                              <td>4</td>
                              <td>
                                <a class="text-dark" href="#"><i class="fas fa-pencil-alt"></i></a>&nbsp;
                                <a class="text-dark" href="#"><i class="fas fa-trash-alt"></i></a>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input name="chon" type="checkbox" class="form-check-input" value="">103
                                  </label>
                                </div>
                              </td>
                              <td>Tivi, tủ lạnh, máy lạnh, máy giặt sấy,bồn tắm, phòng xông hơi</td>
                              <td></td>
                              <td>8</td>
                              <td>4</td>
                              <td>
                                <a class="text-dark" href="#"><i class="fas fa-pencil-alt"></i></a>&nbsp;
                                <a class="text-dark" href="#"><i class="fas fa-trash-alt"></i></a>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input name="chon" type="checkbox" class="form-check-input" value="">104
                                  </label>
                                </div>
                              </td>
                              <td>Tivi, tủ lạnh, máy lạnh, máy giặt sấy,bồn tắm, phòng xông hơi</td>
                              <td>Khách hàn quốc</td>
                              <td>1</td>
                              <td>1</td>
                              <td>
                                <a class="text-dark" href="#"><i class="fas fa-pencil-alt"></i></a>&nbsp;
                                <a class="text-dark" href="#"><i class="fas fa-trash-alt"></i></a>
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
                        <li class="page-item"><a class="page-link rounded-circle" href="#"><i class="fas fa-angle-right"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
      </div><!--/quan ly phong/ thong tin phong-->
      <!--quan ly phong/ gia phong-->
      <div id="menu2" class="container-fluid tab-pane fade"><br>
              <div id="content">
                <div class="container-fluid">
                  <div class="row borderbt"><!--Phan loai phong-->
                    <div class="col-md-auto mr-auto">
                      <h5>Giá phòng</h5>
                    </div>
                  </div>
                  <!--Danh sach phong va thong tin phong-->
                  <div class="row white" >
                    <div class="col-md-12">
                      <div class="table-responsive" id="tbphong">
                        <table class="table table-striped table-hover table-sm">
                          <thead>
                            <tr>
                              <th>Phòng</th>
                              <th>Giá theo giờ</th>
                              <th>Giá qua đêm</th>
                              <th>Giá theo ngày</th>
                              <th>Giá theo tuần</th>
                              <th>Giá theo tháng</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>101</td>
                              <td>
                                1h: 70,000<br>
                                2h: 100,000<br>
                                3h: 130,000<br>
                                4h: 160,000<br>
                                5h: 190,000<br>
                                6h: 210,000
                              </td>
                              <td>
                                20h00: 400,000<br>
                                21h00: 350,000<br>
                                22h00: 300,000
                              </td>
                              <td>600,000</td>
                              <td>0</td>
                              <td>0</td>
                            </tr>
                            <tr>
                              <td>101</td>
                              <td>
                                1h: 70,000<br>
                                2h: 100,000<br>
                                3h: 130,000<br>
                                4h: 160,000<br>
                                5h: 190,000<br>
                                6h: 210,000
                              </td>
                              <td>
                                20h00: 400,000<br>
                                21h00: 350,000<br>
                                22h00: 300,000
                              </td>
                              <td>700,000</td>
                              <td>0</td>
                              <td>0</td>
                            </tr>
                            <tr>
                              <td>101</td>
                              <td>
                                1h: 70,000<br>
                                2h: 100,000<br>
                                3h: 130,000<br>
                                4h: 160,000<br>
                                5h: 190,000<br>
                                6h: 210,000
                              </td>
                              <td>
                                20h00: 400,000<br>
                                21h00: 350,000<br>
                                22h00: 300,000
                              </td>
                              <td>800,000</td>
                              <td>0</td>
                              <td>0</td>
                            </tr>
                            <tr>
                              <td>101</td>
                              <td>
                                1h: 70,000<br>
                                2h: 100,000<br>
                                3h: 130,000<br>
                                4h: 160,000<br>
                                5h: 190,000<br>
                                6h: 210,000
                              </td>
                              <td>
                                20h00: 400,000<br>
                                21h00: 350,000<br>
                                22h00: 300,000
                              </td>
                              <td>450,000</td>
                              <td>0</td>
                              <td>0</td>
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
                        <li class="page-item"><a class="page-link rounded-circle" href="#"><i class="fas fa-angle-right"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
      </div><!--/quan ly phong/ gia phong-->
      <!--quan ly phong/ cai dat gia-->
      <div id="menu3" class="container-fluid tab-pane fade"><br>
              <div id="content">
                <div class="container-fluid">
                  <div class="row borderbt"><!--Danh sach phong de cai dat gia-->
                    <div class="col-md-auto mr-auto">
                      <h5>Danh sách phòng</h5>
                    </div>
                    <div class="col-md-auto">
                      <div id="thaotac">
                        <a href="#">Chọn tất cả</a>
                        <a>|</a>
                        <a href="#">Bỏ chọn tất cả</a>
                      </div>
                    </div>
                  </div>
                  <!--cai dat theo loai phong-->
                  <div id="caidat">
                    <div class="row white" >
                      <div class="col-md-auto">
                        Cài đặt giá cho:
                        <a href="#">Chưa xếp loại</a>
                        <a>|</a>
                        <a href="#">Deluxe</a>
                        <a>|</a>
                        <a href="#">Standard</a>
                        <a>|</a>
                        <a href="#">Superior</a>
                        <a>|</a>
                        <a href="#">Vip</a>
                      </div>
                      
                    </div>
                  </div>
                  <!--Danh sach phong-->
                  <div class="row white" >
                    <div class="col-md-12">
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">101
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">102
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">103
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">104
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">105
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">106
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">107
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">108
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">109
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">110
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">201
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">202
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">203
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">204
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">205
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">206
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">207
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">208
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">209
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">210
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">301
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">302
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">303
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">304
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">305
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">306
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">307
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">308
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">309
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">310
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">401
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">402
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">403
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">404
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">405
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">406
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">407
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">408
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">409
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                      <div class="floor">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">410
                          </label>
                        </div>
                        <div id="cn-floor">
                          <a href="#" class="text-dark">Xem</a>
                          <a>|</a>
                          <a href="#" class="text-dark">Sửa</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--Gia ap dung cho cac phong-->    
                  <div class="row borderbt" >
                    <div class="col-md-auto mr-auto">
                      <h5>Giá áp dụng</h5>
                    </div>
                  </div>
                  <div class="row white"><!--Khung gia qui dinh-->
                    <div class="col-md-4"><!--Gia ap dung theo gio-->
                      <div id="khunggia">
                        <p><strong>Theo giờ:</strong></p>
                        <div id="kg-body">
                          <input type="text" name="" style="width: 50px; height: 20px">
                          <span> Giờ </span>
                          <input type="text" name="" style="width: 100px; height: 20px">
                          <span> VND </span>
                          <img src="{{asset('images/icAd.png')}}" alt="">THÊM
                        </div>
                        <p><strong>Giá qua đêm nhận phòng sau:</strong></p>
                        <div id="kg-body">
                          <input type="text" name="" style="width: 50px; height: 20px">
                          <span> Giờ </span>
                          <input type="text" name="" style="width: 100px; height: 20px">
                          <span> VND </span>
                          <img src="{{asset('images/icAd.png')}}" alt="">THÊM
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4"><!--Gia ap dung theo ngay tuan thang-->
                      <div id="khunggia">
                        <p><strong>Theo ngày:</strong></p>
                        <div id="kg-body">
                          <input type="text" name="" style="width: 100px; height: 20px">
                          <span> (VND) </span>
                        </div>
                        <p><strong>Theo tuần:</strong></p>
                        <div id="kg-body">
                          <input type="text" name="" style="width: 100px; height: 20px">
                          <span> (VND) </span>
                        </div>
                        <p><strong>Theo tháng:</strong></p>
                        <div id="kg-body">
                          <input type="text" name="" style="width: 100px; height: 20px">
                          <span> (VND) </span>
                        </div>
                        <p><strong>Qua đêm:</strong></p>
                        <div id="kg-body">
                          <input type="text" name="" style="width: 100px; height: 20px">
                          <span> (VND) </span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4"><!--Gia ap dung theo so nguoi-->
                      <div id="khunggia">
                        <p><strong>Theo số người:</strong></p>
                        <div id="kg-body">
                          <span>Thêm</span>
                          <input type="text" name="" style="width: 50px; height: 20px">
                          <span> người, cộng </span>
                          <input type="text" name="" style="width: 100px; height: 20px">
                          <span>VND (%)/người</span>
                        </div>
                        <div id="kg-body">
                          <span>Công thêm</span>
                          <input type="text" name="" style="width: 100px; height: 20px">
                          <span>VND (%) /người cho những người tiếp theo</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row white align-items-center ">
                    <div class="col-md-12 ml-auto" style="margin-bottom: 15px">
                      <a href="#" class="btn btn-dark">Cập nhật các phòng đã chọn</a>
                    </div>
                  </div>
                </div>
              </div>
      </div><!--quan ly phong/ cai dat gia-->
    </div>
    @include('layout.footer')
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <!--Chọn tat ca trong bang danh sach khach hang-->
    <script> 
    $(document).ready(function(){ 

     $("#chonhet").click(function() 
      { 
       var checked_status = this.checked; 
       $("input[name=chon]").each(function() 
       { 
        this.checked = checked_status; 
       }); 
      }); 

    }); 
    </script>
  </body>
</html>