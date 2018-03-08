<div class="table-responsive">
  <table class="table table-hover table-sm text-center table-bordered" style="font-size: 13px">
    <thead>
      <tr>
        <th>#</th>
        <th>Mã nhân viên</th>
        <th>Họ tên</th>
        <th>Giới tính</th>
        <th>Ngày sinh</th>
        <th>Điện thoại</th>
        <th>Email</th>
        <th>Ngày vào làm</th>
        <th>Trạng thái</th>
        <th>Bộ phận</th>
        <th>Công cụ</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1 ?>
      @foreach($nhanvien as $NV)
      <tr>
        <td><?php echo $i++ ?></td>
        <td>{{ $NV->maNV }}</td>
        <td>{{ $NV->hotenNV }}</td>
        <td>{{ $NV->gioitinhNV }}</td>
        <td>{{ $NV->ngaysinhNV }}</td>
        <td>{{ $NV->sdtNV }}</td>
        <td>{{ $NV->emailNV }}</td>
        <td>{{ $NV->ngayvaoNV }}</td>
        <td><?php if($NV->trangthaiNV == 1)
                    echo "Đang làm";
                  else 
                    echo "Nghỉ việc"; 
        ?></td>
        <td>{{ $NV->thuocbp->tenBP }}</td>
        <td>
          <a class="btn btn-warning btn-sm text-light" href="#"><i class="fas fa-pencil-alt"></i></a>&nbsp;
          <a class="btn btn-danger btn-sm text-light" href="#"><i class="fas fa-trash-alt"></i></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
{{ $nhanvien -> links("pagination::bootstrap-4") }}