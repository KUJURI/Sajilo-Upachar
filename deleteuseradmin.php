<?php
session_start();
ob_start();
$host="localhost";
$user="root";
$password="";
$db="registration";
if(!isset($_GET['id'])){
		header('location: admin.php');
		exit();
	}
 $id=$_GET['id'];
$c=mysqli_connect($host,$user,$password);
mysqli_select_db($c,$db);
	
	$sql="DELETE FROM `client` WHERE `id`='$id'";
	$find_user = mysqli_query($c, $sql);
   header('Location:'.$_SESSION['redirectURL']);
	ob_end_flush();
	?>