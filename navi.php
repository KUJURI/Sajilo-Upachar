<?php 
session_start();
//echo $_SESSION['email'];

?>

<html>
<head><title>navigation bar</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
	background-image:url('pic/cloud.jpeg');
	background-size:cover;
	font-family:verdana;
	font-size:20px;
	margin:0;
	line-height:24px;
}
.head{
	background:white;
	color:darkblue;
	padding:10px 70px;
	font-size:30px;
	border-top:10px solid #37f;
	font-family:verdana;
}
.nav{
	text-align:center;
	width:100%;
	background:darkblue;
	opacity:0.5;
}
.nav ul{
	margin:0;
	padding:0;
	list-style:none;
	position:relative;
}
.nav ul li a{
	display:block;
	padding:25px;
	color:white;
	text-decoration:none;
	width:150px;
}
.nav ul:after{
	content:"";
	clear:both;
	display:block;
}
.nav ul li{
	float:left;
	list-style:none;
}
.nav ul ul{
	display:none;
}
.nav ul li:hover>ul{
		display:block;
		
}
.nav ul li:hover {
	background:black;
	transition:0.9s;
}
.nav ul li:hover a{
	color:white;
}
.nav ul ul{
	background:black;
	padding:0;
	margin:0;
	position:absolute;
	top:100%;
	
}
.nav ul ul li{
	float:none;
	position:relative;
	
}
.nav ul ul li a{
	padding:25px;
	color:white;
	width:300px;
	text-align:left;
}
.nav ul ul li a:hover{
	background:lightblue;
	color :black;
	transition:0.9s;
}
.nav .search-container {
  float: right;
}

.nav input[type=text] {
  padding: 6px;
  margin-top: 20px;
  font-size: 24px;
  border: none;
}

.nav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 20px;
  margin-right: 16px;
  background: #ddd;
  font-size: 27px;
  border: none;
  cursor: pointer;
}

.nav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .nav .search-container {
    float: none;
  }
  .nav a, .nav input[type=text], .nav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .nav input[type=text] {
    border: 1px solid #ccc;  
}}
</style>
</head>
<body>
<div class="head">
	<h1>Sajilo Upachar</h1>
</div>
<div class="nav">
	<ul>
		
		
		<li><a href="normalconnect.php">My Account</a></li>
		
		<li><a href="#">List</a>
			<ul>
			
				<li><a href="hopeweb.php">Hope Therapy Center</a></li>
				<li><a href="nepalweb.php">Nepal Physio Care</a></li>
				<li><a href="greenhearttherapycenter.php">Green Hearts Therapy Center</a></li>
				<li><a href="manualtherapyandpainreliefcenter.php">Manual Therapy Center</a></li>
				<li><a href="mokshaayurveda.php">Mokshya Ayurveda</a></li>
				<li><a href="childrenweb.php">Children Therapy Center</a></li>
				<li><a href="nepalhypnosis.php">Nepal Hypnosis</a></li>
				<li><a href="beachway.php">Beachway Therapy Center</a></li>
				<li><a href="ananda.php">Ananda Therapy Center</a></li>
				<li><a href="happyending.php">Happy Ending Center</a></li>
			</ul>
		</li>
		<li><a href="map/index.php">Around Me</a></li>
		<li><a href="contact.php">Contact Us</a></li>
		<li><a href="logout.php">Logout</a></li>
	</u>
	
		<div class="search-container">
    <form action="search.php" method="POST">
      <input type="text" placeholder="Search.." name="searchterm">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
  
  
  
</div>
</body>

</html>
