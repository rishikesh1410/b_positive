<?php

session_start();

include("../database/db_connect.php");

$state = $_GET['sel1'];
$city = $_GET['sel2'];
$local = $_GET['sel3'];
$oid = $_GET['oid'];
$email = $_SESSION['email'];

$x = "SELECT id FROM organ WHERE email='$email'";
$query = mysqli_query($con,$x);
$row = mysqli_fetch_array($query);
if($oid == $row['id'])
{
$_SESSION['message'] = "Notifications are send to all nearby donors";
header("Location:../p-2.php");
}
else
{
	echo "Enter ID is not valid";
}
?>