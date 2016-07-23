<?php
require 'connect.php';
ini_set('max_execution_time', 500);

echo "tracking the location"."<br>";
session_start();
$jsonData=file_get_contents("http://cubito.co.in/assignment/gpslocation.php",NULL,NULL,12,15);
$_SESSION['json']=$jsonData;


$status=file_get_contents("http://cubito.co.in/assignment/gpslocation.php?trip_id=$jsonData",NULL,NULL,39,9);

while($status!='COMPLETED')
{
 sleep(20);

 $latitude=file_get_contents("http://cubito.co.in/assignment/gpslocation.php?trip_id=$jsonData",NULL,NULL,106,7);

 $longitude= file_get_contents("http://cubito.co.in/assignment/gpslocation.php?trip_id=$jsonData",NULL,NULL,126,7);
 
 $status=file_get_contents("http://cubito.co.in/assignment/gpslocation.php?trip_id=$jsonData",NULL,NULL,39,9);

 $timestamp=file_get_contents("http://cubito.co.in/assignment/gpslocation.php?trip_id=$jsonData",NULL,NULL,62,19);
 
 mysql_query("INSERT INTO latrep VALUES('$jsonData','$latitude','$longitude','$timestamp')");
  
 
}


header("Location:p2.php");
?>