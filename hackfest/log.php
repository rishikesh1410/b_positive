<?php
session_start();


	include("database/db_connect.php");
  if(isset($_POST['login'])==1){
      $pass = $_POST['pass'];
      $email = $_POST['email'];

      $query = mysqli_query($con,"SELECT password FROM individual WHERE email='$email' AND password='$pass'");
      $num = mysqli_num_rows($query);
      if($num>=1)
      {
        $_SESSION['email'] = $email;
        $_SESSION['char'] = "I";
        header("Location:home.php");
      }
      else
      {
        $query = mysqli_query($con,"SELECT id,password FROM organ WHERE email='$email' AND password='$pass'");
 
      $num = mysqli_num_rows($query);
      $row = mysqli_fetch_array($query);
      if($num>=1)
      {
      $_SESSION['email'] = $email;
       $_SESSION['char'] = "O";
       $_SESSION['oid'] = $row['id'];
        header("Location:home.php");
        
      }
      else
          echo "<div class='alert alert-danger'>Invalid Email or Password</div>";
    }
  }

?>
<!DOCTYPE html>

<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <meta charset="utf-8">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/solid.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/perfect-scrollbar.css">
    


    
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    
    <link rel="shortcut icon" href="images/logoblood2.png" type="image/x-icon">
    <link rel="icon" href="images/logoblood2.png" type="image/x-icon">
    <style type="text/css">
    #submitbtn
    {
    border-radius: 25px;color: black;background-color:   #fff;border : 1px solid #fd454e;padding: 4px 40px;
  }
      #submitbtn:hover
      {
         background-color: #fd454e;
         color: white;
      }
      .card{
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 40%;
}
    </style>
    

</head>

<body id="top">
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index.html" style="text-decoration: none;">
                <h2 style="color: white;">B Positive</h2>
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
                    <li><a  href="log.php" title="clients" style="color: #00BFFF;">Login</a></li>
                    <li><a href="index.php?#contact" title="contact" style="color: #00BFFF;">Contact</a></li>
                </ul>
    
                <p>Perspiciatis hic praesentium nesciunt. Et neque a dolorum <a href='#0'>voluptatem</a> porro iusto sequi veritatis libero enim. Iusto id suscipit veritatis neque reprehenderit.</p>
    
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
      <div class="row" style="margin-top: 100px;margin-bottom: 100px;">
        <div class="col-3" id="info">
        </div>
        <div class="col-6 card" id="mainPage" align="center" >
          
          <h3 style="margin-top: 20px;color: #fd454e;">Login</h3>
          
        	<div class="container" id="logInPage" style="">
    			<form class="form-group" method="post" action="log.php">
    				<!--<label>E-mail</label>-->
    				<input type="text" name="email" placeholder="E-mail" class="form-control"><br>
    				<!--<label>Password</label>-->
    				<input type="password" name="pass" placeholder="Password" class="form-control"><br>
    				<input type="submit" id="submitbtn" name="login" value="Login" class="btn btn-success"><br>
    			</form>
          
          <p style="color: black;">Not a member ? <a href="signup1.php" style="color: green;">Sign up</a></p>
     </div>
      </div>
    </div>
    </div>
    <?php include("files/footer.php");?>
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
    <script data-cfasync="false" src="../../cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/perfect-scrollbar.js"></script>
    <script type="text/javascript">
    var signUpPage =$('#signUpPage');
    var logInPage = $('#logInPage');
    var loginBtn =$('#loginBtn');
    var signUpBtn =$('#signUpBtn');
      $('#loginBtn').click(function() {
      logInPage.show('slow');
      signUpPage.hide('slow');
      loginBtn.addClass('selected');
      signUpBtn.removeClass("selected");
    }) ;
    $('#signUpBtn').click(function() {
     signUpPage.show('slow');
     logInPage.hide();
     signUpBtn.addClass('selected');
     loginBtn.removeClass("selected");
    })
    $("#signUpBtn").click();
    </script>
  </body>
</html>
