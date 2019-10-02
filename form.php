<?php
session_start();
//buffer start
ob_start();
$a=0;
?>

<html>
<head>
<title>Appointment form</title>
<META http-equiv=”refresh” content=”5;URL=navi.php”>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/jquery-1.12.4.js"></script>
	<script src="js/jquery-ui.js"></script>
<style>
.containers{
		margin-top:20px;
		margin-left:300px;
		width:800px;
		background-color:#64bed1;
		height:750px;
		padding:30px;
		padding-right:50px;
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
<p><center><h3>BOOK YOUR APPOINTMENT NOW!!!</h3></center></p>
<form action="#" class="form-horizontal" method="POST">

<div class="form-group">
      <label class="control-label col-sm-2"for="firstname">First Name:</label>
	   <div class="col-sm-10">
      <input type="text" class="form-control" id="fistname" placeholder="Enter first name" name="firstname">
    </div></div>
	
    <div class="form-group">
      <label class="control-label col-sm-2"for="lastname">Last Name:</label>
	   <div class="col-sm-10">
      <input type="text" class="form-control" id="lastname" placeholder="Enter last name" name="lastname">
    </div></div>
	
	
	<div class="form-group">
      <label class="control-label col-sm-2"for="email">Email:</label>
       <div class="col-sm-10">
	  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div></div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="gender">Gender:</label>
        <div class="col-sm-10">
        <select id="gender" class="form-control" type="text" name="gender">
          <option value="disabled selected hidden">Choose Gender</option>
		  <option value="male">Male</option>
		  <option value="female">Female</option>
        </select>
      
    </div></div>
	
    <div class="form-group">
      <label class="control-label col-sm-2" for="age">Age:</label>
	   <div class="col-sm-10">
      <input type="integer" class="form-control" id="age" placeholder="Enter age" name="age">
    </div></div>
    
	<div class="form-group">
      <label class="control-label col-sm-2" for="address">Address:</label>
	   <div class="col-sm-10">
      <input type="address" class="form-control" id="address" placeholder="Enter address" name="address">
    </div></div>
	
    <div class="form-group">
      <label class="control-label col-sm-2" for="centername">Name Of Therapy Center:</label>
	   <div class="col-sm-10">
      <input type="text" class="form-control" id="centername" name="centername" value=<?php {echo $_GET['centername'];}?> disabled >
    </div></div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="tname" >Therapy Provided:</label>
       <div class="col-sm-10">
        <select id="tname" class="form-control" type="text" name="tname">
			<option value="disabled selected hidden">Choose Therapy</option>
			<?php
			$host="localhost";
			$user="root";
			$password="";
			$db="registration";
			 $centername=$_GET['centername'];
			$c=mysqli_connect($host,$user,$password);
			mysqli_select_db($c,$db);
			$sql1="SELECT * FROM `links` WHERE `centername` like '$centername'";
				$find_link = mysqli_query($c, $sql1);
				
				if($find_link->num_rows !=0){
				while($row = mysqli_fetch_assoc($find_link))
				{
					$link = $row['centerlink'];
					
				}
				}
				$sql="SELECT * FROM `therapylist` WHERE `centerlink` like '$link'";
				$find_therapy = mysqli_query($c, $sql);
				
				if($find_therapy->num_rows !=0){
				while($row = mysqli_fetch_assoc($find_therapy))
				{
					//$name = $row['name'];
					//$Address = $row['Address'];
					$list=$row['therapyname'];
					//header("loaction:'$link'");
					//echo "<a href='$link'>$name</a><br />";
					echo"<option value='$list'>".$list."</option>";
				}
				}
	?>
	
	

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
      <input type="text" class="form-control" name="select_date" id="select_date">
<script type="text/javascript">
	$(document).ready(function(){
		$("#select_date").datepicker({
	format:"mm/dd/yyyy",
	autoclose:true,
	todayHighlight:true,
	showOtherMonths:true,
	selectOtherMonths:true,
	autoclose:true,
	changeMonth:true,
	changeYear:true,
	minDate:new Date()
	});
	});
</script>
    </div></div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="time" >Suitable Time:</label>
       <div class="col-sm-10">
        <select id="time" class="form-control" type="text" name="time">
			<option value="disabled selected hidden">Choose Time</option>
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
						
        </select>
      
    </div></div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="transport" >Do you want transportation?</label>
       <div class="col-sm-10">
        <select id="transport" class="form-control" type="text" name="transport">
			<option value="disabled selected hidden">Choose transport</option>
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
//session_start();
$c=mysqli_connect("localhost","root","") or die (mysqli_error());
mysqli_select_db($c,"registration") or die (mysqli_error($c));
if(isset($_POST['submit']))
	{
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$email=$_POST['email'];
		$age=$_POST['age'];
		$gender=$_POST['gender'];
		$address=$_POST['address'];
		$centername=$_GET['centername'];
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

	
		$query="insert into appointments (firstname,lastname,email,age,gender,address,centername,tname,date,time,transport) values ('$firstname','$lastname','$email','$age','$gender','$address','$centername','$tname','$date','$time','$transport')";
		


         if(mysqli_query($c,$query))
		{
			
		$a=1;
		
		}
		include 'email.php';

	}
	if($a==1){
		header('Location:'.$_SESSION['redirectURL']);}
	ob_end_flush();
?>
