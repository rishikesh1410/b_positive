<?php


$state = $_GET['sel1'];
$city = $_GET['sel2'];
$local = $_GET['sel3'];
$bgroup = $_GET['sel4'];

include("../database/db_connect.php");

$x = "SELECT name,mobile,locality FROM individual WHERE state='$state' AND city='$city' AND bloodgroup='$bgroup'";

$query = mysqli_query($con,$x);

$num = mysqli_num_rows($query);



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


    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fontawesome.css">
    <link rel="stylesheet" href="../css/solid.css">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/vendor.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" type="text/css" href="../css/perfect-scrollbar.css">
    

    
    <script src="../js/modernizr.js"></script>
    <script src="../js/pace.min.js"></script>


<link rel="shortcut icon" href="../images/logoblood2.png" type="image/x-icon">
    <link rel="icon" href="../images/logoblood2.png" type="image/x-icon">

</head>

<body id="top">
    <?php include("header.php");?>
     <main style="height:<?php echo ($num*70)?>px;margin-top: 56px;background-color: rgb(240,240,240);">
        <div class="container-fluid">
        	<div class="col-md-8">
        		<table class="table data-table">
        			<thead class="blue-grey lighten-4">
        			<tr>
        				<th>Name</th>
        				<th>Mobile Number</th>
        				<th>Locality</th>
        			</tr>
        			</thead>
        			<tbody>
        			<?php
                    for($i=0;$i<$num;$i++)
                    {
                    	$data = mysqli_fetch_array($query);
                      ?>
                      <tr>
                      	<td><?php echo $data['name'] ;?></td>
                      	<td><?php echo $data['mobile'] ;?></td>
                      	<td><?php echo $data['locality'] ;?></td>
                      </tr>
                      <?php
                    }
        			?>
        			</tbody>
        		</table>
        	</div>
        	<div class="col-md-4">
        		
        	</div>
        </div>
     </main>
    <?php include("footer.php");?>
    <script data-cfasync="false" src="../../cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js"></script><script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/plugins.js"></script>
    <script src="../js/main.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/perfect-scrollbar.js"></script>
    <script type="text/javascript">
        new PerfectScrollbar('#newsfeed');
    </script>

</body>


</html>