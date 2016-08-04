
<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/inc/head.php';


$id=$_POST['id'];
$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$age=$_POST['age'];
$phone=$_POST['phone'];
$job=$_POST['job'];
$skills=$_POST['skills'];
$section=$_POST['section'];
$desc=$_POST['desc'];



$query="UPDATE employee
SET id='$id',name='$name',address='$address',email='$email',age='$age',phone='$phone',job_title='$job',skills='$skills',section='$section',description='$desc'
WHERE id='$id'";
mysql_query($query)or die("cound not insert values to database".mysql_error());
?>
