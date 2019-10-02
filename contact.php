<?php
session_start();
ob_start();
$url=$_SESSION['redirectURL'];
?>

<html>
<head><title>Contact Us</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
		
body
{
	margin:0;
	padding:0;
	background:url(contact.jpg);
	background-size:cover;
	font-family:sans-serif;
	margin-top:50px;
	margin-left:500px;
}
a{
	font-size:20px;
	color:red;
}
</style>
<body align="center" >
	<font color="darkblue">

	<h1><b>SAJILO UPACHAR</b></h1><br>
	<h3>For feedbacks please contact us on:</h3><br>
	<h4>Contact no:+9779860427527,+9779843536348<br>
	Email:sajiloupachar@gmail.com<br>
	Admin Email:abc@hotmail.com<br>
		        XYZ@gmail.com<br></h4>
		  <br><br><br>
		  <h4>Do you like to give us feedback?  <a class='btn btn-danger btn-sm' href="feedback.php">Feedback</a><h4></font>
		<br><br><a href="<?php {echo $url;}?>">Go to navigation bar</a>
		
		</body>
		</html>

