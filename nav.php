<?php
session_start();
ob_start();
	if(!isset($_GET['username'])){
		header('location: login.php');
		exit();
	}
	$uname=$_GET['username'];
	$url="normalconnect.php?username=".$uname;
	$_SESSION['redirectURL']=$_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="en">
<head>


  <title>nav</title>
  <style>
    .navbar-brand{
      background-color: #6495ED;
      border-radius: 10px;
      color:green;
    }
	/* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  #ima{
	  height: 80%;
	  width: 100%;
  }
  </style>
  </style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  
  
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php {echo $url;}?>">My Account</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		List Of Therapy Center</a>
		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          
		       <a class="dropdown-item" href="hopeweb.php">Hope Therapy Center</a>
				<a class="dropdown-item" href="nepalweb.php">Nepal Physio Care</a>
				<a class="dropdown-item" href="greenhearttherapycenter.php">Green Hearts Therapy Center</a>
				<a class="dropdown-item" href="manualtherapyandpainreliefcenter.php">Manual Therapy Center</a>
				<a class="dropdown-item" href="mokshaayurveda.php">Mokshya Ayurveda</a>
				<a class="dropdown-item" href="childrenweb.php">Children Therapy Center</a>
				<a class="dropdown-item" href="nepalhypnosis.php">Nepal Hypnosis</a>
				<a class="dropdown-item" href="beachway.php">Beachway Therapy Center</a>
				<a class="dropdown-item" href="ananda.php">Ananda Therapy Center</a>
				<a class="dropdown-item" href="happyending.php">Happy Ending Center</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="map/index.php">Therapy Center Around Me</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a></a>
      </li>
      <!--<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About Us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Our Associates</a>
          <a class="dropdown-item" href="#">Transportation</a>
		  <a class="dropdown-item" href="#">Our Team</a>
		  <a class="dropdown-item" href="#">Photo Gallery</a>
         
        </div>
      </li>-->
     
	 
    </ul>
    <form class="form-inline my-2 my-lg-0" action="search.php" method="POST">
      <input class="form-control mr-sm-2" type="text" name="searchterm" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
	 
  </div>
</nav>


<div class="container mt-3">

<div id="myCarousel" class="carousel slide">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li class="item1 active"></li>
    <li class="item2"></li>
    <li class="item3"></li>
  </ul>
  
  <!-- The slideshow -->
  <div id="img">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="t1.jpg" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="t2.jpg" alt="Chicago" width="2200" height="400">
    </div>
    <div class="carousel-item">
      <img src="therapy/t6.jpg" alt="New York" width="2200" height="400">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#myCarousel">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>
</div>

<script>
$(document).ready(function(){
    // Activate Carousel
    $("#myCarousel").carousel();
    
    // Enable Carousel Indicators
    $(".item1").click(function(){
        $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
        $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
        $("#myCarousel").carousel(2);
    });
    
    // Enable Carousel Controls
    $(".carousel-control-prev").click(function(){
        $("#myCarousel").carousel("prev");
    });
    $(".carousel-control-next").click(function(){
        $("#myCarousel").carousel("next");
    });
});
</script>


</body>
</html>
<?php
ob_end_flush();
?>