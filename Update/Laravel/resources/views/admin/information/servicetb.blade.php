<div class="table-responsive">
  <table class="table table-bordered table-hover table-sm text-center" style="font-size: 13px">
    <thead >
      <tr>
        <th>#</th>
        <th>Tên dịch vụ</th>
        <th>Đơn vị</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1 ?>
      @foreach($dichvu as $DV)
      <tr>
        <td><?php echo $i++ ?></td>
        <td>{{ $DV->tenDV }}</td>
        <td>{{ $DV->donviDV }}</td>
        <td>{{ $DV->soluongDV }}</td>
        <td>{{ $DV->dongiaDV }}</td>
        <td>
          <a class="btn btn-warning btn-sm" href="admin/information/editservice/{{ $DV->id }}"><i class="fas fa-pencil-alt"></i></a>&nbsp;
          <a class="btn btn-danger btn-sm" href="javascript:xoadichvu('{{ $DV->id }}')"><i class="fas fa-trash-alt"></i> </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
{{ $dichvu->links("pagination::bootstrap-4") }}