<?php
//session start
session_start();
$uname="ManualTherapyCenter";
$_SESSION['redirectURL']=$_SERVER['REQUEST_URI'];
$url3="form.php?centername=".$uname;

?>
<html>
<head>
<title>manualtherapyandpainreliefcenter</title>
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
	background:black;
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
<h1><image src="logo/logo4.png" height=100 width 100>
	

	
Manual Therapy and Pain Relief</h1>
</div>

<h2><strong>Manual Therapy and Pain Relief Center</strong></h2>
<p><h4>Manual therapy, or manipulative therapy, is a physical treatment to treat musculoskeletal(Muscle and Skeleton) pain and disability; it most commonly includes working and manipulation of muscles, joint mobilization and joint manipulation.
<br>The three most notable forms of manual therapy are manipulation, mobilization and massage. Manipulation is the artful technique of a using rapid rotational, shear or distraction force to fix musculoskeletal. Manipulation is often associated with an audible popping sound caused by the instantaneous breakdown of gas bubbles that form during joint cavitation.

Mobilization is a slower, more controlled process of articular and soft-tissue (myofascial) stretching intended to improve bio-mechanical elasticity. Massage is typically the repetitive rubbing, stripping or working of myofascial tissues to principally improve interstitial fluid dynamics.
</p></h4>
<br><br>
<h3>Contact</h3>
	<h4><b>Contact no: 01-5188067 <br>
	Email:info@themanualtherapy.com<br></h4></b>
<br><br>
<h3 style="color:black" >Services Provided:</h3>
<table height=150 width=800 border="black">
	<tr style="color:black" style="font-size:20px"><td>Therapy Name</td><td>About Massage</td><td>Cost per hour </td><td>Therapist's Name</td></tr>
	<tr><td>Spine Treatment</td><td>For spinal healing</td><td>Rs 2400 </td><td>Dr.Mahima Shrestha</td></tr>
	<tr><td>Posture Reconstructing</td><td>For body posture </td><td>Rs 280</td><td>Dr. Baburao Khatri</td></tr>
	<tr><td>Arthritis Treatment</td>  <td>For reducing body pain </td><td>Rs 1400</td><td>trained personal</td></tr>
	

	
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
  var location = {lat:27.6751, lng: 85.3012};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: location
  });
  var marker = new google.maps.Marker({
    position: location,
    map: map,
	title: 'Manual Therapy And Pain Relief Center'
  });
}
        </script>
		<br>
		<a href='routes/route3.php' class='btn btn-primary btn-lg'>
          <span>Show Route</span></a>

</center>
</body>
</html>
