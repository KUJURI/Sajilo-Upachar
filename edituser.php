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
		
	$sql="SELECT * FROM `client` WHERE `id`='$id'";
	$find_user = mysqli_query($c, $sql);
	
    if($find_user->num_rows !=0){
	while($row = mysqli_fetch_assoc($find_user))
	{
		$firstname = $row['name'];
		$lastname = $row['surname'];
		$email = $row['email'];
		$gender = $row['gender'];
		$password = $row['password'];
	}
	}
	?>
<html>
<head>
<title>User Edit form</title>
<META http-equiv=”refresh” content=”5;URL=nav.php”>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .containers {
	  margin-top:100px;
	  margin-left:400px;
	  width:600px;
	  border:2px solid black;
	  height:420px;
	  padding-right:80px;
	  background-color:#5be3ff;
  }
  
  body{
	  background:url('view.jpeg');
	  background-size:cover;
  }
  
  h3{
	  font-weight: bold;
  }
  </style>
</head>

<body>
<div class="containers">
<p><center><h3>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp EDIT USER INFORMATION!!!</h3></center></p><br>
<form action="#" class="form-horizontal" method="POST">

<div class="form-group">
      <label class="control-label col-sm-4"for="firstname">First Name:</label>
	   <div class="col-sm-8">
      <input type="text" class="form-control" id="fistname" placeholder="Enter first name" name="firstname" value=<?php {echo $firstname;}?>>
    </div></div>
	
    <div class="form-group">
      <label class="control-label col-sm-4"for="lastname">Last Name:</label>
	   <div class="col-sm-8">
      <input type="text" class="form-control" id="lastname" placeholder="Enter last name" name="lastname" value=<?php {echo $lastname;}?>>
    </div></div>
	
	
	<div class="form-group">
      <label class="control-label col-sm-4"for="email">Email:</label>
       <div class="col-sm-8">
	  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value=<?php {echo $email;}?>>
    </div></div>
	
	<div class="form-group">
      <label class="control-label col-sm-4"for="password">Password:</label>
       <div class="col-sm-8">
	  <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" value=<?php {echo $password;}?>>
    </div></div>
	
	<div class="form-group">
      <label class="control-label col-sm-4" for="pass2">Confirm Password:</label>
       <div class="col-sm-8">
	  <input type="password" class="form-control" id="pass2" placeholder="Re-enter passord" name="pass2" value=<?php {echo $password;}?>>
    </div></div>
	
	
	
	<div class="form-group">
      <label class="control-label col-sm-4" for="gender">Gender:</label>
        <div class="col-sm-8">
        <select id="gender" class="form-control" type="text" name="gender" value=<?php {echo $gender;}?>>
          <option value="<?php {echo $gender;}?>"><?php {echo $gender;}?></option>
		  <option value="male">Male</option>
		  <option value="female">Female</option>
        </select>
      
    </div></div>
	
    
	
	 <div class="col-sm-offset-4 col-sm-8">
	 
	<button type="submit" class="btn btn-success" name="submit" value="submit">Save</button>
	<a href=<?php {echo $_SESSION['redirectURL'];}?> class="btn btn-danger" role="button">Back</a>
	</div>
	</form>
</div>
</body>
</html>


<?php

$c=mysqli_connect("localhost","root","") or die (mysqli_error());
mysqli_select_db($c,"registration") or die (mysqli_error($c));
$id=$_GET['id'];
if(isset($_POST['submit']))
	{
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$email=$_POST['email'];
		$gender=$_POST['gender'];
		$password=$_POST['password'];
		$pass2=$_POST['pass2'];
		
		
		if($firstname=='')
		{
			echo"<script>alert('PLEASE ENTER THE FIRST NAME')</script>";
			exit();
		}
		if($lastname=='')
		{
			echo"<script>alert('PLEASE ENTER THE LAST NAME')</script>";
			exit();
		}
		if($email=='')
		{
			echo"<script>alert('PLEASE ENTER YOUR EMAIL')</script>";
			exit();
		}
		
		if($gender=='')
		{
			echo"<script>alert('PLEASE CHOOSE GENDER')</script>";
			exit();
		}
		if($password<>$pass2)
		{
			echo"<script>alert('PASSWORD INCORRECT')</script>";
			exit();
		}

	
		$query="UPDATE client SET name='$firstname',surname='$lastname',email='$email',gender='$gender',password='$password',pass2='$pass2' WHERE id=$id";
		


         if(mysqli_query($c,$query))
		{
			//$url="normalconnect.php?username=".$email;
		    header('Location:'.$_SESSION['redirectURL']);
		}
		//include 'email.php';

	}
	ob_end_flush();
?>
