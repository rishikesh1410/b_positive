<?php
session_start();


$state = $_GET['state'];
if($state == "jh")
{
   $arr = '["dhanbad","ranchi","jamshedpur"]';
   return $arr;
}
else
if($state == "ch")
{
   $arr = '["raipur","raigarh","jagdalpur"]';
   return $arr;
}
else
if($state == "o")
{
   $arr = '["cuttack","puri","bhubaneshwar","bhadrakh"]';
   return $arr;
}
else
	if($state == "b")
{
   $arr = '["patna","gaya","nalanda"]';
   return $arr;
}
else
	if($state == "m")
{
    $arr = '["mumbai","nagpur","nasik","amravati"]';
    return $arr;
}
else
	if($state == "am")
{
   $arr = '["guwahati","dispur","tezpur"]';
   return $arr;
}
else
	if($state == "mp")
{
   $arr = '["indore","bhopal","gwalior","dhar"]';
   return $arr;
}
else
	if($state == "wb")
{
   $arr = '["kolkata","siliguri","darjeeling"]';
   return $arr;
}
else
	if($state == "up")
{
    $arr = '["lucknow","agra","allahabad"]';
    return $arr;
}
else
	if($state == "ap")
{
   $arr = '["tirupati","vijaywada","hyderabad"]';
   return $arr;
}
else
	if($state == "s")
{
   $arr = '["gangtok","namchi","pelling"]';
   return $arr;
}

?>