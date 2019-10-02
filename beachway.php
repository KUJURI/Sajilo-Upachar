<?php
//session start
session_start();
$uname="BeachwayTherapyCenter";
$_SESSION['redirectURL']=$_SERVER['REQUEST_URI'];
$url3="form.php?centername=".$uname;

?>
<html>
<head>
<title>Beachway therapy center</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script></head>
<style>
body{
	margin-left:20px;
	padding:0;
	background:url(images.png
	);
	background-size:cover;
	font-family:sans-serif;
	color:;
}
.head{
	
	color:purple;
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

	<h2 align="center"><image src="logo/beachway.jpg" height=60px>Beachway Therapy Center</h2>
</div>
<h3 style="color:red" >Beach Way Therapy Center</h3>
<p>Beachway is ranked as one of the country’s top rated rehab centers in Nepal because of our dedicated, progressive clinical staff and focus on raising the standards in rehabilitation. At Beachway, we match every individual with a therapy team and customized long-term treatment plan. Our experienced staff partners with you. We listen. We get to know you as a person. We come to the table knowing what it’s like to struggle with addiction—and how to recover and thrive.</p>
<h3 style="color:darkblue">About Us</h3>
	<table height=150 width=500>
	<tr><td>Location:</td><td>Hattiban,lalitpur</td></tr>
	<tr><td>P			</button>
</body>
</html>.O Box:</td><td>12397</td></tr>
	<tr><td>Contact Us:</td><td>01-4467454,01-4498536</td></tr>
	<tr><td>Opening Time:</td><td>6:30AM-6PM</td></tr>
	<tr><td>Email:</td><td>beachway@gmail.com</td></tr>


	
</table>

<h3 style="color:purple" align="center" >Services Provided:</h3>
<table height=150 width=800 border="black" align="center">
	<tr style="color:blue" style="font-size:20px"><td>Therapy Name</td><td>Number Of Sessions</td><td>Cost per session</td><td>Therapist's Name</td></tr>
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
  var location = {lat:27.6504, lng: 85.3344};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: location
  });
  var marker = new google.maps.Marker({
    position: location,
    map: map,
	title: 'Beachway Therapy Center'
  });
}
        </script>
		<br>
		<a href='routes/route7.php' class='btn btn-primary btn-lg'>
          <span>Show Route</span></a>
<br><br>
		
Do you want to book appointment?
<?php
echo"<a href='$url3' class='btn btn-primary'>
          <span>BOOK NOW</span> </a>";
?>

