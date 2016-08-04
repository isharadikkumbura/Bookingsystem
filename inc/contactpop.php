<div class="modal fade" id="contact" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<form role="form" class="form-horizontal" id="contact-form" method="post" onsubmit="return validate();" action="inc/contact.php">
					<div id="me" class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h5> Contact me </h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="contact-name" class="col-sm-2 control-label">Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="name" id="name" placeholder="Full name">
							</div>
						</div>
						<div class="form-group">
							<label for="contact-email" class="col-sm-2 control-label">E-mail</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="email" id="email" placeholder="name@gmail.com">
							</div>
						</div>
						<div class="form-group">
							<label for="contact-message" class="col-sm-2 control-label">Message</label>
							<div class="col-sm-10">
								<textarea class="form-control" name="message" id="message" rows="4" placeholder="Type your message here"></textarea>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
						<input class="btn btn-primary" type="submit"  id="send-button" value="Add">
						<button class="btn btn-danger" type="reset">Reset</button>
					</div>															
				</form>
			</div>
		</div>
	</div>		