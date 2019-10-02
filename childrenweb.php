<?php
//session start
session_start();
$uname="ChildrenTherapyCenter";
$_SESSION['redirectURL']=$_SERVER['REQUEST_URI'];
$url3="form.php?centername=".$uname;

?>

<html>
<head>
<title>CHILDREN’S THERAPY CENTER
</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script></head>
<style>
#map{
            width:100%;
            height:300px;
        }
body{
	margin-left:20px;
	padding:0;
	background:lightblue;
	background-size:cover;
	font-family:sans-serif;
	color:white;
}
.head{
	
	color:purple;
	padding:5px 70px;
	font-size:30px;
	border-top:10px solid red;
	background-color:green;
	font-family:sans-serif;
	border-radius:50px;
	opacity:0.8;

	
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
</style>
</head>
<body>
	<div class="head">

	<h2 align="center"><image src="logo/children.jpg" height=60px>CHILDREN’S THERAPY CENTER</h2>
</div>
<h3 style="color:red" >CHILDREN’S THERAPY CENTER</h3>
<p>Our clinics specialize in treating children ages birth through eighteen years with a variety of disorders, including: developmental motor or speech delays, sensory devensiveness and sensory processing disorders, Cerebral Palsy, Spina Bifida, Attention Deficit Disorder, Autism Spectrum Disorders, children with hearing loss, post coclear implant rehabilitation, articulation deficits and others</P>
<h3 style="color: blue">About Us:</h3>
	<table height=150 width=500>
	<tr><td>Location:</td><td>Sundhara,Kathmandu</td></tr>
	<tr><td>P			</button>
</body>
</html>.O Box:</td><td>14597</td></tr>
	<tr><td>Contact Us:</td><td>01-4467354,01-4490536</td></tr>
	<tr><td>Opening Time:</td><td>6:30AM-6PM</td></tr>
	<tr><td>Email:</td><td>children@gmail.com</td></tr>


	
</table>

<h3 style="color:purple" align="center" >Services Provided:</h3>
<table height=150 width=800 border="black" align="center">
	<tr style="color:blue" style="font-size:20px"><td>Therapy Name</td><td>Number Of Sessions</td><td>Cost per session</td><td>Therapist's Name</td></tr>
	<tr><td>Speech Therapy</td><td>5</td><td>Rs.5500</td><td>Dr.woneo Gupta<br>Dr.ronaldo Dhungel</td></tr>
	<tr><td>Neutron Therapy</td><td>10</td><td>Rs.15000</td><td>Dr.kalu Basnet<br>Dr.messi Bhandari </td></tr>
	<tr><td>Physiotherapy</td><td>15</td><td>Rs.6000</td><td>Alisha Sharma<br>haha Waiba</td></tr>
	<tr><td>Anger Management</td><td>18</td><td>Rs.10000</td><td>Dr.mishal pandey</td></tr>

	
</table><br><br>

<div id="map">
    </div>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCg9NgmlG7qdDkYdg9B5NRf_Ns7CdQ-y-k&callback=initMap">

    </script>
    <script>
    function initMap() {
  var location = {lat:27.6993, lng: 85.3124};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: location
  });
  var marker = new google.maps.Marker({
    position: location,
    map: map,
	title: 'Children Therapy Center'
  });
}
        </script>
		<br>
		<a href='routes/route6.php' class='btn btn-primary btn-lg'>
          <span>Show Route</span></a>
		<br><br>

Do you want to book appointment?
<?php
echo"<a href='$url3' class='btn btn-primary'>
          <span>BOOK NOW</span> </a>";
?>
