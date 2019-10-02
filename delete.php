<?php
session_start();
ob_start();
$host="localhost";
$user="root";
$password="";
$db="registration";
if(!isset($_GET['id'])){
		header('location: nav.php');
		exit();
	}
 $id=$_GET['id'];
$c=mysqli_connect($host,$user,$password);
mysqli_select_db($c,$db);
		//$search = mysqli_real_escape_string($c, trim($_POST['searchterm']));
	$sql="DELETE FROM `appointments` WHERE `id`='$id'";
	$find_therapy = mysqli_query($c, $sql);
  //include(normalconnect.php);
   header('Location:'.$_SESSION['redirectURL']);
	ob_end_flush();
	?>