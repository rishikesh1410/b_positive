<?php
	error_reporting(0);
session_start();

include("database/db_connect.php");
      if(isset($_POST['signup'])==1){

        $name = $_POST['name'];
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $weight = $_POST['weight'];
        $mobile = $_POST['mobile'];
        $office = $_POST['office'];
        $locality = mysqli_real_escape_string($con, $_POST['loaclity']);
        $city = mysqli_real_escape_string($con, $_POST['city']);  
        $state = mysqli_real_escape_string($con, $_POST['state']);
        $bloodgroup = mysqli_real_escape_string($con, $_POST['bloodgroup']);        
        $pass = mysqli_real_escape_string($con, $_POST['pass']);
        $re_pass = mysqli_real_escape_string($con, $_POST['re_pass']);
        $email = mysqli_real_escape_string($con, $_POST['email']);

        $q = "SELECT * FROM individual WHERE email = '$email'";
        $p = "SELECT * FROM organ WHERE email = '$email'";        
        if($pass == $re_pass){
          if(mysqli_num_rows(mysqli_query($con, $q)) == 0&&mysqli_num_rows(mysqli_query($con, $p)) == 0){
            $q = "INSERT INTO individual VALUES ('$name', '$username', '$pass', '$bloodgroup', $weight, '$mobile', '$office', '$email','$state','$city','$locality')";
            
            $data = mysqli_query($con, $q);
            if($data){
              header("Location:home.php");
            //  echo "<div class='alert alert-success'>Registration Succesful</div>";
            }
            else{
              echo "<div class='alert alert-danger'>Registration failed due to technical error. Please try again...</div>";
            }
          }
          else{
            echo "<div class='alert alert-danger'>The email address you have entered is already registered</div>";
          }
        }
        else{
          echo "<div class='alert alert-warning'>Passwords don't match. Please try again...</div>";
        }
      }
      if(isset($_POST['Sign_up'])==1){

        $name = $_POST['name'];
        $username = $_POST['username'];
        $id = $_POST['id'];
        $office = $_POST['office'];
        
        $locality = $_POST['loaclity'];
        $city = $_POST['city'];  
        $state = $_POST['state'];        
        $pass = mysqli_real_escape_string($con, $_POST['pass']);
        $re_pass = mysqli_real_escape_string($con, $_POST['re_pass']);
        $email = $_POST['email'];

        $q = "SELECT * FROM organ WHERE email = '$email'";
        
        if($pass == $re_pass){
          if(mysqli_num_rows(mysqli_query($con, $q)) == 0){
            $q = "INSERT INTO organ VALUES ('$name', '$username', '$pass', '$id', '$office', '$email','$state','$city','$locality')";
            
            $data = mysqli_query($con, $q);
            if($data){
              $_SESSION['email'] = $email;
              $_SESSION['char'] = "O";
              header("Location: home.php");
             // echo "<div class='alert alert-success'>Organization Registration Succesful</div>";
            }
            else{
              echo "<div class='alert alert-danger'>Registration failed due to technical error. Please try again...</div>";
            }
          }
          else{
            echo "<div class='alert alert-danger'>The email address you have entered is already registered</div>";
          }
        }
        else{
          echo "<div class='alert alert-warning'>Passwords don't match. Please try again...</div>";
        }
      }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.css">
 

    
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/perfect-scrollbar.css">
    <link rel="stylesheet" type="text/css" href="css/master.css">
