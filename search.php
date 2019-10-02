


<html>
<head>
	<title> search item</title>
</head>
<body>

<?php
$host="localhost";
$user="root";
$password="";
$db="registration";
 
$c=mysqli_connect($host,$user,$password);
mysqli_select_db($c,$db);
		$search = mysqli_real_escape_string($c, trim($_POST['searchterm']));
	$sql="SELECT * FROM `therapycenter` WHERE `name` LIKE'%$search%'";
	$find_therapy = mysqli_query($c, $sql);
    
	while($row = mysqli_fetch_assoc($find_therapy))
	{
		$name = $row['name'];
		$Address = $row['Address'];
		$link=$row['link'];
		//header("loaction:'$link'");
		echo "<a href='$link'>$name</a><br />";
	}
	?>
</body>
</html>


