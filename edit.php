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
	$sql="SELECT * FROM `appointments` WHERE `id`='$id'";
	$find_therapy = mysqli_query($c, $sql);
    
	if($find_therapy->num_rows !=0){
	while($row = mysqli_fetch_assoc($find_therapy))
	{
		$firstname = $row['firstname'];
		$lastname = $row['lastname'];
		$email = $row['email'];
		$gender = $row['gender'];
		$age = $row['age'];
		$address = $row['address'];
		$centername=$row['centername'];
		$tname = $row['tname'];
		$date = $row['date'];
		$time = $row['time'];
		$transport = $row['transport'];
		
	}
	}
	?>
<html>
<head>
<title>Appointment form</title>
<META http-equiv=”refresh” content=”5;URL=nav.php”>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>

<body>
<div class="container">
<p><center><h3>EDIT YOUR APPOINTMENT!!!</h3></center></p>
<form action="#" class="form-horizontal" method="POST">

<div class="form-group">
      <label class="control-label col-sm-2"for="firstname">First Name:</label>
	   <div class="col-sm-10">
      <input type="text" class="form-control" id="fistname" placeholder="Enter first name" name="firstname" value=<?php {echo $firstname;}?>>
    </div></div>
	
    <div class="form-group">
      <label class="control-label col-sm-2"for="lastname">Last Name:</label>
	   <div class="col-sm-10">
      <input type="text" class="form-control" id="lastname" placeholder="Enter last name" name="lastname" value=<?php {echo $lastname;}?>>
    </div></div>
	
	
	<div class="form-group">
      <label class="control-label col-sm-2"for="email">Email:</label>
       <div class="col-sm-10">
	  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value=<?php {echo $email;}?>>
    </div></div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="gender">Gender:</label>
        <div class="col-sm-10">
        <select id="gender" class="form-control" type="text" name="gender" value=<?php {echo $gender;}?>>
          <option value="<?php {echo $gender;}?>"><?php {echo $gender;}?></option>
		  <option value="male">Male</option>
		  <option value="female">Female</option>
        </select>
      
    </div></div>
	
    <div class="form-group">
      <label class="control-label col-sm-2" for="age">Age:</label>
	   <div class="col-sm-10">
      <input type="integer" class="form-control" id="age" placeholder="Enter age" name="age" value=<?php {echo $age;}?>>
    </div></div>
    
	<div class="form-group">
      <label class="control-label col-sm-2" for="address">Address:</label>
	   <div class="col-sm-10">
      <input type="address" class="form-control" id="address" placeholder="Enter address" name="address" value=<?php {echo $address;}?>>
    </div></div>
	
    <div class="form-group">
      <label class="control-label col-sm-2" for="centername">Name Of Therapy Center:</label>
	   <div class="col-sm-10">
      <input type="text" class="form-control" id="centername" name="centername" value=<?php {echo $centername;}?> >
    </div></div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="tname" >Therapy Provided:</label>
       <div class="col-sm-10">
        <input id="tname" class="form-control" type="text" name="tname" value=<?php {echo $tname;}?>>
			
			
	
	

			<?php
			//<option value="SpeechTherapy">Speech therapy</option>
			//<option value="Physiotherapy">Physiotherapy</option>
			//<option value="NeuronTherapy">Neuron therapy</option>
			//<option value="AngerManagement">Anger Management</option>
			?>
        </select>
     
    </div></div>
	
	
	
	
	
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="date">Preferred date:</label>
	   <div class="col-sm-10">
      <input type="text" class="form-control" name="select_date" id="select_date" value=<?php {echo $date;}?>>

    </div></div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="time" >Time Provided:</label>
       <div class="col-sm-10">
        <select id="time" class="form-control" type="text" name="time" value=<?php {echo $time;}?>>
			<option value="<?php {echo $time;}?>"><?php {echo $time;}?></option>
			<option value="7">7 AM</option>
			<option value="8">8 AM</option>
			<option value="9">9 AM</option>
			<option value="10">10 AM</option>
			<option value="11">11 AM</option>
			<option value="12">12 PM</option>
			<option value="1">1 PM</option>
			<option value="2">2 PM</option>
			<option value="3">3 PM</option>
			<option value="4">4 PM</option>
			<option value="5">5 PM</option>
			<option value="6">6 PM</option>
						
        </select>
      
    </div></div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="transport" >Do you want transportation?</label>
       <div class="col-sm-10">
        <select id="transport" class="form-control" type="text" name="transport" value=<?php {echo $transport;}?>>
			<option value="<?php {echo $transport;}?>"><?php {echo $transport;}?></option>
			<option value="yes">YES</option>
			<option value="no">NO</option>
        </select>
     
    </div></div>
	
	 <div class="col-sm-offset-2 col-sm-10">
	 
	<button type="submit" class="btn btn-success" name="submit" value="submit">Save</button>
	<a href=<?php {echo $_SESSION['redirectURL'];}?> class="btn btn-danger" role="button">Back</a>
	</div>
	</form>
</div>
</body>
</html>


<?php
session_start();
$c=mysqli_connect("localhost","root","") or die (mysqli_error());
mysqli_select_db($c,"registration") or die (mysqli_error($c));
$id=$_GET['id'];
if(isset($_POST['submit']))
	{
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$email=$_POST['email'];
		$age=$_POST['age'];
		$gender=$_POST['gender'];
		$address=$_POST['address'];
		$centername=$_POST['centername'];
		$tname=$_POST['tname'];
		$date=$_POST['select_date'];
		$time=$_POST['time'];
		$transport=$_POST['transport'];
		
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
		
		if($age=='')
		{
			echo"<script>alert('PLEASE ENTER YOUR AGE')</script>";
			exit();
		}
		if($gender=='')
		{
			echo"<script>alert('PLEASE CHOOSE GENDER')</script>";
			exit();
		}
		if($address=='')
		{
			echo"<script>alert('PLEASE ENTER YOUR ADDRESS')</script>";
			exit();
		}

		if($centername=='')
		{
			echo"<script>alert('PLEASE ENTER THE NAME OF THERAPY CENTER')</script>";
			exit();
		}
		if($tname=='')
		{
			echo"<script>alert('PLEASE SELECT THERAPY NAME')</script>";
			exit();
		}
		if($date=='')
		{
			echo"<script>alert('PLEASE ENTER DATE')</script>";
			exit();
		}
		
		if($time=='')
		{
			echo"<script>alert('PLEASE SELECT PREFFERED TIME')</script>";
			exit();
		}
		if($transport=='')
		{
			echo"<script>alert('PLEASE CHOOSE TRANSPORT OPTION')</script>";
			exit();
		}

	
		$query="UPDATE appointments SET firstname='$firstname',lastname='$lastname',email='$email',age=$age,gender='$gender',address='$address',centername='$centername',tname='$tname',date='$date',time='$time',transport='$transport' WHERE id=$id";
		


         if(mysqli_query($c,$query))
		{
			//$url="normalconnect.php?username=".$email;
		    header('Location:'.$_SESSION['redirectURL']);
		}
		//include 'email.php';

	}
	ob_end_flush();
?>
