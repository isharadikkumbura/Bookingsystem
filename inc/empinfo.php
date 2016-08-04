<?php $ha="avtive"; $title="You Learn"; ?>
<?php $ha="avtive"; $title="Reserve"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php print $title ?></title>
	
	<link href="../css/css-edited.css" rel="stylesheet">
    <!-- Bootstrap -->
	<script src= "..\js\jscript.js" type="text/javascript"></script>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../font-awesome-4.6.3/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	

    
  </head>
		
  <body>
 <?php require_once $_SERVER["DOCUMENT_ROOT"] . '/inc/phpfunctions.php';?>
  <?php require_once $_SERVER["DOCUMENT_ROOT"] . '/inc/navigation.php';?>
 

	


<?php


$id = $_POST['id'];

$query="SELECT * FROM employee WHERE id='$id'";
$run=mysql_query($query);
$row=mysql_fetch_array($run) or die(mysql_error());
$id=$row['id'];
$name=$row['name'];
$address=$row['address'];
$email=$row['email'];
$age=$row['age'];
$phone=$row['phone'];
$job=$row['job_title'];
$skills=$row['skills'];
$section=$row['section'];
$desc=$row['description'];

?>
<div class="container">
	<div class="jumbotron">
			
		
		<form role="form" class="form-horizontal" id="contact-form" >
				<div id="me" class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h5 style="text-align:center">Employee details</h4>
				</div>
				<div class="modal-body" style="text-align:left">
					<div class="form-group">
						<label for="contact-name" class="col-sm-2 control-label">ID</label>
						<div class="col-sm-10">
							<?php echo $id;?>
						</div>
					</div>
					<div class="form-group">
						<label for="contact-email" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<?php echo $name;?>
						</div>
					</div>
					<div class="form-group">
						<label for="contact-message" class="col-sm-2 control-label">Address</label>
						<div class="col-sm-10">
							<?php echo $address;?>
						</div>
					</div>
					<div class="form-group">
						<label for="contact-email" class="col-sm-2 control-label">E-mail</label>
						<div class="col-sm-10">
							<?php echo $email;?>
						</div>
					</div>
					<div class="form-group">
						<label for="contact-email" class="col-sm-2 control-label">Phone number</label>
						<div class="col-sm-10">
							<?php echo $phone;?>
						</div>
					</div>
					<div class="form-group">
						<label for="contact-email" class="col-sm-2 control-label">Age</label>
						<div class="col-sm-10">
							<?php echo $age;?>
						</div>
					</div>
					<div class="form-group">
						<label for="contact-email" class="col-sm-2 control-label">Job Title</label>
						<div class="col-sm-10">
							<?php echo $job;?>
						</div>
					</div>
					<div class="form-group">
						<label for="contact-email" class="col-sm-2 control-label">Section</label>
						<div class="col-sm-10">
							<?php echo $section;?>
						</div>
					</div>
					<div class="form-group">
						<label for="contact-message" class="col-sm-2 control-label">Skills</label>
						<div class="col-sm-10">
							<?php echo $skills;?>
						</div>
					</div>
					<div class="form-group">
						<label for="contact-message" class="col-sm-2 control-label">Descreption</label>
						<div class="col-sm-10">
							<?php echo $desc;?>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
					<input class="btn btn-primary" onclick="" type="submit"  id="send-button" value="Delete">
				</div>															
			</form>
	</div>
</div>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/inc/footer.php'; ?>
		
		
		
		

