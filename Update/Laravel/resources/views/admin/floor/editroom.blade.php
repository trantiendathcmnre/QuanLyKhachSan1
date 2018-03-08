@extends('admin.layout.master')

@section('title','Phòng')

@section('content')
  <!--quan ly phong/ thong tin phong-->
  
  <div class="container" style="padding-top:70px"><br>
    <div class="row" >
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5>Sửa thông tin phòng</h5>
            </div>
            <div class="card-body">
              @if(count($errors)>0)
                <div class="alert alert-danger">
                  @foreach($errors->all() as $error)
                  {{ $error }}<br>
                  @endforeach
                </div>
              @endif

              @if(session('thongbao'))
                <div class="alert alert-success">
                  {{ session('thongbao') }}
                </div>
              @endif
        
              <form action="admin/floor/editroom/{{ $suaphong->id }}" method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
 
                  <div class="form-group row">
                    <label for="maphong" class="col-md-2" style="padding-top: 9px">Mã phòng:</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="maphong" placeholder="Mã phòng" value="{{ $suaphong->maPHG }}" readonly>
                    </div>


                    <!-- tien nghi -->
                    <label for="tiennghi" class="col-md-2" style="padding-top: 9px">Tiện nghi</label>
                    <div class="col-md-4">
                      <input class="form-control" type="text" name="tiennghi" value="{{ $suaphong->tiennghiPHG }}" placeholder="Tiện nghi">
                    </div>
                    
                  </div>


                  <div class="form-group row">
                    <!-- loai phong -->
                    <label for="loaiphong" class="col-md-2" style="padding-top: 9px">Loại phòng:</label>
                    <div class="col-md-4">
                      <select name="loaiphong" class="form-control">
                        @foreach($loaiphong as $LP)
                        <option
                        @if($suaphong->idLPPHG == $LP->id)
                          {{ "selected" }}
                        @endif
                         value="{{ $LP->id }}">{{ $LP->tenLP }}</option>
                        @endforeach
                      </select>
                    </div>

                    <!-- tang -->
                    <label for="tang" class="col-md-2" style="padding-top: 9px">Tầng:</label>
                    <div class="col-md-4">
                      <select name="tang" class="form-control">
                        @foreach($tang as $TG)
                        <option
                        @if($suaphong->idTPHG == $TG->id)
                          {{ "selected" }}
                        @endif
                         value="{{ $TG->id }}">{{ $TG->tenT }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
            

                  <div class="form-group row">
                    <label for="songuoi" class="col-md-2" style="padding-top: 9px">Số người:</label>
                    <div class="col-md-4">
                      <input class="form-control" type="number" name="songuoi" value="{{ $suaphong->songuoiPHG }}" placeholder="Số người" min="1" max="8">
                    </div>
                    <label for="sogiuong" class="col-md-2 " style="padding-top: 9px">Số giường:</label>
                    <div class="col-md-4">
                      <input class="form-control" type="number" name="sogiuong" value="{{ $suaphong->sogiuongPHG }}" placeholder="Số giường" min="1" max="4">
                    </div>
                  </div>

                <input class="btn btn-secondary" type="submit" value="Lưu" />
                  </form>  
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
    </div>
  </div>


@endsection

