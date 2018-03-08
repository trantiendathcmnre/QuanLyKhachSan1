@extends('admin.layout.master')

@section('title','Bộ phận')

@section('content')
  <!--quan ly phong/ thong tin phong-->
  
  <div class="container" style="padding-top:70px"><br>
    <div class="row" >
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5>Sửa thông tin bộ phận</h5>
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
        
              <form action="admin/employee/editdepartment/{{ $suabophan->id }}" method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
 
                  <div class="form-group row">
                    <label for="mabophan" class="col-md-2" style="padding-top: 9px">Mã bộ phận</label>
                    <div class="col-md-10">
                      <input type="text" class="form-control" name="mabophan" placeholder="Mã bộ phận" value="{{ $suabophan->maBP }}" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tenbophan" class="col-md-2" style="padding-top: 9px">Tên bộ phận</label>
                    <div class="col-md-10">
                      <input type="text" class="form-control" name="tenbophan" placeholder="Tên bộ phận" value="{{ $suabophan->tenBP }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="sdt" class="col-md-2" style="padding-top: 9px">Số điện thoại</label>
                    <div class="col-md-10">
                      <input type="text" class="form-control" name="sdt" placeholder="Số điện thoại" value="{{ $suabophan->dienthoaiBP }}" >
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

