<div class="modal fade" id="delete" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<form role="form" class="form-horizontal" id="contact-form" method="post" action="inc/deleteemploye.php">
				<div id="me" class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h5>Delete Customer</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="contact-name" class="col-sm-2 control-label">ID</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="id" id="id" placeholder="1">
						</div>
					</div>
					<div class="form-group">
						<label for="contact-email" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="name" id="name" placeholder="Navin Rajapaksha">
						</div>
					</div>					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
					<input class="btn btn-primary" onclick="validate();" type="submit"  id="send-button" value="Delete">
					<button class="btn btn-danger" type="reset">Reset</button>
				</div>															
			</form>
		</div>
	</div>
</div>	