<?php

session_start();

if(!isset($_SESSION['email']))
header("Location:log.php");
include("database/db_connect.php");
$email = $_SESSION['email'];
$c = $_SESSION['char'];
if($c == "I")
{
$x = "SELECT name,bloodgroup FROM individual WHERE email='$email'";
$row = mysqli_fetch_array(mysqli_query($con,$x));
$y = $row['bloodgroup'];
}
if($c == "O")
{
$x = "SELECT name FROM organ WHERE email='$email'";
$row = mysqli_fetch_array(mysqli_query($con,$x));
$y = "H";
}


mysqli_close($con);

$name = $row['name'];


?>

<!DOCTYPE html>

<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <meta charset="utf-8">
    <title>B Positive</title>
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
        
        .f2
        {
            display: none;
        }
        .f3
        {
            display: none;
        }
        .f4
        {
            display: none;
        }
        .f5
        {
            display: none;
        }
        .f6
        {
            display: none;
        }
        .btnfind
        {
            border-radius: 25px;border:1px solid #fd454e;background-color: #fff;color: #111111;padding:-8px 22px;height: 45px;
        }
        .btnfind:hover
        {
            background-color: #fd454e;color: #fff;
        }
    </style>

</head>

<body id="top">
    <?php include("files/header.php");?>
     <main style="height: 600px;margin-top: 56px;background-color: rgb(240,240,240);">
         <div class="container-fluid main-container">
             <div class="col-md-3 sidebar" style="color: #111111;">
                <div class="profile">
                    <center><?php 
                 
                    if($y == "H"){
                        ?>
                        <img src="images/H.jpg" style="border-radius: 50% 50%;height: 30%;width: 30%">
                        <?php
                    }
                    else{

                    ?>
                    <img src='<?php echo "images/".$y.".jpg" ;?>' style="border-radius: 50% 50%;height: 30%;width: 30%">

                    <?php 
                    } 
                    ?>
                    <h5 style="margin-top: 20px;"><?php echo $name;?></h5>
                    <p><?php echo $email;?></p></center>

                </div>
                 <br>
                 <ul>
                    <?php if($y == "I") { ?>
                    <li><a style="color: #111111;cursor: pointer;" onclick="showform('f1','f2','f3','f4',)">find a donor</a></li>
                     <li><a style="color: #111111;cursor: pointer;" onclick="showform('f2','f1','f3','f4')">find hospitals</a></li>
                     <li><a style="color: #111111;cursor: pointer;" onclick="showform('f3','f1','f2','f4')">find NGO's</a></li>
                     <li><a style="color: #111111;cursor: pointer;" onclick="showform('f4','f1','f2','f3')"><i class="fal fa-arrow-alt-to-right"></i>donate</a></li>
                     
                     <?php 
                      }
                      else{ 
                     ?>
                     <li><a style="color: #111111;cursor: pointer;" onclick="showform('f1','f2','f3','f6')">find a donor</a></li>
                     <li><a style="color: #111111;cursor: pointer;" onclick="showform('f2','f1','f3','f6')">find hospitals</a></li>
                     <li><a style="color: #111111;cursor: pointer;" onclick="showform('f3','f1','f2','f6')">find NGO's</a></li>
                     <li><a style="color: #111111;cursor: pointer;" onclick="showform('f6','f1','f2','f3')"><i class="fal fa-arrow-alt-to-right"></i>Ogranise a event</a></li>
                     
                     <?php } ?>

                 </ul>
             </div>
             <div class="col-md-6 newsfeed" id="newsfeed">
                 <div class="news1">
                     <h5 style="margin-top: 10px;margin-bottom: 0px;">Mumbai: Council issues letter to organise summer blood donation camps</h5>
                     <p style="font-size: 14px;margin-bottom: 10px;">Mar 14, 2018 10:19 am </p>
                     <img src="images/image2.jpg" style="margin-left: 10%;width: 80%;height: 75%;">
                 </div>
                 <div class="news1">
                     <h5 style="margin-top: 10px;margin-bottom: 0px;">Mumbai:Acute blood shortage in Shatabdi Hospital</h5>
                     <p style="font-size: 14px;margin-bottom: 10px;"> Feb 28, 2018, 4:58 am IST </p>
                     <img src="images/image3.jpg" style="margin-left: 10%;width: 80%;height: 80%;">
                 </div>
                 <div class="news1">
                     <h5 style="margin-top: 10px;margin-bottom: 0px;">Mobile Blood donation van to help Thalassaemia kids in Hyderabad</h5>
                     <p style="font-size: 14px;margin-bottom: 10px;">07th March 2018 04:42 AM</p>
                     <img src="images/image4.jpg" style="margin-left: 10%;width: 80%;height: 80%;">
                 </div>
                 <div class="news1">
                     <h5 style="margin-top: 10px;margin-bottom: 0px;">NGO donates solar-powered blood bank to hospital to check maternal mortality</h5>
                     <p style="font-size: 14px;margin-bottom: 10px;">March 2, 2018</p>
                     <img src="images/image5.jpg" style="margin-left: 10%;width: 80%;height: 75%;">
                 </div>
             </div>
             <div class="col-md-3 rightbar">
                 <div class="donor-form-div">
                     <h3 class="f1" style="margin-left: 1%;color: #111111;margin-top: 0px;">Find a donor</h3>
                     <form action="files/donordata.php" method="get" class="form-group donor-form f1">
                         <select class="form-control" id="sel1" name="sel1" required>
                            <option value="">Select State</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Chattisgarh">Chattisgarh</option>
                            <option value="Odisha">Odisha</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="Sikkim">Sikkim</option>
                            <option value="West Bengal">West Bengal</option>
                            <option value="Maharastra">Maharastra</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                          </select>
                          <select class="form-control" id="sel2" name="sel2" required>
                            <option>Select City</option>
                            <option value="Dhanbad">Dhanbad</option>
                            <option value="Ranchi">Ranchi</option>
                            <option value="Jamshedpur">Jamshedpur</option>
                            <option value="Wassepur">Wassepur</option>
                          </select>
                          <select class="form-control" id="sel3" name="sel3" required>
                            <option>Select Locality</option>
                            <option value="Bank More">Bank More</option>
                            <option value="Sarai Dhela">Sarai Delha</option>
                            
                            
                          </select>
                          <select class="form-control" id="sel4" name="sel4" required>
                            <option>Select blood group</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            
                          </select>
                          <center><button class="btnfind" type="submit" name="donorbtn">find</button></center>
                     </form>
                     <h3 class="f2" style="margin-left: 1%;color: #111111;margin-top: 0px;">Find Hospitals</h3>
                     <form action="files/hospitaldata.php" method="get" class="form-group donor-form f2">
                         <select class="form-control" id="sel1" name="sel1" required>
                            <option value="">Select State</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Chattisgarh">Chattisgarh</option>
                            <option value="Odisha">Odisha</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="Sikkim">Sikkim</option>
                            <option value="West Bengal">West Bengal</option>
                            <option value="Maharastra">Maharastra</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                          </select>
                          <select class="form-control" id="sel2" name="sel2" required>
                            <option>Select City</option>
                            <option value="Dhanbad">Dhanbad</option>
                            <option value="Ranchi">Ranchi</option>
                            <option value="Bokaro">Bokaro</option>
                            <option value="Gomoh">Gomoh</option>
                            <option value="Wassepur">Wassepur</option>
                          </select>
                          <select class="form-control" id="sel3" name="sel3">
                            <option>Select Locality</option>
                            <option value="Bank More">Bank More</option>
                            <option value="Sarai Dhela">Sarai Delha</option>
                            
                            
                          </select>
                          <select class="form-control" id="sel4" name="sel4" required>
                            <option>Select blood group</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            
                          </select>
                          <center><button class="btnfind" type="submit" name="donorbtn">find</button></center>
                     </form>
                     <h3 class="f3" style="margin-left: 1%;color: #111111;margin-top: 0px;">Find NGO's</h3>
                     <form action="files/ngodata.php" method="get" class="form-group donor-form f3">
                         <select class="form-control" id="sel1" name="sel1" required>
                            <option value="">Select State</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Chattisgarh">Chattisgarh</option>
                            <option value="Odisha">Odisha</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="Sikkim">Sikkim</option>
                            <option value="West Bengal">West Bengal</option>
                            <option value="Maharastra">Maharastra</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                          </select>
                          <select class="form-control" id="sel2" name="sel2" required>
                            <option>Select City</option>
                            <option value="Dhanbad">Dhanbad</option>
                            <option value="Ranchi">Ranchi</option>
                            <option value="Jamshedpur">Jamshedpur</option>
                            <option value="Wassepur">Wassepur</option>
                          </select>
                          <select class="form-control" id="sel3" name="sel3">
                            <option>Select Locality</option>
                            <option value="Bank More">Bank More</option>
                            <option value="Sarai Dhela">Sarai Delha</option>
                            
                            
                          </select>
                          <select class="form-control" id="sel4" name="sel4" required>
                            <option>Select blood group</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            
                          </select>
                          <center><button class="btnfind" type="submit" name="donorbtn">find</button></center>
                     </form>
                     <h3 class="f4" style="margin-left: 1%;color: #111111;margin-top: 0px;">Donate Now</h3>
                     <form action="files/donaterequest.php" method="get" class="form-group donor-form f4">
                         <select class="form-control" id="sel1" name="sel1" required>
                            <option value="">Your State</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Chattisgarh">Chattisgarh</option>
                            <option value="Odisha">Odisha</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="Sikkim">Sikkim</option>
                            <option value="West Bengal">West Bengal</option>
                            <option value="Maharastra">Maharastra</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                          </select>
                          <select class="form-control" id="sel2" name="sel2" required>
                            <option>Your City</option>
                            <option value="Dhanbad">Dhanbad</option>
                            <option value="Ranchi">Ranchi</option>
                            <option value="Jamshedpur">Jamshedpur</option>
                            <option value="Wassepur">Wassepur</option>
                          </select>
                          <select class="form-control" id="sel3" name="sel3">
                            <option>Your Locality</option>
                            <option value="Bank More">Bank More</option>
                            <option value="Sarai Dhela">Sarai Delha</option>
                            
                            
                          </select>
                          <select class="form-control" id="sel4" name="sel4" required>
                            <option>Your blood group</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            
                          </select>
                          <center><button class="btnfind" type="submit" name="donorbtn">Send</button></center>
                     </form>
                     <h3 class="f5" style="margin-left: 1%;color: #111111;margin-top: 0px;">Donate Now</h3>
                     <form action="files/request.php" method="get" class="form-group donor-form f5">
                         <select class="form-control" id="sel1" name="sel1" required>
                            <option value="">Your State</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Chattisgarh">Chattisgarh</option>
                            <option value="Odisha">Odisha</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="Sikkim">Sikkim</option>
                            <option value="West Bengal">West Bengal</option>
                            <option value="Maharastra">Maharastra</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                          </select>
                          <select class="form-control" id="sel2" name="sel2" required>
                            <option>Your City</option>
                            <option value="Dhanbad">Dhanbad</option>
                            <option value="Ranchi">Ranchi</option>
                            <option value="Jamshedpur">Jamshedpur</option>
                            <option value="Wassepur">Wassepur</option>
                          </select>
                          <select class="form-control" id="sel3" name="sel3" required>
                            <option>Your Locality</option>
                            <option value="Bank More">Bank More</option>
                            <option value="Sarai Dhela">Sarai Delha</option>
                            
                            
                          </select>
                          <select class="form-control" id="sel4" name="sel4" required>
                            <option>Your blood group</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            
                          </select>
                          <center><button class="btnfind" type="submit" name="donorbtn">Request</button></center>
                     </form>
                     <h3 class="f6" style="margin-left: 1%;color: #111111;margin-top: 0px;">Organise a event</h3>
                     <form action="files/organiseevt.php" method="get" class="form-group donor-form f6">
                         <select class="form-control" id="sel1" name="sel1" required>
                            <option value="">State</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Chattisgarh">Chattisgarh</option>
                            <option value="Odisha">Odisha</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="Sikkim">Sikkim</option>
                            <option value="West Bengal">West Bengal</option>
                            <option value="Maharastra">Maharastra</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                          </select>
                          <select class="form-control" id="sel2" name="sel2" required>
                            <option>City</option>
                            <option value="Dhanbad">Dhanbad</option>
                            <option value="Ranchi">Ranchi</option>
                            <option value="Jamshedpur">Jamshedpur</option>
                            <option value="Wassepur">Wassepur</option>
                          </select>
                          <select class="form-control" id="sel3" name="sel3" required>
                            <option>Locality</option>
                            <option value="Bank More">Bank More</option>
                            <option value="Sarai Dhela">Sarai Delha</option>
                            
                            
                          </select>
                          <input style="height: 30px;" type="tel" name="oid" placeholder="Hospital/NGO's ID" required>
                          <center><button class="btnfind" type="submit" name="donorbtn">Organise</button></center>
                     </form>
                     
                     <h3 style="margin-top: 20px;">How it works</h3>
                     <p style="margin-left: -20px;">Contrary to popular belief, B Positive is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>


                 </div>
             </div>
 
         </div>
     </main>
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
        new PerfectScrollbar('#newsfeed');
        function showform(a,b,c,d)
        {
            
            var c1 = document.getElementsByClassName(a)[0];
            var c2 = document.getElementsByClassName(a)[1];
            var c3 = document.getElementsByClassName(b)[0];
            var c4 = document.getElementsByClassName(b)[1];
            var c5 = document.getElementsByClassName(c)[0];
            var c6 = document.getElementsByClassName(c)[1];
            var c7 = document.getElementsByClassName(d)[0];
            var c8 = document.getElementsByClassName(d)[1];

            c1.style.display = "block";
            c2.style.display = "block";
            c3.style.display = "none";
            c4.style.display = "none";
            c5.style.display = "none";
            c6.style.display = "none";
            c7.style.display = "none";
            c8.style.display = "none";
      


        }
    </script>

</body>


</html>