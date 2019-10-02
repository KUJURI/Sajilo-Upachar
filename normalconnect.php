<?php
//session start
session_start();
//$email=$_SESSION['email'];
//echo "<p>".$email."</p>";
$_SESSION['redirectURL']=$_SERVER['REQUEST_URI'];
	
	if(!isset($_GET['username'])){
		
		header('location: login.php');
		exit();
	}
	
	$uname=$_GET['username'];
	//$url="normalconnect.php?username=".$uname;

//connect to db
$mysqli=NEW MySQLi('localhost','root','','registration');


//query the db
$resultSet= $mysqli->query("SELECT * FROM client where email='$uname'");

echo"<!DOCTYPE html><html>".
"<head>".
"<title>My Account</title>".

  "<meta charset='utf-8'>".
  "<meta name='viewport' content='width=device-width, initial-scale=1'>".
  "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>".
  "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>".
  "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>".
  "<link rel='stylesheet' href='myacc.css'>".
"</head>".

"<body style='background-color:#E6E6FA'>".
"<div class='containers'>";

echo "<div class='split1 left'>".
"<img src='acc.jpg' alt='Profile Pic' width='250' height='250'></div>".
"<div class='split1 right1'>".
"<div class='box1'>";

//count the returned rows
if($resultSet->num_rows !=0){
	echo"<h3><u>User Details</u></h3>";
	//turn the result to array
	while($rows=$resultSet->fetch_assoc())
	{
		$id=$rows['id'];
		$fname=$rows['name'];
		$lname=$rows['surname'];
		$url3="edituser.php?id=".$id;
		$url4="deleteuser.php?id=".$id;
	
		echo"<p><b> Name:</b> $fname $lname</p>";
		echo"<p><b> Email:</b> ". $rows['email']."</p>";
		echo"<p><b> Date Of Birth: </b>". $rows['dob']."</p>";
		echo"<p><b> Gender:</b> ". $rows['gender']."</p>";
		echo"
			
			
        <a href='$url3' class='btn btn-primary btn-lg'>
          <span class='glyphicon glyphicon-pencil'></span> 
        </a> <a href='$url4' class='btn btn-danger btn-lg'>
          <span class='glyphicon glyphicon-trash'></span> 
        </a>";
	}
}

echo "</div></div><div class='box2'>";	
	echo"<p><h3><u>Your Appointments</u></h3></p>";
	$mysqli=NEW MySQLi('localhost','root','','registration');
	
	$resultSet= $mysqli->query("SELECT * FROM appointments where email='$uname'");
	
	
	
	echo"<table class='customers'><thead><tr>".
	  "<th>Patient Name</th>".
        
        "<th>Age</th>".
		"<th>Gender</th>".
		"<th>Therapy Center Name</th>".
		"<th>Therapy Name</th>".
		"<th>Scheduled Date</th>".
		"<th>Scheduled Time</th>".
		"<th>Transportation Booking</th>".
		"<th>Edit/Delete</th>".
      "</tr>".
    "</thead>".
	"<tbody>";

//count the returned rows
if($resultSet->num_rows !=0){
	
	//turn the result to array
	while($rows=$resultSet->fetch_assoc())
	{
		$fname=$rows['firstname'];
		$lname=$rows['lastname'];
		$id=$rows['id'];
		$url1="edit.php?id=".$id;
		$url2="delete.php?id=".$id;
		echo"<tr>";
		echo"<td>$fname $lname</td>";
		echo"<td> ". $rows['age']."</td>";
		echo"<td> ". $rows['gender']."</td>";
		echo"<td> ". $rows['centername']."</td>";
		echo"<td> ". $rows['tname']."</td>";
		echo"<td> ". $rows['date']."</td>";
		echo"<td> ". $rows['time']."</td>";
		echo"<td>".$rows['transport']."</td>";
		
		//edit and del button
		echo"<td>
			
			
        <a href='$url1' class='btn btn-primary btn-lg'>
          <span class='glyphicon glyphicon-pencil'></span> 
        </a> <a href='$url2' class='btn btn-danger btn-lg'>
          <span class='glyphicon glyphicon-trash'></span> 
        </a></td></tr>";
	}
	
	echo "</tbody>".
  "</table>";
 echo"</div></div></body></html>";

 }else{
	echo"<p>not found</p>";
}
$mysqli->close();
?>