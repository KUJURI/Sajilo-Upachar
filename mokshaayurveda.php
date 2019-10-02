<?php
//session start
session_start();
$uname="MokshyaAyurveda";
$_SESSION['redirectURL']=$_SERVER['REQUEST_URI'];
$url3="form.php?centername=".$uname;

?>
<html>
<head>
<title>mokshaayurveda</title>
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
	background:blue;
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

	<h1><image src="logo/logo2.png" height=60px>MokshaAyurveda</h1>
</div>

<h2><strong>Moksha Ayurveda & Panchakarma Center</strong></h2>
<p><h4>MOKSHA Ayurveda and Panchakarma Centre is a Classical Panchakarma Centre facilitated to experience ‘Journey to blissful health’.

We emphasize on preservation and promotion of health on individual basis maintaining balance between body, mind and spirit. We approach the treatment based on body mind constitution.

Our facilities include rejuvenating therapies, quality management, individual counseling, under hygienic environment intending to promote and preserve health awareness. We help you to learn and realize that the blissful health and peaceful mind are within you. Ayurveda emphasizes on illness prevention through proper lifestyle choices based on individual prakriti (constitution), seasonal influences.

</p></h4>
<br><br>
<h3>Contact</h3>
	<h4><b>Contact no: +977-01-5541584,  01-5522954 +977-9851233755<br>
	Email:info@mokshaayurveda.com.np <br></h4></b>
<br><br>
<h3 style="color:black" >Services Provided:</h3>
<table height=150 width=800 border="black">
	<tr style="color:darkblue" style="font-size:20px"><td>Therapy Name</td><td>About Massage</td><td>Cost per hour </td><td>Therapist's Name</td></tr>
	<tr><td>Ayurveda Prana Package</td><td>For respiratory disorders</td><td>Rs 2900 </td><td>trained personal staff</td></tr>
	<tr><td>Snehana</td><td>For insomania and mental illness </td><td>Rs 2415 </td><td>trained personal staff</td></tr>
	<tr><td>Mind and Mood</td>  <td>For lightness and restoration of energy</td><td>Rs 1900</td><td>trained personal staff</td></tr>
	<tr><td>Weekend Health Program</td> Relaxation<td></td><td>Rs 2000 </td><td>Dr.Hans Raj Warma</td></tr>
	

	
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
  var location = {lat:27.683, lng: 85.3145};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: location
  });
  var marker = new google.maps.Marker({
    position: location,
    map: map,
	title: 'Mokshya Ayurveda'
  });
}
        </script>
		<br>
		<a href='routes/route2.php' class='btn btn-primary btn-lg'>
          <span>Show Route</span></a>
</center><br>
</body>
</html>
