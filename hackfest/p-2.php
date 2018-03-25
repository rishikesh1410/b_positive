<?php
session_start();
if(!isset($_SESSION['email']))
header("Location:log.php");
include("database/db_connect.php");
$message = $_SESSION['message'];
$y = $_SESSION['char'];

$p1 = "";$p2 = "";$p3 = "";$p4 = "";$p5 = "";$p6 = "";$p7 = "";$p8 = "";
if($y == "O")
{
if(isset($_POST['bloodupdate']))
{
    $a1 = $_POST['A+'];
    $a2 = $_POST['A-'];
    $a3 = $_POST['B+'];
    $a4 = $_POST['B-'];
    $a5 = $_POST['AB+'];
    $a6 = $_POST['AB-'];
    $a7 = $_POST['O+'];
    $a8 = $_POST['O-'];
    $x = "UPDATE `blood` SET `id`=".$_SESSION['oid'].",`A+`=$a1,`A-`=$a2,`B+`=$a3,`B-`=$a4,`O+`=$a5,`O-`=$a6,`AB+`=[$a7,`AB-`=$a8 WHERE id=".$_SESSION['oid'];


    $query = mysqli_query($con,$x);
}

$sql_1 = "SELECT * FROM blood where id=".$_SESSION['oid'];
$result_1 = mysqli_query($con, $sql_1);
$row_1 = mysqli_fetch_array($result_1);
if($result_1)
{
$sql_2 = "SELECT * FROM used where email=".$_SESSION['oid'];
$result_2 = mysqli_query($con, $sql_2);
$row_2 = mysqli_fetch_array($result_2);
}
if($row_1["A+"]<($row_2["A+"])/2){
    $p1 = "A+";
    
} 
if($row_1["A-"]<($row_2["A-"])/2){
    $p2 = "A-";
    
} 
if($row_1["B+"]<($row_2["B+"])/2){
    $p3 = "B+";
    
} 
if($row_1["B-"]<($row_2["B-"])/2){
    $p4 = "B-";
    
} 
if($row_1["AB+"]<($row_2["AB+"])/2){
    $p5= "AB+";
    
} 
if($row_1["AB-"]<($row_2["AB-"])/2){
    $p6 = "AB-";
    
} 
if($row_1["O+"]<($row_2["O+"])/2){
    $p7 = "O+";
    
} 
if($row_1["O-"]<($row_2["O-"])/2){
    $p8 = "O-";
    
}  
}  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">

    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Julius+Sans+One" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Your custom styles (optional) -->
    
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
  <link href="css/s.css" rel="stylesheet">
<link rel="shortcut icon" href="images/logoblood2.png" type="image/x-icon">
    <link rel="icon" href="images/logoblood2.png" type="image/x-icon">
    
<style type="text/css">
    	.select
    	{
    		border-left: 3px solid #00BFFF;
    	}
    	.nav-item:hover
    	{
    		border-left: 3px solid #00BFFF;
    	}
        .btnfind
        {
            border-radius: 25px;border:1px solid #fd454e;background-color: #fff;color: #111111;padding:0px 22px;height: 45px;
            height: 45px;
        }
        .btnfind:hover
        {
            background-color: #fd454e;color: #fff;
        }
    </style>
</head>

