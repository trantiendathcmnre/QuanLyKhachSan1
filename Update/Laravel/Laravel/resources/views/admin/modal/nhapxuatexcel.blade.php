<!--Modal hoa don-->
<div id="modal-excel" class="modal" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
  	<div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
		    <form method="post" action="admin/order/import" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
				<div class="modal-header bg-dark text-light">
					<h3 class="modal-title">Xuất file/ Nhập file</h3>
				</div>

				<div class="modal-body">
					<div class="form-group ">
						<label for="name" class="col-md-3 control-label">Xuất file</label>
						<div class="col-md-6">
							<a href="admin/order/export" class="btn btn-success">Xuất</a>
							<span class="help-block with-errors"></span>
						</div>
						
					</div>

					<div class="form-group">
						<label for="name" class="col-md-3 control-label">Nhập file</label>
						<div class="col-md-6">
							<input type="file" id="file" name="file" class="form-control form-control-sm" autofocus required>
							<span class="help-block with-errors"></span>
						</div>
						
					</div>
				</div>
				<div class="modal-footer">
			        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Đóng</button>
	    		</div>
			</form>
	    </div>
  	</div>
</div>
<!--end modal hoa don-->
