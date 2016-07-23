<?php
require 'connect.php';
session_start();
$jsonData=$_SESSION['json'];
//echo $jsonData;

$query1=mysql_query("SELECT * FROM latrep WHERE trackid='$jsonData'");
  
  $marker=array();
  
  $query2=mysql_query("SELECT * FROM `latrep` WHERE trackid='$jsonData'");
  while($data=mysql_fetch_assoc($query2))
  {
      $marker[]= $data;  
  }
 echo $marker[0]['latitude'].",".$marker[0]['longitude'];

?>

<html>
<head>
<title>Static map</title>
</head>
<body>
<h4>track-id 1</h4>

<img src="http://maps.googleapis.com/maps/api/staticmap?center=12.9608,77.5607&zoom=15&size=600x300&maptype=roadmap">
</body>
</html>