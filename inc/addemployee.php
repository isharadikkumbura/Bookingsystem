
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


$query="INSERT INTO employee (id,name,address,email,age,phone,job_title,skills,section,description) VALUES('$id','$name','$address','$email','$age','$phone','$job','$skills','$section','$desc')";

$state=mysql_query($query)or die("cound not insert values to database".mysql_error());
if($state==true){
	echo "Successfully added";
}
else
	echo "The Employee Couldn't be added";
?>
