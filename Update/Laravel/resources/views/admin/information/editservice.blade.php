@extends('admin.layout.master')

@section('title','Dịch vụ')

@section('content') 
  <div class="container" style="padding-top: 70px ">
    <div class="row" >
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5>Sửa dịch vụ</h5>
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
              <form action="admin/information/editservice/{{ $suadichvu->id }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="form-group row">
                    <!-- ten dich vu -->
                    <label for="tendv" class="col-md-2" style="padding-top: 9px">Tên dịch vụ</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="tendv" value="{{ $suadichvu->tenDV }}" placeholder="Tên dịch vụ" >
                      
                    </div>


                    <!-- don vi dich vu -->
                    <label for="donvi" class="col-md-2" style="padding-top: 9px">Đơn vị</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="donvi" value="{{ $suadichvu->donviDV }}" placeholder="Đơn vị" >
                      
                    </div>
                  </div>
                
                
                
                  <div class="form-group row">

                  <!-- so luong -->
                    <label for="soluong" class="col-md-2" style="padding-top: 9px">Số lượng</label>
                    <div class="col-md-4">
                      <input type="number" class="form-control" name="soluong" value="{{ $suadichvu->soluongDV }}" placeholder="Số lượng">
                      
                    </div>

                    <!-- don gia  -->
                
                    <label for="dongia" class="col-md-2" style="padding-top: 9px">Đơn giá</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="dongia" value="{{ $suadichvu->dongiaDV }}" placeholder="Đơn giá" >
                     
                    </div>
               
                  </div>
                  <input class="btn btn-secondary btn" type="submit" value="Sửa dịch vụ" />

              </form>  

            </div>
          </div>
        </div>
    </div>
  </div>
@endsection