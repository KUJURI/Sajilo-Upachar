<?php
//session start
session_start();
$uname="HopeTherapyCenter";
$_SESSION['redirectURL']=$_SERVER['REQUEST_URI'];
$url3="form.php?centername=".$uname;

?>

<html>
<head>
<title>Hope therapy center</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></head>
<style>
body{
	margin-left:20px;
	padding:0;
	background:url();
	background-size:cover;
	font-family:sans-serif;
}
.head{
	background:lightpink;
	color:purple;
	padding:5px 70px;
	font-size:30px;
	border-top:10px solid #37f;
	font-family:sans-serif;
}
 .button{background-color:lightblue;
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
			 
        #map{
			top:500px;
            width:60%;
            height:300px;
        }
  
  .text1{
	top:475px;
	
}

/*side navigation bar*/  
.sidenav {
	top:40px;
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #0b1baa;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 6px 6px 32px;
  text-decoration: none;
  font-size: 18px;
  color: #ffffff;
  display: block;
  margin-bottom: 20px;
}

.sidenav a:hover {
  color: #ffeded;
}

.main {
  margin-left: 200px; /* Same as the width of the sidenav */
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}


/*split*/
.split {
  position: absolute;
  z-index: 1;
  overflow-x: hidden;
  padding-top: 20px;
  
}

.left {
  left: 225px;
  width: 50%;
  
  
}

.right {
  right: 0;
  
  
}


.map{
	position:relative;
	top:350px;
}

.final{
	position:relative;
	top:520px;
}

/*rating*/
.checked {
  color: orange;
}
.table1{
	border:none;
}
th, td {
  padding: 15px;
}
.box2{
	border: 5px solid darkblue;
	width:350px;
}
h2{
	color:red;
}

/*pictures*/
div.gallery {
	right:10px;
	position:relative;
  border: 1px solid #ccc;
  width:300px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: 250px;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
  margin-bottom:10px;
}

.responsive {
  padding: 0 6px;
  
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

</style>
<body>
	<div class="head">
<center>
	<h2><image src="logo/hope.jpg" height=60px>&nbsp Hope Therapy Center</h2></center>
</div>

<div class="sidenav">
<a href="#home">&#9776;    </a>
<a href="#home">    </a>
<a href="#home">    </a>
  <a href="#home"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="#services"><i class="fa fa-fw fa-wrench"></i> Services</a>
  <a href="#clients"><i class="fa fa-fw fa-calendar"></i> Events</a>
  <a href="#contact"><i class="fa fa-fw fa-envelope"></i> Contact Us</a>
  <a href="#contact"><i class="fa fa-fw fa-photo"></i> Photo Gallery</a>
  <a href="#contact"><i class="fa fa-fw fa-pencil"></i> Reviews</a>
  <a href="#contact"><i class="fa fa-fw fa-car"></i> Transportation</a>
</div>


<div class="main">
<div class="split left">
<h3 style="color:darkblue" >Welcome To Hope Therapy Center</h3>
<p>Hope Therapy Center is the comprehensive outpatient clinic giving services since 2002. Hope therapy Center tragets on physical,mental and pschyological health of their patients. Hope Therapy Center has experienced doctors,therapist and helpers helping many patients to overcome their health conditions. </p>

<h3 style="color:darkblue">About Us</h3>
	<table height=150 width=100% border=2 >
	<tr><td>Location:</td><td>Madan Bhandari Road,Baneshwor</td></tr>
	<tr><td>P.O Box:</td><td>20125</td></tr>
	<tr><td>Contact Us:</td><td>01-4494334,01-4494336</td></tr>
	<tr><td>Opening Time:</td><td>6.30AM-6PM</td></tr>
	<tr><td>Email:</td><td>hopetherapy@gmail.com</td></tr>


	
</table>
<div class="text1">
<h3 style="color:darkblue" >Find Us on Map:</h3></div>
</div>

<div class="split right">
<h3 style="color:darkblue" >Events & Photo Gallery</h3><br>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="hope1.jpg">
      <img src="hope1.jpg" alt="Cinque Terre" width="600" height="400">
    </a>
    <div class="desc">Staff working for Hope Therapy Center</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="hope3.jpg">
      <img src="hope3.jpg" alt="Northern Lights" width="600" height="400">
    </a>
    <div class="desc">Physiotherapy Sessions for Earthquake Victims</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_mountains.jpg">
      <img src="hope4.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Speech Therapy Sessions for Childrens 2018</div>
  </div>
</div>

<div class="clearfix"></div>


<div class="box2">
<h2>&nbsp;&nbspStar Ratings</h2>
<table class="table1">
<tr><td>Anger Management</td><td>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span></tr>

<tr><td>Neutron Therapy</td><td>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span></tr>

<tr><td>Physiotherapy</td><td>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span></tr>

<tr><td>Speech Therapy</td><td>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span></tr>

<tr><td>Overall Review</td><td>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span></tr>

</table>
</div>
</div>


<div id="map" class="map">

    </div>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCg9NgmlG7qdDkYdg9B5NRf_Ns7CdQ-y-k&callback=initMap">

    </script>
    <script>
    function initMap() {
  var location = {lat:27.6915, lng: 85.342};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: location
  });
  var marker = new google.maps.Marker({
    position: location,
    map: map,
	title: 'Hope Therapy Center'
  });
}
        </script>
		
		
		<div class="final">
		
		<a href='routes/route.php' class='btn btn-primary btn-lg' style="margin-left:270px">
          <span>Show Route</span></a>
		
<h3 style="color:darkblue" >Services Provided:</h3><br>
<table height=150 width=60% border="black">
	<tr style="color:darkblue" style="font-size:20px"><td>Therapy Name</td><td>Number Of Sessions</td><td>Cost per session</td><td>Therapist's Name</td></tr>
	<tr><td>Speech Therapy</td><td>5</td><td>Rs.550</td><td>Dr.Ram Gupta<br>Dr.Reema Dhungel</td></tr>
	<tr><td>Neutron Therapy</td><td>10</td><td>Rs.1500</td><td>Dr.Shiva Kumar Basnet<br>Dr.Yugh Bhandari </td></tr>
	<tr><td>Physiotherapy</td><td>15</td><td>Rs.600</td><td>Alisha Sharma<br>Merina Waiba</td></tr>
	<tr><td>Anger Management</td><td>18</td><td>Rs.1000</td><td>Dr.Rohini Shrestha</td></tr>

	
</table><br><br>

<h3>Do you want to book appointment?
<?php
echo"<a href='$url3' class='btn btn-primary'>
          <span>BOOK NOW</span> </a>";
?>
			</h3></center>
			</div></div>
</body>
</html>
