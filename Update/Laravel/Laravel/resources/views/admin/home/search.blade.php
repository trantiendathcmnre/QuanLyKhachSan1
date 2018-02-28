@extends('admin.layout.master')

@section('title','Trang chủ')

@section('mainmenu')
	@include('admin.layout.mainmenu')
@endsection

@section('submenu')
@endsection

@section('content')
	<div id="content">
  <div class="container-fluid">
        <div class="row borderbt">
          <div class="col-md-auto mr-auto">
            <h5 style="padding-top:22px">Danh sách phòng</h5>
          </div>
          <div class="col-md-auto">
            <div id="list" style="margin-top: 9px">
              <ul class="list-unstyled">
                <li><a class="btn btn-outline-dark"><i class="far fa-sticky-note" title="Nhật kí công việc"></i></a></li><!--hien thi nhat ki cong viec theo ngay, nhan phong, tra phong, da dat coc,...-->
                <li><a class="btn btn-outline-dark"><i class="far fa-calendar-alt" title="Hiện trạng phòng"></i></a></li><!--hien thi thong ke hien trang phong-->
                <li><a class="btn btn-outline-dark"><i class="far fa-chart-bar" title="Báo cáo"></i></a></li><!--yeu cau in bao cao-->
                <li><a class="btn btn-outline-dark" onclick="ReLoad()"><i class="fas fa-sync-alt" title="Cập nhật mới"></i></a></li><!--cap nhat lai he thong-->
              </ul>
            </div>
          </div>
        </div>
        <!--Tong so phong , chu thich ki hieu-->
        <div class="row white" >
          <div class="col-md-auto">
            <div id="thumb">
              <ul class="list-unstyled">
                <li>
                  <!--Thong ke so luong phong con trong-->
                  <span class="trong">&nbsp;
                  @if(isset($trong))
                    {{ $trong }}
                  @endif
                  &nbsp;
                  </span>&nbsp;
                  <label>Còn trống</label>
                </li>
                <li>
                  <span class="dadat">&nbsp;
                  @if(isset($dadat))
                    {{ $dadat }}
                  @endif
                  &nbsp;
                  </span>&nbsp;
                  <label>Đã đặt</label>
                </li>
                <li>
                  <span class="dango">&nbsp;
                  @if(isset($dango))
                    {{ $dango }}
                  @endif&nbsp;
                  </span>&nbsp;
                  <label>Đang ở</label>
                </li>
                <li><img src="{{asset('images/icon-Stop.png')}}" alt="">&nbsp;<label>Cần sửa</label></li>
                <li><img src="{{asset('images/icon-Alert.png')}}" alt="">&nbsp;<label>Chưa dọn</label></li>
              </ul>
            </div>
          </div>
        </div>
        <!--Danh sach phong va hien trang-->
        <div class="row white" >
          <div class="col-md-12">
            @foreach($phong as $PHG)
              @include('admin.modal.hoadon')
              <!--Hiển thị phòng trống-->
              @if($PHG->trangthaiPHG == 'trống')
                <div class="room btn-outline-dark" data-toggle="modal" data-target="#modalhoadon">  {{ $PHG->maPHG }}  </div>
              @endif

              <!--Hiển thị phòng đã đang ở-->
              @if($PHG->trangthaiPHG == 'đang ở')
                <div class="room rmaintenance btn-outline-dark" data-toggle="modal" data-target="#modalhoadon">  {{ $PHG->maPHG }}  </div>
              @endif

              <!--Hiển thị phòng đặ đặt-->
              @if($PHG->trangthaiPHG == 'đã đặt')
                <div class="room rbooked btn-outline-dark" data-toggle="modal" data-target="#modalhoadon">  {{ $PHG->maPHG }}  </div>
              @endif

              <!--Hiển thị phòng trống chưa dọn-->
              @if($PHG->trangthaiPHG == 'trống' && $PHG->ghichuPHG == 'chưa dọn')
                <div class="room rnotready btn-outline-dark" data-toggle="modal" data-target="#modalhoadon">  {{ $PHG->maPHG }}  </div>
              @endif
              
              <!--Hiển thị phòng đã đặt chưa dọn-->
              @if($PHG->trangthaiPHG == 'đã đặt' && $PHG->ghichuPHG == 'chưa dọn')
                <div class="room rbooked rnotready btn-outline-dark" data-toggle="modal" data-target="#modalhoadon">  {{ $PHG->maPHG }}  </div>
              @endif
              
              <!--Hiển thị phòng đang ở chưa dọn-->
              @if($PHG->trangthaiPHG == 'đang ở' && $PHG->ghichuPHG == 'chưa dọn')
                <div class="room rmaintenance rnotready btn-outline-dark" data-toggle="modal" data-target="#modalhoadon">  {{ $PHG->maPHG }}  </div>
              @endif

              <!--Hiển thị phòng trống cần sửa-->
              @if($PHG->trangthaiPHG == 'trống' && $PHG->ghichuPHG == 'cần sửa')
                <div class="room rprepare btn-outline-dark" data-toggle="modal" data-target="#modalhoadon">  {{ $PHG->maPHG }}  </div>
              @endif

              <!--Hiển thị phòng đang ở cần sửa-->
              @if($PHG->trangthaiPHG == 'đang ở' && $PHG->ghichuPHG == 'cần sửa')
                <div class="room rmaintenance rprepare btn-outline-dark" data-toggle="modal" data-target="#modalhoadon">  {{ $PHG->maPHG }}  </div>
              @endif
    
              <!--Hiển thị phòng đã đặt cần sửa-->
              @if($PHG->trangthaiPHG == 'đã đặt' && $PHG->ghichuPHG == 'cần sửa')
                <div class="room rbooked rprepare btn-outline-dark" data-toggle="modal" data-target="#modalhoadon">  {{ $PHG->maPHG }}  </div>
              @endif

            @endforeach
            @include('admin.modal.datphong')
            <div class="room" data-toggle="modal" data-target="#myModal">401</div>
          </div>
        </div>
        <div class="row borderbt" >
          <div class="col-md-auto mr-auto">
            <h5>Khách hàng đang ở và đã đặt</h5>
          </div>
          <div class="col-md-auto">
            <form class="form-inline">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input name="tukhoa" class="form-control-sm w-75 mr-2" type="text" placeholder="Tìm kiếm" aria-label="Search">
              <a class="btn btn-success btn-sm text-light"><i class="fas fa-search" aria-hidden="true"></i></a>
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
            @include('admin.modal.themkhachhang')
            <a href="#" class="btn btn-sm btn-primary" title="Thêm khách hàng" data-toggle="modal" data-target="#themkh">
              <i class="fas fa-plus"></i> Thêm</a><!--Them khach hang-->
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
                    <th>Lượt thuê</th>
                    <th>Công cụ</th>
                  </tr>
                </thead>
                <tbody>
                  <!--Lấy thông tin khách hàng -->
                  @foreach($khachhang as $KH)
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input name="chon" type="checkbox" class="form-check-input" value="">{{ $KH->hotenKH }}
                        </label>
                      </div>
                    </td>
                    <td>{{ $KH->gioitinhKH }}</td>
                    <td>{{ $KH->ngaysinhKH }}</td>
                    <td>{{ $KH->cmndKH }}</td>
                    <td>{{ $KH->diachiKH }}</td>
                    <td>{{ $KH->sdtKH }}</td>
                    <td>{{ $KH->luotthueKH }}</td>
                    <td>
                      <a class="btn btn-warning btn-sm" href="#"><i class="fas fa-pencil-alt"></i> Sửa</a>&nbsp;
                      <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash-alt"></i> Xóa</a>
                    </td>
                  </tr>
                  @endforeach
        
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!--Phan trang danh sach khach hang-->
        <div class="row white">
          <div class="col-md-auto ml-auto" id="phantrang">
            {{ $khachhang -> links() }}
          </div>
        </div>
  </div>
</div>
@section('script')

<script>
  $(document).ready(function(){
  	
  });
</script>
@endsection
@endsection