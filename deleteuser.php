<?php
session_start();
ob_start();
$host="localhost";
$user="root";
$password="";
$db="registration";
if(!isset($_GET['id'])){
		header('location:'.$_SESSION['redirectURL']);
		exit();
	}
 $id=$_GET['id'];
$c=mysqli_connect($host,$user,$password);
mysqli_select_db($c,$db);
		//$search = mysqli_real_escape_string($c, trim($_POST['searchterm']));
	$sql="DELETE FROM `client` WHERE `id`='$id'";
	$find_user = mysqli_query($c, $sql);
  
   header('Location:login.php');
	ob_end_flush();
	?>