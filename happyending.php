<?php
//session start
session_start();
$uname="HappyEndingTherapyCenter";
$_SESSION['redirectURL']=$_SERVER['REQUEST_URI'];
$url3="form.php?centername=".$uname;

?>

<html>
<head>
<title>Happy Ending therapy center</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script></head>
<style>
body{
	margin-left:20px;
	padding:0;
	background:url(sky.jpg);
	background-size:cover;
	font-family:sans-serif;
}
.head{
	background:purple;
	color:white;
	padding:5px 70px;
	font-size:30px;
	border-top:10px solid black;
	font-family:sans-serif;
	border-radius:50px;
}
 .button{background-color:black;
			 text-align:center;
			 font-size:16px;
			 border-radius:25px;
			 
			 margin-left:30px;
			 margin-top:0px;
			 width:150px;
			 padding:px;
			 height:25px;
			 color:
			 }	
			 
			 #id{width:100%;
			 heidht:300;}
	
	#book{
			margin-top:10px;
			margin-left:30%;
		
	}
	#map{
            width:100%;
            height:300px;
        }
</style>
</head>
<body>
	<div class="head">

	<h2 align="center"><image src="logo/happyending.jpg" height=60px>Happy Ending Therapy Center</h2>
</div>
<h3 style="color:darkred" ">Welcome To Happy Ending Therapy Center</h3>
<p>Happy ending Therapy Center offers quality therapy, including individual, family and marital therapy, grief counseling, and more. Experienced therapists work closely with clients to help them identify, assess, and meet their needs and goals. We empower clients to build and strengthen meaningful relationships with themselves and others. </p>
<h3 style="color:darkblue">About Us</h3>
	<table height=150 width=500>
	<tr><td>Location:</td><td>kalimati,kathmandu</td></tr>
	<tr><td>P			</button>
</body>
</html>.O Box:</td><td>12367</td></tr>
	<tr><td>Contact Us:</td><td>01-4467554,01-4498336</td></tr>
	<tr><td>Opening Time:</td><td>6:30AM-6PM</td></tr>
	<tr><td>Email:</td><td>happy@gmail.com</td></tr>


	
</table>

<h3 style="color:darkblue" align="center" >Services Provided:</h3>
<table height=150 width=800 border="black" align="center">
	<tr style="color:darkblue" style="font-size:20px"><td>Therapy Name</td><td>Number Of Sessions</td><td>Cost per session</td><td>Therapist's Name</td></tr>
	<tr><td>Speech Therapy</td><td>5</td><td>Rs.550</td><td>Dr.woneo Gupta<br>Dr.messi Dhungel</td></tr>
	<tr><td>Neutron Therapy</td><td>10</td><td>Rs.1500</td><td>Dr.kalu Basnet<br>Dr.ronaldo Bhandari </td></tr>
	<tr><td>Physiotherapy</td><td>15</td><td>Rs.600</td><td>Alisha Sharma<br>youg Waiba</td></tr>
	<tr><td>Anger Management</td><td>18</td><td>Rs.1000</td><td>Dr.mishal Shrestha</td></tr>

	
</table><br><br>


<div id="map">
    </div>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCg9NgmlG7qdDkYdg9B5NRf_Ns7CdQ-y-k&callback=initMap">

    </script>
    <script>
    function initMap() {
  var location = {lat:27.6992, lng:85.2971};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: location
  });
  var marker = new google.maps.Marker({
    position: location,
    map: map,
	title: 'Happy Ending Therapy Center'
  });
}
        </script>
		<br>
		<a href='routes/route4.php' class='btn btn-primary btn-lg'>
          <span>Show Route</span></a>
		<br><br>
Do you want to book appointment?
<?php
echo"<a href='$url3' class='btn btn-primary'>
          <span>BOOK NOW</span> </a>";
?>