<div class="modal fade" id="all" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<form role="form" class="form-horizontal" id="contact-form" method="post" action="inc/doall.php">
				<div id="me" class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h5>Add Customer</h4>
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
					<div class="form-group">
						<label for="contact-message" class="col-sm-2 control-label">Address</label>
						<div class="col-sm-10">
							<textarea class="form-control" name="address" id="address" rows="4" placeholder="No 1/65, Galle road, Colombo 6"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="contact-email" class="col-sm-2 control-label">E-mail</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="email" id="email" placeholder="name@gmail.com">
						</div>
					</div>
					<div class="form-group">
						<label for="contact-email" class="col-sm-2 control-label">Phone number</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="phone" id="phone" placeholder="0771234567">
						</div>
					</div>
					<div class="form-group">
						<label for="contact-email" class="col-sm-2 control-label">Age</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="age" id="age" placeholder="30">
						</div>
					</div>
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
					<button class="btn btn-primary" name="submit" value="0" onclick="validate();" type="submit"  id="send-button" >Add</button>
					<button class="btn btn-primary" name="submit" value="1" onclick="validate();" type="submit"  id="send-button" >Update</button>
					<button class="btn btn-primary" name="submit" value="2" onclick="validate();" type="submit"  id="send-button">Delete</button>
				</div>															
			</form>
		</div>
	</div>
</div>	