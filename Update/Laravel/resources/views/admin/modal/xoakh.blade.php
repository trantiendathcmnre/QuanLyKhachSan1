<div class="modal fade bd-example-modal-sm " id="delete-kh" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  	<div class="modal-dialog modal-sm bg-">
  		<form action="{{ URL::to('admin/home/deletecustomer') }}" id="frm-xoakh" method="post" accept-charset="utf-8">
  			<input type="hidden" name="_token" value="{{ csrf_token() }}">
  			
		  	<div class="modal-content">
			    <div class="modal-body">
			      <div>Bạn có chắc muốn xóa ?</div>
			    </div>
			    <div class="modal-footer">
			        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Đóng</button>
			        <input type="submit" id="btn-xoa" class="btn btn-danger btn-sm" value="Xóa" />
			    </div>
			</div>
		</form>
	</div>
</div>

