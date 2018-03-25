<?php

session_start();

include("../database/db_connect.php");

$state = $_GET['sel1'];
$city = $_GET['sel2'];
$local = $_GET['sel3'];
$bgroup = $_GET['sel4'];
$email = $_SESSION['email'];

$x = "INSERT INTO donatereq VALUES('$email','$state','$city','$local','$bgroup')";
$query = mysqli_query($con,$x);

$_SESSION['message'] = "Your request has been send to all NGO's"."<br>"."You will be notify when any blood donation camp organize in your area";

header("Location:../p-2.php");

?>