<body onload="myfunc()" id="body">

  <?php include("files/header.php");?>
    <main id="main" class="mainprofile">
    <div class="profile" style="margin-top: 100px;height: 100%;">

    	<center style="height: 100%;">
    		<h3>PROFILE</h3>   
    		<?php
    							
    			$email= $_SESSION['email'];
    			$query= mysqli_query($con,"SELECT bloodgroup FROM individual WHERE email = '$email'")or die(mysqli_error());
				$arr = mysqli_fetch_array($query);
    	    ?>
    	    <?php if($arr['bloodgroup']=='A-'){ ?>
    		<img src="images/A-.jpg" style="height: 80px;width: 80px;border-radius: 50% 50%;"><br><br>
    		<?php } if($arr['bloodgroup']=='A+'){ ?>
    		<img src="images/A+.jpg" style="height: 80px;width: 80px;border-radius: 50% 50%;"><br><br>
    		<?php } if($arr['bloodgroup']=='B+'){ ?>
    		<img src="images/B+.jpg" style="height: 80px;width: 80px;border-radius: 50% 50%;"><br><br>
    		<?php } if($arr['bloodgroup']=='B-'){ ?>
    		<img src="images/B-.jpg" style="height: 80px;width: 80px;border-radius: 50% 50%;"><br><br>
    		<?php } if($arr['bloodgroup']=='AB+'){ ?>
    		<img src="images/AB+.jpg" style="height: 80px;width: 80px;border-radius: 50% 50%;"><br><br>
    		<?php } if($arr['bloodgroup']=='AB-'){ ?>
    		<img src="images/AB-.jpg" style="height: 80px;width: 80px;border-radius: 50% 50%;"><br><br>
    		<?php } if($arr['bloodgroup']=='O+'){ ?>
    		<img src="images/O+.jpg" style="height: 80px;width: 80px;border-radius: 50% 50%;"><br><br>
    		<?php } if($arr['bloodgroup']=='O-'){ ?>
    		<img src="images/O-.jpg" style="height: 80px;width: 80px;border-radius: 50% 50%;"><br><br>
    		<?php } if($y == "O") {?>
    		 <img src="images/H.jpg" style="height: 80px;width: 80px;border-radius: 50% 50%;"><br><br>
             <?php } ?>
				    
				</ul>
                <?php echo $email;?>
                <hr style="margin: 0px;">
				<!-- Tab panels -->
				<div class="tab-content" style="height: 100%;">

				    <!--Panel 1-->
							<div class="row" style="width: 80%;">
							    <div class="col-md-3">
							        <ul class="nav  md-pills pills-primary flex-column tab-list" role="tablist">
							            <li class="nav-item select">
							                <a class="nav-link active a-link" data-toggle="tab" href="#panel11" role="tab">Edit profile
							                
							                </a>
							            </li>
							            
							            <li class="nav-item">
							                <a class="nav-link a-link" data-toggle="tab" href="#panel13" role="tab">Change password
							                
							                </a>
							            </li>
                                        <?php if($y == "O"){?>
                                        <li class="nav-item">
                                            <a class="nav-link a-link" data-toggle="tab" href="#panel14" role="tab">Blood Details
                                            
                                            </a>
                                        </li>
                                        <?php } ?>
							        </ul>
							    </div>
							    <?php
    							
    								$email= $_SESSION['email'];
    								//echo $email;
                                    if($y == "I")
                                    {
    								$query= mysqli_query($con,"SELECT name,mobile FROM individual WHERE email = '$email'")or die(mysqli_error());
									$arr = mysqli_fetch_array($query);
                                    }
                                    else
                                    {
                                     $query= mysqli_query($con,"SELECT id,name,office FROM organ WHERE email = '$email'")or die(mysqli_error());
                                    $arr = mysqli_fetch_array($query);
                                    }
									
    							?>
							    <div class="col-md-9" style="background-color: white;">
							        <!-- Tab panels -->
							        <div class="tab-content vertical">
							        <!--Panel 1-->
							        <div class="tab-pane fade in show active" id="panel11" role="tabpanel">

							            <h5 class="sub-heading" style="color: black;" class="my-2 h5">EDIT PROFILE</h5>
							            <br>
							            <div class="md-form">
							            	<label style="font-size: 15px;" for="form2" class="heading" >Name</label>
										    <input type="text" id="form3" class="form-control" style="width: 50%;height: 12px;" value="<?php echo $arr['name'];?>">
										    
										</div>
                                        <br>
										<div class="md-form">
											<label style="font-size: 15px;" for="form1" class="heading" >Email</label>
										    <input type="text" id="form1" class="form-control" style="width: 50%;height: 12px;" value="<?php echo $email;?>">
										    
										  
										</div>
                                        <br>
										<div class="md-form">
                                            <?php if($y == 'I'){?>
											<label style="font-size: 15px;" for="form2" class="heading" >Mobile Number</label>
                                            <?php }
                                            else{?>
                                            <label style="font-size: 15px;" for="form2" class="heading" >Office Number</label>
                                            <?php } ?>
										    <input type="text" id="form2" class="form-control" style="width: 50%;height: 12px;" value="<?php 
                                            if($y == 'I')
                                            echo $arr['mobile'];
                                            else
                                              echo $arr['office'];  
                                        ?>">
										    
										</div>
                                        <div class="md-form">
                                            <button class="btnfind" style="color: black;">Update</button>
                                            
                                        </div>



							        </div>
							        <!--/.Panel 1-->

							        <!--Panel 2-->

							         <!--/.Panel 2-->
							        <!--Panel 3-->
							        <div class="tab-pane fade" id="panel13" role="tabpanel">

							            <h5 class="sub-heading" style="color: black;" class="my-2 h5">CHANGE PASSWORD</h5>
							            <br>
										<div class="md-form">
											<label style="font-size: 15px;" for="form7" class="heading" >Current password</label>
										    <input type="password" id="form7" class="form-control" style="width: 50%;height: 12px;">
										    
										</div>
                                        <br>
										<div class="md-form">
											<label style="font-size: 15px;" for="form8" class="heading" >New password</label>
										    <input type="password" id="form8" class="form-control" style="width: 50%;height: 12px;">
										    
										</div>
                                        <br>
										<div class="md-form">
											<label style="font-size: 15px;" for="form9" class="heading" >Confirm password</label>
										    <input type="password" id="form9" class="form-control" style="width: 50%;height: 12px;">
										    
										</div>
                                        <div class="md-form">
                                            <button class="btnfind" style="color: black;">Change</button>
                                            
                                        </div>
										

							        </div>
							        <!--/.Panel 3-->
                                    <?php if($y == "O"){

                                    $x = "SELECT * FROM blood WHERE id=".$arr['id'];
                                    $row = mysqli_fetch_array(mysqli_query($con,$x));
                                    $_SESSION['oid']=$arr['id'];
                                        ?>
                                     <!--Panel 3-->
                                    <div class="tab-pane fade" id="panel14" role="tabpanel">

                                        <h5 class="sub-heading" style="color: black;" class="my-2 h5">BLOOD DETAILS</h5>
                                        <br>
                                        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="md-form">
                                            <label style="font-size: 15px;" for="form7" class="heading" >A+&nbsp;&nbsp;<?php if($p1 == "A+") {echo "  ( More required )";} ?></label>
                                            <input name="A+" type="text" id="form7" class="form-control" style="width: 50%;height: 12px;" value="<?php echo $row['A+']?>">
                                            
                                        </div>
                                        <br>
                                        <div class="md-form">
                                            <label style="font-size: 15px;" for="form8" class="heading" >A-&nbsp;&nbsp;<?php if($p2== "A-") {echo "  ( More required )";} ?></label>
                                            <input name="A-" type="text" id="form8" class="form-control" style="width: 50%;height: 12px;" value="<?php echo $row['A-']?>">
                                            
                                        </div>
                                        <br>
                                        <div class="md-form">
                                            <label style="font-size: 15px;" for="form9" class="heading" >B+&nbsp;&nbsp;<?php if($p3 == "B+") {echo "  ( More required )";} ?></label>
                                            <input name="B+" type="text" id="form9" class="form-control" style="width: 50%;height: 12px;" value="<?php echo $row['B+']?>">
                                            
                                        </div>
                                        <br>
                                        <div class="md-form">
                                            <label style="font-size: 15px;" for="form9" class="heading" >B-&nbsp;&nbsp;<?php if($p4 == "B-") {echo "  ( More required )";} ?></label>
                                            <input name="B-" type="text" id="form9" class="form-control" style="width: 50%;height: 12px;" value="<?php echo $row['B-']?>">
                                            
                                        </div>
                                        <br>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <label style="font-size: 15px;" for="form9" class="heading" >AB+&nbsp;&nbsp;<?php if($p5 == "AB+") {echo "  ( More required )";} ?></label>
                                            <input name="AB+" type="text" id="form9" class="form-control" style="width: 50%;height: 12px;" value="<?php echo $row['AB+']?>">
                                            
                                        </div>
                                        <br>
                                        <div class="md-form">
                                            <label style="font-size: 15px;" for="form9" class="heading" >AB-&nbsp;&nbsp;<?php if($p6 == "AB-") {echo "  ( More required )";} ?></label>
                                            <input name="AB-" type="text" id="form9" class="form-control" style="width: 50%;height: 12px;" value="<?php echo $row['AB-']?>">
                                            
                                        </div>
                                        <br>
                                        <div class="md-form">
                                            <label style="font-size: 15px;" for="form9" class="heading" >O+&nbsp;&nbsp;<?php if($p7 == "O+") {echo "  ( More required )";} ?></label>
                                            <input name="O+" type="text" id="form9" class="form-control" style="width: 50%;height: 12px;" value="<?php echo $row['O+']?>">
                                            
                                        </div>
                                        <br>
                                        <div class="md-form">
                                            <label style="font-size: 15px;" for="form9" class="heading" >O-&nbsp;&nbsp;<?php if($p8 == "O-") {echo "  ( More required )";} ?></label>
                                            <input name="O-" type="text" id="form9" class="form-control" style="width: 50%;height: 12px;" value="<?php echo $row['O-']?>">
                                            
                                        </div>
                                        <br>
                                        
                                    </div>
                                    <div class="md-form">
                                            <button name="bloodupdate" class="btnfind" style="color: black;">Update</button>
                                            
                                        </div>
                                </div>
                            </form>


                                        

                                    </div>
                                    <?php } ?>
                                    <!--/.Panel 3-->
							        </div>
							    </div>
							</div>
							<!-- Nav tabs -->
				   
				    

				</div>
    	</center>
    </div>

    </main>
    <br><br><br><br><br><br>
    <?php include("files/footer.php");?>
    
          
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript">
    	window.onload = function(){
    	var li1 = document.getElementsByClassName('nav-item')[0];
    	var li2 = document.getElementsByClassName('nav-item')[1];
        var li3 = document.getElementsByClassName('nav-item')[2];
    	li1.onclick = function(){
    		li1.classList.add("select");
    		li2.classList.remove("select");
            li3.classList.remove("select");
    	};
    	li2.onclick = function(){
    		li2.classList.add("select");
    		li1.classList.remove("select");
            li3.classList.remove("select");
    	};
        li3.onclick = function(){
            li3.classList.add("select");
            li1.classList.remove("select");
            li2.classList.remove("select");
        };
    };
    </script>
    <!-- Insert to your webpage before the </head> -->
    <!-- Insert to your webpage before the </head> -->

    </script>

</body>

</html>
