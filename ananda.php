<?php
//session start
session_start();
$uname="AnandaTherapyCenter";
$_SESSION['redirectURL']=$_SERVER['REQUEST_URI'];
$url3="form.php?centername=".$uname;

?>

<html>
<head>
<title>Ananda therapy center</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script></head>
<style>
body{
	margin-left:20px;
	padding:0;
	background:white;
	background-size:cover;
	font-family:sans-serif;
}
.head{
	background:yellow;
	color:white;
	padding:5px 70px;
	font-size:30px;
	border-top:10px solid #37f;
	font-family:sans-serif;
}
 .button{background-color:green;
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
		
	}
	#map{
            width:100%;
            height:300px;
        }
</style>
</head>
<body>
<center>
	<div class="head">
	

	<h2><image src="logo/ananda.jpg" height=60px>Ananda Therapy Center</h2>
</div>
<h3 style="color:darkred">Welcome To Ananda Therapy Center</h3>
<p>Ananda Therapy Center is the comprehensive outpatient clinic giving services since 2004. Ananda therapy Center tragets on physical,mental and pschyological health of their patients. Ananda Therapy Center has experienced doctors,therapist and helpers helping many patients to overcome their health conditions. </p>
<h3 style="color:darkblue">About Us</h3>
	<table height=150 width=500>
	<tr><td>Location:</td><td>kalanki,kathmandu</td></tr>
	<tr><td>P			</button>
</body>
</html>.O Box:</td><td>12345</td></tr>
	<tr><td>Contact Us:</td><td>01-4494554,01-4478336</td></tr>
	<tr><td>Opening Time:</td><td>6:30AM-6PM</td></tr>
	<tr><td>Email:</td><td>anandatherapycenter@gmail.com</td></tr>


	
</table>

<h3 style="color:darkblue" align="center" >Services Provided:</h3>
<table height=150 width=800 border="black" align="center">
	<tr style="color:darkblue" style="font-size:20px"><td>Therapy Name</td><td>Number Of Sessions</td><td>Cost per session</td><td>Therapist's Name</td></tr>
	<tr><td>Speech Therapy</td><td>5</td><td>Rs.550</td><td>Dr.woneo Gupta<br>Dr.messi Dhungel</td></tr>
	<tr><td>Neutron Therapy</td><td>10</td><td>Rs.1500</td><td>Dr.kalu Basnet<br>Dr.ronaldo Bhandari </td></tr>
	<tr><td>Physiotherapy</td><td>15</td><td>Rs.600</td><td>Alisha Sharma<br>Youg Waiba</td></tr>
	<tr><td>Anger Management</td><td>18</td><td>Rs.1000</td><td>Dr.mishal Shrestha</td></tr>

	
</table><br><br>



<div id="map">
    </div>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCg9NgmlG7qdDkYdg9B5NRf_Ns7CdQ-y-k&callback=initMap">

    </script>
    <script>
    function initMap() {
  var location = {lat:27.6945, lng: 85.281};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: location
  });
  var marker = new google.maps.Marker({
    position: location,
    map: map,
	title: 'Ananda Therapy Center'
  });
}
        </script>
		<br>
		<a href='routes/route8.php' class='btn btn-primary btn-lg'>
          <span>Show Route</span></a>
	
		<br><br>
Do you want to book appointment?
<?php
echo"<a href='$url3' class='btn btn-primary'>
          <span>BOOK NOW</span> </a>";
?>
			</center>