<link rel="shortcut icon" href="images/logoblood2.png" type="image/x-icon">
    <link rel="icon" href="images/logoblood2.png" type="image/x-icon">

    
    
      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <style type="text/css">
    .card{
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 40%;
}
.btnfind:hover
{
    background-color: #fd454e;color: #fff;
}
.selected
{
  font-size: 20px;
}

  </style>
  </head>
  <body style="background-image: url(p.jpg);background-size: 100% ">
    
  <header class="s-header" style="font-size: 17px;">

        <div class="header-logo">
            <a class="site-logo" href="index.html" style="text-decoration: none;">
                <p style="color: white;font-size: 30px;margin-top: 30px;">B Positive</p>
            </a>
        </div>
        <ul class="header-top-nav">
            <li><a href="index.php"><i class="fas fa-home"></i></a></li>
            <li><a href="p-2.php"><i class="fas fa-user"></i></a></li>
            <li><a href="notifications.php"><i class="fas fa-bell"></i></a></li>
           
        </ul>
        
        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content">
                <h3></h3>
                
                <ul class="header-nav__list">
                    <li class="current"><a href="index.php" title="home" style="color: #00BFFF;">Home</a></li>
                    <li><a href="index.php?#about" title="about" style="color: #00BFFF;">About</a></li>
                    <li><a  href="signup1.php" title="works" style="color: #00BFFF;">Register</a></li>
                    <li><a   href="log.php" title="clients" style="color: #00BFFF;">Login</a></li>
                    <li><a  href="index.php?#conatct" title="contact" style="color: #00BFFF;">Contact</a></li>
                </ul>
    
              
    
                <ul class="header-nav__social">
                   <!-- <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                    -->
                </ul>

            </div> 

        </nav>  

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-text" style="color: #111111;"></span>
            <span class="header-menu-icon"></span>
        </a>

    </header> 



    <div class="container" id="page">
      <div class="row">
        <div class="col-3" id="info">
        </div>
        <div class="col-6 card" id="mainPage" style="padding: 0px;">
          <br>
          <center style="background-color: lightgray;color: black;"><a class="btn selected" id="signUpBtn" style="background-color: lightgray;border:none;padding: 25px;margin-bottom: 0px;height: 100%;width: 260px;"><h3>Individual</h3></a>
          <a class="btn" id="OrganizationBtn"  style="background-color: lightgray;border:none;padding: 25px;margin-bottom:0px;height: 100%;width: 260px;"><h3>Organization</h3></a></center>
          <div class="container" id="signUpPage" style="padding: 50px;padding-top: 10px;margin-bottom: 0px;">

	
			<form class="form-group" method="post" action="">
                <!--<label>First Name</label>-->
                <input type="text" name="name" placeholder="Name" class="form-control "><br>
                <!--<label>Last Name</label>-->
                
                <!--<label>Username</label>-->
                <input type="text" name="username" placeholder="username" class="form-control"><br>
                <!--<label>E-mail</label><br>-->
				<input type="text" name="email" placeholder="E-mail" class="form-control"><br>
				<!--<label>New Password</label><br>-->
				<input type="password" name="pass" placeholder="Password" class="form-control"><br>
				<!--<label>Confirm Password</label><br>-->
				<input type="password" name="re_pass" placeholder="Confirm Password" class="form-control"><br>
        <input type="text" name="mobile" placeholder="Mobile Number" class="form-control"><br>
        <input type="text" name="office" placeholder="Office Number" class="form-control"><br>
        <input type="text" name="weight" placeholder="Weight" class="form-control"><br>
        <input type="text" name="state" placeholder="State" class="form-control"><br>
        <input type="text" name="city" placeholder="City" class="form-control"><br>
        <input type="text" name="locality" placeholder="Locality" class="form-control"><br>
        <select name="bloodgroup" class="form-control col-5 name" style="font-size: 17px;height: 35px;">
          <option value="Select">--Blood Group--</option>
          <option value="A+">A Positive</option>
          <option value="A-">A Negative</option>
          <option value="B+">B Positive</option>
          <option value="B-">B Negative</option>
          <option value="AB+">AB Positive</option>
          <option value="AB-">AB Negative</option>
          <option value="O+">O Positive</option>
          <option value="O-">O Negative</option>
        </select><br><br>
        <p style="font-size: 17px;">Already a member ? <a href="log.php" style="color: green;">Login</a></p>
				<center><input type="submit" name="signup" value="Sign Up" class="btnfind" style="border-radius: 25px;border:1px solid #fd454e;background-color: #fff;color: #111111;padding:0px 22px;height: 45px;"/></center><br>
			</form>
        	</div>
        	<div class="container" id="OrganizationPage" style="padding: 50px;padding-top: 10px;margin-bottom: 0px;">


    			<form class="form-group" method="post" action="">
            <input type="text" name="name" placeholder="Name" class="form-control"><br>
            <input type="text" name="username" placeholder="Username" class="form-control"><br>
                <!--<label>E-mail</label><br>-->
        <input type="email" name="email" placeholder="E-mail" class="form-control"><br>
        <input type="text" name="id" placeholder="Hospital / NGO ID" class="form-control"><br>
        <!--<label>New Password</label><br>-->
        <input type="password" name="pass" placeholder="Password" class="form-control"><br>
        <!--<label>Confirm Password</label><br>-->
        <input type="password" name="re_pass" placeholder="Confirm Password" class="form-control"><br>
        <input type="text" name="office" placeholder="Office Number" class="form-control"><br>
        <input type="text" name="state" placeholder="State" class="form-control"><br>
        <input type="text" name="city" placeholder="City" class="form-control"><br>
        <input type="text" name="locality" placeholder="Locality" class="form-control"><br>
<p style="font-size: 17px;">Already a member ? <a href="log.php" style="color: green;">Login</a></p>
    				<center><input type="submit" name="Sign_up" value="Sign Up" class="btnfind" style="border-radius: 25px;border:1px solid #fd454e;background-color: #fff;color: #111111;padding:0px 22px;height: 45px;"></center><br>
    			</form>
     </div>
      </div>
    </div>
    </div>
    <div id="preloader">
        <div id="loader">
            <div class="line-scale-pulse-out">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    
    <script src="js/jquery-3.2.1.min.js"></script>
  
    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/perfect-scrollbar.js"></script>
    <script type="text/javascript">
    var signUpPage =$('#signUpPage');
    var OrganizationPage = $('#OrganizationPage');
    var OrganizationBtn =$('#OrganizationBtn');
    var signUpBtn =$('#signUpBtn');
      $('#OrganizationBtn').click(function() {
      OrganizationPage.show('slow');
      signUpPage.hide('slow');
      OrganizationBtn.addClass('selected');
      signUpBtn.removeClass("selected");
    }) ;
    $('#signUpBtn').click(function() {
     signUpPage.show('slow');
     OrganizationPage.hide();
     signUpBtn.addClass('selected');
     OrganizationBtn.removeClass("selected");
    })
    $("#signUpBtn").click();
    </script>
  </body>
</html>
