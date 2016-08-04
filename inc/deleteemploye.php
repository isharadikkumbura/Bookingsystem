<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/inc/head.php';


$id=$_POST['id'];
$name=$_POST['name'];



$query="DELETE FROM employee WHERE id='$id';";
$query1="DELETE FROM employee WHERE name LIKE '%$name%';";


$state1=mysql_query($query)or die("cound not delete records from database".mysql_error());
$state2=mysql_query($query1)or die("cound not delete records from database".mysql_error());

if($state1==true||$state2==true){
	echo "Successfully deleted";
}
else
	echo "The Employee Couldn't be deleted";
?>
