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


$query="SELECT * FROM employee";
$run=mysql_query($query);



?>
<div class="container">
	<div class="jumbotron">
			
		
		<div class="container">
  <h2>All employees <br/><br/> </h2>
  
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
		<th>Email</th>
        <th>Age</th>
        <th>Phone</th>
		<th>Job Title</th>
        <th>Skills</th>
        <th>Section</th>
		<th>Description</th>
        
      </tr>
    </thead>
    <tbody>
     
	 <?php  
	 while($row=mysql_fetch_array($run) or die(mysql_error())){ ?>
         <tr class="success">
		<td><?php echo $id=$row['id']; ?></td>
		<td><?php echo $name=$row['name']; ?></td>
		<td><?php echo $address=$row['address']; ?></td>
		<td><?php echo $email=$row['email']; ?></td>
		<td><?php echo $age=$row['age']; ?></td>
		<td><?php echo $phone=$row['phone']; ?></td>
		<td><?php echo $job=$row['job_title']; ?></td>
		<td><?php echo $skills=$row['skills']; ?></td>
		<td><?php echo $section=$row['section']; ?></td>
		<td><?php echo $desc=$row['description']; ?></td>
	 
		<?php } ?>
      </tr>
    </tbody>
  </table>
</div>

	</div>
</div>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/inc/footer.php'; ?>
		
		
		
		

