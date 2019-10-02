
<html>
<head>
<title>SIGN UP</title>
	<style>
	
	body
			{
				margin:0;
				padding:0;
				font-family:'sans-serif';
				background:url('the11.jpg');
				background-repeat:no-repeat;
				background-size:cover;
				
				
				
			}
	#REGISTER
			{
				width:350px;
				margin:auto auto;
				margin-top:50px;
				background:rgba(0,0,0,5);
				border-radius:10px;
				height:200px;
				background:transparent;
			
			}	
	#REGISTER input {
			width:280px;
			height:20px;
			margin:4px;
			padding:2px ;
			border-radius:4px;
			}	
	 .button{background-color:lightblue;
			 text-align:center;
			 font-size:16px;
			 border-radius:25px;
			 
			 margin-left:30px;
			 margin-top:4px;
			 width:100px;
			 padding:px;
			 height:25px;
			 color:
			 }	
	#REGISTER select {width:280px;
			height:20px;
			margin:4px;
			padding:2px ;
			border-radius:4px;}			
	</style>

</head>
<body align="center"><br><br><br>
<h2>REGISTER NOW!!!</h2><br>
<div id="REGISTER">
		<form action="#" method="post">
			<input type="text" name="name" placeholder="First name"><br>
			<input type="text" name="surname" placeholder="Last name"><br>
			<input type="password" name="password" placeholder="Password"><br>
			<input type="password" name="pass2" placeholder="Re-enter password"><br>
			<input type="text" name="email" placeholder="Email"><br>
			<input type="date" name="dob" placeholder="date of birth"><br>
			<select type="text" name="gender">
				<option value="disabled selected hidden">Gender</option>
				<option value="male">male</option>
				<option value="female">female</option>
				</select>	<BR>
			<button class="button" type="submit" name="signup" ><b>Sign Up</b>
			</button>
		</form>
		</div>
</body>
</html>

<?php
session_start();
$s=mysqli_connect("localhost","root","") or die (mysqli_error());
mysqli_select_db($s,"registration") or die (mysqli_error());
if(isset($_POST['signup']))
	{
		$firstname=$_POST['name'];
		$lastname=$_POST['surname'];
		$password=$_POST['password'];
		$pass2=$_POST['pass2'];
		$email=$_POST['email'];
		$dob=$_POST['dob'];
		$gender=$_POST['gender'];
		$value=0;
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
		if($password<>$pass2)
		{
			echo"<script>alert('PASSWORD INCORRECT')</script>";
			exit();
		}
		
		if($dob=='')
		{
			echo"<script>alert('PLEASE ENTER YOUR DATE OF BIRTH')</script>";
			exit();
		}
		
		$sql = 'SELECT email FROM client';
		   //mysql_select_db('registration');
		   $retval = mysqli_query( $s,$sql );
		   
		   if(! $retval ) {
			  die('Could not get data: ' . mysql_error());
		   }
		   
		   while($row = mysqli_fetch_assoc($retval)) {
			  if($row['email']==$email){$value=1;}
				 
		   }
		if($value==1)
		{
			echo"<script>alert('INVALID EMAIL')</script>";
			exit();
		}
		
		
		$query="insert into client (name,surname,password,pass2,email,dob,gender) values ('$firstname','$lastname','$password','$pass2','$email','$dob','$gender')";
		
		
		
		$url="nav.php?username=".$email;
         if(mysqli_query($s,$query))
		{
			header('location:'.$url);
			
		}
		

	}
?>

