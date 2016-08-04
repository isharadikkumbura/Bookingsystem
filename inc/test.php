<div class="modal fade" id="test" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
		<?php

$id = $_POST['id'];



?>
			<form role="form" class="form-horizontal" id="contact-form">
				<div id="me" class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h5>Employee Information</h4>
				</div>
				<div class="modal-body">
					
				
					<div class="form-group">
						<label for="contact-email" class="col-sm-2 control-label">Job Title</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="job" id="job" placeholder="Lathe Maxhine operator">
						</div>
					</div>
					<div class="form-group">
						<label for="contact-email" class="col-sm-2 control-label">Section</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="section" id="section" placeholder="Lathe Machine Section">
						</div>
					</div>
					<div class="form-group">
						<label for="contact-message" class="col-sm-2 control-label">Skills</label>
						<div class="col-sm-10">
							<textarea class="form-control" name="skills" id="skills" rows="4" placeholder="Engine repairing,Electric welding etc"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="contact-message" class="col-sm-2 control-label">Descreption</label>
						<div class="col-sm-10">
							<textarea class="form-control" name="desc" id="desc" rows="4" placeholder="Type Other details"></textarea>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
					<input class="btn btn-primary" onclick="validate();" type="submit"  id="send-button" value="Add">
				</div>															
			</form>
		</div>
	</div>
</div>	