
<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/inc/head.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/inc/navigation.php';

$name=$_POST['name'];
$message=$_POST['message'];
$email=$_POST['email'];

$query="INSERT INTO CONTACT (name,message,email) VALUES('$name','$message','$email')";

mysql_query($query)or die("cound not insert values to database".mysql_error());
?>
