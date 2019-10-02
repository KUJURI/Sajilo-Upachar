<!DOCTYPE html>
<html>
<head>
<title>FeedBack Form</title>
<link href="elements.css" rel="stylesheet">
</head>
<!-- Body Starts Here -->
<body align="center">
<div class="container">
<!-- Feedback Form Starts Here -->
<div id="feedback">
<!-- Heading Of The Form -->
<div class="head">
<h3>FeedBack Form</h3>
<p>This is feedback form. Send us your feedback!</p>
</div>
<!-- Feedback Form -->
<form action="#" id="form" method="post" name="form">
<input name="vname" placeholder="Your Name" type="text" value="">
<input name="vemail" placeholder="Your Email" type="text" value="">
<input name="sub" placeholder="Subject" type="text" value="">
<label>Your Suggestion/Feedback</label>
<textarea name="msg" placeholder="Type your text here..."></textarea>
<input id="send" name="submit" type="submit" value="Send Feedback">
</form>
</div>
<!-- Feedback Form Ends Here -->
</div>
</body>
<!-- Body Ends Here -->
</html>
<?php
$s=mysqli_connect("localhost","root","") or die (mysqli_error());
mysqli_select_db($s,"registration") or die (mysqli_error($s));
if(isset($_POST['submit']))
	{
		$vname=$_POST['vname'];
		$vemail=$_POST['vemail'];
		$sub=$_POST['sub'];
		$msg=$_POST['msg'];
		
		if($vname=='')
		{
			echo"<script>alert('PLEASE ENTER YOUR NAME')</script>";
			exit();
		}
		if($vemail=='')
		{
			echo"<script>alert('PLEASE ENTER EMAIl')</script>";
			exit();
		}
		
		if($sub=='')
		{
			echo"<script>alert('PLEASE ENTER SUBJECT')</script>";
			exit();
		}
		if($msg=='')
		{
			echo"<script>alert('PLEASE ENTER MESSAGE')</script>";
			exit();
		}
		$query="insert into feedback (vname,vemail,sub,msg) values ('$vname','$vemail','$sub','$msg')";
		
		
		

         if(mysqli_query($s,$query))
		{
			
			header('location:contact.php');
		}

	}
?>