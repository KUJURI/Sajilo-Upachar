<?php
//session start
session_start();
$uname="NepalPhysioCare";
$_SESSION['redirectURL']=$_SERVER['REQUEST_URI'];
$url3="form.php?centername=".$uname;

?>
<html>
<head>
<title>Nepal Physio Care</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script></head>
<style>
body{
	margin-left:20px;
	padding:0;
	background:url();
	background-size:cover;
	font-family:sans-serif;
}
.head{
	background:lightblue;
	color:green;
	padding:5px 70px;
	font-size:30px;
	border-top:10px solid #37f;
	font-family:sans-serif;
}
#map{
            width:100%;
            height:300px;
        }
</style>
<body>
<center>
	<div class="head">

	<h1><image src="logo/nep.jpg" height=60px>Nepal Physio Care</h1>
</div>

<h2><strong>Welcome to Nepal Physio Care</strong></h2>
<p><h4>We’re one of the proud supplier of physio theraphy equipment around the country. Behind our logo is a history of product such as Microwave Theraphy Unit Radarmed, Combind-Devices-For-Electro-Therapy, Laser Therapy Machine, Lasedmed 2200-2100 Shortwave Diathermy 500WShortwave Diathermy 500W, Shortwave Diathermy Cont. Pulse Interferential Therapy, Shortwave-Diathermy-250W, IFT Pro, Cervical Lumber Traction, Muscle Stimulator, Ultrasonic Semi Digital, Dyno Trac LCD, Meditek Tens 4 Channel, Tens Dual Channel, Continuous Passive Motion Unit, Hydrocholator, Meditek Continuous Passive Motion, Wax Bath.
As well as we also offer comprehensive, results-based physical therapy services to our patient. As a patient, you’ll be partnered with a therapist who specializes in your condition for full hour.</p></h4>
<br><br>
<h3 style="color:darkblue">About Us</h3>
	<table height=150 width=500 border=2>
	<tr><td>Location:</td><td>Kalimati,Kathmandu</td></tr>
	<tr><td>P.O Box:</td><td>20125</td></tr>
	<tr><td>Contact Us:</td><td>01-4494444,01-4498336</td></tr>
	<tr><td>Opening Time:</td><td>6.30AM-6PM</td></tr>
	<tr><td>Email:</td><td>nepal@physio.com</td></tr>


	
</table><br><br><br>

<h3 style="color:darkblue" >Services Provided:</h3>
<table height=150 width=800 border="black">
	<tr style="color:darkblue" style="font-size:20px"><td>Therapy Name</td><td>Number Of Sessions</td><td>Cost per session</td><td>Therapist's Name</td></tr>
	<tr><td>Hydro-Therapy</td><td>5</td><td>Rs.600</td><td>Dr.Sawant Khanal<br>Dr.Ronzon Gupta</td></tr>
	<tr><td>Reiki Healing</td><td>10</td><td>Rs.1500</td><td>Dr.Nischal Acharya<br>Dr.Sonam Sherpa</td></tr>
	<tr><td>Physiotherapy</td><td>15</td><td>Rs.600</td><td>Dr.Rokin Malla<br>Dr.Sushmita Paneru</td></tr>
	<tr><td>Anger Management</td><td>18</td><td>Rs.1000</td><td>Dr.Abishekh Upreti</td></tr>
	<tr><td>Sound Healing</td><td>18</td><td>Rs.2000</td><td>Dr.Neeruta Sapkota</td></tr>

	
</table><br><br>
Do you want to book appointment?
<?php
echo"<a href='$url3' class='btn btn-primary'>
          <span>BOOK NOW</span> </a>";
?>

<br><br>



		  <div id="map">
    </div>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCg9NgmlG7qdDkYdg9B5NRf_Ns7CdQ-y-k&callback=initMap">

    </script>
    <script>
    function initMap() {
  var location = {lat:27.700384, lng: 85.302361};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: location
  });
  var marker = new google.maps.Marker({
    position: location,
    map: map,
	title: 'Nepal Physio Care'
  });
}
        </script>
		<br>
		<a href='routes/route9.php' class='btn btn-primary btn-lg'>
          <span>Show Route</span></a><br>

</center>
</body>
</html>
