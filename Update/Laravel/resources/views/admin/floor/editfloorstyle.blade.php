@extends('admin.layout.master')

@section('title','Tầng')

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
        
              <form action="admin/floor/editfloorstyle/{{ $sualoaiphong->id }}" method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
 
                  <div class="form-group row">
                    <label for="ten" class="col-md-2" style="padding-top: 9px">Tên loại phòng</label>
                    <div class="col-md-10">
                      <input type="text" class="form-control" name="tenloai" placeholder="Tên loại phòng" value="{{ $sualoaiphong->tenLP }}">
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

