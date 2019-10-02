
<?php
//session start
session_start();
ob_start();
//$email=$_SESSION['email'];
//echo "<p>".$email."</p>";
$_SESSION['redirectURL']=$_SERVER['REQUEST_URI'];
	if(!isset($_GET['username'])){
		
		header('location: admin.php');
		exit();
	}
	
	$uname=$_GET['username'];
	//$url="normalconnect.php?username=".$uname;
	
//connect to db
$mysqli=NEW MySQLi('localhost','root','','registration');


//query the db
$resultSet= $mysqli->query("SELECT * FROM admin where email='$uname'");

echo"<!DOCTYPE html><html>".
"<head>".
"<title>Admin</title>".

  "<meta charset='utf-8'>".
  "<meta name='viewport' content='width=device-width, initial-scale=1'>".
  "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>".
  "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>".
  "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>".
  "<link rel='stylesheet' href='admincss.css'>".
"</head>".

"<body style='background-color:#a7bfc6'>".
"<ul>
  <li><a class='active' href='#home'>Admin DashBoard</a></li>
  <li><a href='#news'>Therapy Centers</a></li>
  <li><a href='#news'>User List</a></li>
  <li><a href='#news'>Appointment List</a></li>
  <li><a href='#contact'>Contact</a></li>
  <li style='float:right'>
  <form method='POST' action='#'>
  
 <button type='submit' class='button' name='submit' value='submit'>Logout</button></form>
 ";


if(isset($_POST['submit'])){
	if(session_destroy()) {
      header("Location: admin.php");
   }
}
 echo " </li>
</ul>".
"<div class='containers'>".
"<div class='split1 left'>".
"<img src='lady1.jpg' alt='Profile Pic' width='250' height='250'></div>".
"<div class='split1 right1'>".
"<div class='box1'>";


//count the returned rows
if($resultSet->num_rows !=0){
	echo"<p class='headings' ><u>Admin Details</u></p>";
	//turn the result to array
	while($rows=$resultSet->fetch_assoc())
	{
		$fname=$rows['firstname'];
		$lname=$rows['lastname'];
		
		echo"<p><b> Name:</b> $fname $lname</p>";
		echo"<p><b> Email:</b> ". $rows['email']."</p>";
		echo"<p><b> Gender:</b> ". $rows['gender']."</p>";
		
	}
}	

echo "</div></div>";

//connect to db
$mysqli=NEW MySQLi('localhost','root','','registration');


//query the db
$resultSet= $mysqli->query("SELECT * FROM client");
echo"<div class='split left'>";
echo"<div class='box2'>";
echo"<p class=headings><u>User List</u></p>";
	echo"<table class='customers'><thead><tr>".
	  "<th>Username</th>".
        "<th>Email</th>".
		"<th>Date of Birth</th>".
		"<th>Gender</th>".
		"<th>          </th>".
      "</tr>".
    "</thead>".
	"<tbody>";
	
//count the returned rows
if($resultSet->num_rows !=0){
	
	
	//turn the result to array
	while($rows=$resultSet->fetch_assoc())
	{
		$fname=$rows['name'];
		$lname=$rows['surname'];
		$id=$rows['id'];
		$url1="edituseradmin.php?id=".$id;
		$url2="deleteuseradmin.php?id=".$id;
		echo"<tr>";
		echo"<td>$fname $lname</td>";
		echo"<td> ". $rows['email']."</td>";
		echo"<td> ". $rows['dob']."</td>";
		echo"<td> ". $rows['gender']."</td>";
		
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
}	
$mysqli->close();

echo"</div></div>";


//therapy centers
//connect to db
$mysqli=NEW MySQLi('localhost','root','','registration');


//query the db
$resultSet= $mysqli->query("SELECT * FROM therapycenter");
echo"<div class='split right'>";
echo"<div class='box3'>";
echo"<p class='headings'><u>Therapy Center List</u></p>";
	echo"<table class='customers'><thead><tr>".
	"<th>S.N</th>".
	  "<th>Therapy Center Name</th>".
		"<th>Remarks</th>".
      "</tr>".
    "</thead>".
	"<tbody>";
	
//count the returned rows
if($resultSet->num_rows !=0){
	
	$id=0;
	//turn the result to array
	while($rows=$resultSet->fetch_assoc())
	{
		$name=$rows['name'];
	
		
		$id+=1;
		$url1="edituseradmin.php?id=".$id;
		$url2="deleteuseradmin.php?id=".$id;
		echo"<tr>";
		echo"<td>$id</td>";
		echo"<td>$name</td>";
		echo"<td><a href='".$rows['link']."'>View Page</a></td>";
		
		
		
		
		echo"</tr>";
		
	}
	echo "</tbody>".
  "</table>";
}	
$mysqli->close();

echo"</div></div>";


	
	$mysqli=NEW MySQLi('localhost','root','','registration');
	
	$resultSet= $mysqli->query("SELECT * FROM appointments");
	
	echo"<div class='box4'>";
	echo"<p class='headings'><u>List of all Appointments</u></p>";
	
	echo"<table class='customers'><thead><tr>".
	  "<th>Patient Name</th>".
        
        "<th>Age</th>".
		"<th>Gender</th>".
		"<th>Therapy Center Name</th>".
		"<th>Therapy Name</th>".
		"<th>Scheduled Date</th>".
		"<th>Scheduled Time</th>".
		"<th>Transportation Booking</th>".
		"<th>           </th>".
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
		//include("button.php");
		//edit and del button
		echo"<td>
			
			
        <a href='$url1' class='btn btn-primary btn-lg'>
          <span class='glyphicon glyphicon-pencil'></span> 
        </a> <a href='$url2' class='btn btn-danger btn-lg'>
          <span class='glyphicon glyphicon-trash'></span> 
        </a></td></tr>";
	}
	
	echo "</tbody>".
  "</table></div>";
 echo"
 </div>
 </body></html>";

 }else{
	echo"<p>not found</p>";
}
$mysqli->close();

if(isset($_POST['submit'])){
	if(session_destroy()) {
      header("Location: admin.php");
   }
}
?>