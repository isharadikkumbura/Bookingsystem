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

if($_POST['submit']==0){  
$query="INSERT INTO employee (id,name,address,email,age,phone,job_title,skills,section,description) VALUES('$id','$name','$address','$email','$age','$phone','$job','$skills','$section','$desc')";

mysql_query($query)or die("cound not insert values to database".mysql_error());
echo "Successfully Added";
}
?>



<?php
if($_POST['submit']==2){
$query="DELETE FROM employee WHERE id='$id';";
$query1="DELETE FROM employee WHERE id='$id';";


mysql_query($query)or die("cound not delete records from database".mysql_error());
mysql_query($query1)or die("cound not delete records from database".mysql_error());
echo "Successfully Deleted";
}
?>


<?php
if($_POST['submit']==1){
$query="UPDATE employee
SET id='$id',name='$name',address='$address',email='$email',age='$age',phone='$phone',job_title='$job',skills='$skills',section='$section',description='$desc'
WHERE id='$id'";
mysql_query($query)or die("cound not insert values to database".mysql_error());
echo "Successfully Updated";
}
?>


