<?php
//session start
session_start();
$uname="GreenHeartTherapyCenter";
$_SESSION['redirectURL']=$_SERVER['REQUEST_URI'];
$url3="form.php?centername=".$uname;

?>
<html>
<head>
<title>greenhearttherapycenter</title>
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
	background:red;
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

	<h1><image src="logo/logo1.png" height=60px>Green Heart Therapy</h1>
</div>

<h2><strong>Green Hearts Therapy Center</strong></h2>
<p><h4>Green heart therapy center was establish in 2008 is dedicated to provide our guest many types of Thai and Taiwan massage in Nepal. Our therapist trained by the experience Japanese trainer, who got the training from WAT PO (traditional Thai massage school) in Thailand. Their works to enhance well being reduces the physical and mental disease and restore health. Thai massage is one of the world oldest healing arts and yoga. It is uniquely effective for releasing modern day stress and maintaining returning to healthfulness and vitality. By addressing the whole person (body, mind, heart, and sprite) without dynamic physical experience one can become whole again on a physical, mental, emotional and spiritual level. It is both deeply relaxing and energizing. In the Thai, people believe, we have a line in the body, called SEN which is related in yoga ( NADI) there’re some symptom, which has result in Tsubo , which effect to be a healthy .</p></h4>
<br><br>
<h3>Contact</h3>
	<h4><b>Contact no:+977-1-4417172,+977-9841233342<br>
	Email: greenheartsnepal@yahoo.com<br></h4></b>
<br><br>
<h3 style="color:darkblue" >Services Provided:</h3>
<table height=150 width=800 border="black">
	<tr style="color:darkblue" style="font-size:20px"><td>Therapy Name</td><td>About Massage</td><td>Cost per hour </td><td>Therapist's Name</td></tr>
	<tr><td>Traditional thai body massage</td><td>Relieve pain and calm the nerves<br>Improve posture & flexibility</td><td>Rs 1700 </td><td>trained personal staff</td></tr>
	<tr><td>Shirodhara Healing</td><td> Recommended for deep relaxation of nervous system <br> Improve functioning of five senses.</td><td>Rs 1700</td><td>trained personal staff</td></tr>
	<tr><td>Physiotherapy</td><td>Specially for disabled people</td><td>Rs 2000 </td><td>Dr.Hans Raj Warma</td></tr>
	

	
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
  var location = {lat:27.7165, lng: 85.3119};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: location
  });
  var marker = new google.maps.Marker({
    position: location,
    map: map,
	title: 'Green Heart Therapy Center'
  });
}
        </script>
		<br>
		<a href='routes/route5.php' class='btn btn-primary btn-lg'>
          <span>Show Route</span></a>

</center>
</body>
</html>
