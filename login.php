<?php 
 
$host="localhost";
$user="root";
$password="";
$db="registration";
 
$c=mysqli_connect($host,$user,$password);
mysqli_select_db($c,$db);

 
if(isset($_POST['email'])){
    
    $uname=$_POST['email'];
    $password=$_POST['password'];
    $url="nav.php?username=".$uname;
    $sql="select * from client where email='".$uname."'AND password='".$password."' limit 10";
    
    $result=mysqli_query($c,$sql);
    
    if(mysqli_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        //echo "<a href = 'navi.php'>Go to navigation</a>";
        header('location:'.$url);
        exit();
    }
    else{
        echo "Incorrect name or password";
        exit();
    }
        
}
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>login page</title>
	<link rel="stylesheet" href="user.css">
</head>
<body>
	<div class="box">
		<h2>Login</h2>
        <form action = "#" method = "post">
                <div class="inputbox">

                    <input type="text" name="email" required="">
                    <label>Email ID</label>
                </div>
                <div class="inputbox">
                    
                    <input type="password" name="password" required="">
                    <label>Password</label>
                </div>
                <input type="submit" name="Submit" value="Submit">
                
        </form>
         <label>Don't have an account?</label>
        <a href="register.php">Register Now</a>
        </div>
</body>
</html>