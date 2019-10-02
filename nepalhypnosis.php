<?php
//session start
session_start();
$uname="NepalHypnosisTherapyCenter";
$_SESSION['redirectURL']=$_SERVER['REQUEST_URI'];
$url3="form.php?centername=".$uname;

?>
<html>
<head>
<title>nepalhypnosis</title>
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

	<h1><image src="logo/logo3.png" height=100 width 100>Nepal Hypnosis</h1>
</div>

<h2><strong>Nepal Hypnosis</strong></h2>
<p><h4>Nepal Hypnosis Clinic and Training Center provides complete care of psychosocial health by using alternative healing techniques, such as, integrated clinical hypnotherapy, healing touch, Gestalt psychotherapy, psychosocial counseling, past life regression, age regression, inner child healing, creative movement therapy (CMT / DMT), crystal healing, aura healing, neuro linguistic programming (NLP), emotional empowerment technique (EET), emotional freedom technique (EFT), redikall healing and more. We emphasize on physical, emotional, mental and spiritual wellbeing. 
</p></h4>
<br><br>
<h3>Contact</h3>
	<h4><b>Contact no: +977 01 4414779 <br>
	Email:info@nepalhypnosis.com<br></h4></b>
<br><br>
<h3 style="color:black" >Services Provided:</h3>
<table height=150 width=800 border="black">
	<tr style="color:black" style="font-size:20px"><td>Therapy Name</td><td>About Massage</td><td>Cost per hour </td><td>Therapist's Name</td></tr>
	<tr><td>Hypnotherapy</td><td>For mental illness and healing</td><td>Rs 2900 </td><td>Dr. Baburam Kc</td></tr>
	<tr><td>Physiotherapy</td><td>For Abuse, Alcoholism, Anger Management, Anxiety </td><td>Rs 2415 </td><td>Dr. Ram Baidya</td></tr>
	<tr><td>Past Life Regression</td>  <td>For reshaping of mind</td><td>Rs 1900</td><td>Dr. Shushma Khatri</td></tr>
	

	
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
  var location = {lat:27.7176, lng: 85.3341};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: location
  });
  var marker = new google.maps.Marker({
    position: location,
    map: map,
	title: 'Nepal Hypnosis Therapy Center'
  });
}
        </script>
				<br>
		<a href='routes/route1.php' class='btn btn-primary btn-lg'>
          <span>Show Route</span></a>
</center>
</body>
</html>
