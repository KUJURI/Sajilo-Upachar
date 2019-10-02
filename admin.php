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
    $url="adminpage.php?username=".$uname;
    $sql="select * from admin where email='".$uname."'AND password='".$password."' limit 10";
    
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

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
       Admin Login
    </title>

    <!-- Bootstrap Core CSS -->
    <link href="adminjs/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="adminjs/form2.css" rel="stylesheet">
    <link href="adminjs/one-page-wonder.css" rel="stylesheet">

    <script>
        $(document).ready(function () {
            // DOM ready

            // Test data
            /*
             * To test the script you should discomment the function
             * testLocalStorageData and refresh the page. The function
             * will load some test data and the loadProfile
             * will do the changes in the UI
             */
            // testLocalStorageData();
            // Load profile if it exits
            loadProfile();
        });

        /**
         * Function that gets the data of the profile in case
         * thar it has already saved in localstorage. Only the
         * UI will be update in case that all data is available
         *
         * A not existing key in localstorage return null
         *
         */
        function getLocalProfile(callback) {
            var profileImgSrc = localStorage.getItem("PROFILE_IMG_SRC");
            var profileName = localStorage.getItem("PROFILE_NAME");
            var profileReAuthEmail = localStorage.getItem("PROFILE_REAUTH_EMAIL");

            if (profileName !== null && profileReAuthEmail !== null && profileImgSrc !== null) {
                callback(profileImgSrc, profileName, profileReAuthEmail);
            }
        }

        /**
         * Main function that load the profile if exists
         * in localstorage
         */
        function loadProfile() {
            if (!supportsHTML5Storage()) {
                return false;
            }
            // we have to provide to the callback the basic
            // information to set the profile
            getLocalProfile(function (profileImgSrc, profileName, profileReAuthEmail) {
                //changes in the UI
                $("#profile-img").attr("src", profileImgSrc);
                $("#profile-name").html(profileName);
                $("#reauth-email").html(profileReAuthEmail);
                $("#inputEmail").hide();
                $("#remember").hide();
            });
        }

        /**
         * function that checks if the browser supports HTML5
         * local storage
         *
         * @returns {boolean}
         */
        function supportsHTML5Storage() {
            try {
                return 'localStorage' in window && window['localStorage'] !== null;
            } catch (e) {
                return false;
            }
        }

        /**
         * Test data. This data will be safe by the web app
         * in the first successful login of a auth user.
         * To Test the scripts, delete the localstorage data
         * and comment this call.
         *
         * @returns {boolean}
         */
        function testLocalStorageData() {
            if (!supportsHTML5Storage()) {
                return false;
            }
            localStorage.setItem("PROFILE_IMG_SRC", "//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120");
            localStorage.setItem("PROFILE_NAME", "César Izquierdo Tello");
            localStorage.setItem("PROFILE_REAUTH_EMAIL", "oneaccount@gmail.com");
        }
    </script>


</head>

<body>

    <!-- Navigation -->
    <!--<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
           <!-- <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">
              <center><h1>Admin Login Page</h1></center>
            </span>
                    <span class="icon-bar">
            </span>
                    <span class="icon-bar">
            </span>
                    <span class="icon-bar">
            </span>
                </button>
				
                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- /.navbar-collapse -->
        <!--</div>
        <!-- /.container -->
   <!-- </nav> -->

    <!-- Full Width Image Header -->


    <!-- Page Content -->
    <div class="container">

        <center><h1>&nbsp !!!Admin Login Page!!!</h1></center>

        <!-- First Featurette -->
        <div class="featurette" id="about">
            <!------------------------code---------------start---------------->
            <div class="container">
                <div class="card card-container">
                    <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
                    <img id="profile-img" class="profile-img-card" src="adminjs/adminlogo.png" />
                    <p id="profile-name" class="profile-name-card"></p>
                    <form class="form-signin" action="#" method="POST">
                        <span id="reauth-email" class="reauth-email"></span>
                        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
                        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                        
                        <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="submit">Sign in</button>
                    </form>
                    <!-- /form -->
                    
                </div>
                <!-- /card-container -->
            </div>
            <!-- /container -->
            <!----Code------end----------------------------------->
        </div>
        <!-- /.container -->

        <!-- jQuery -->
        <script src="adminjs/jquery.js">
        </script>

        <!-- Bootstrap Core JavaScript -->
        <script src="adminjs/bootstrap.js">
        </script>

</body>

</html>