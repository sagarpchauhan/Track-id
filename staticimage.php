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
<body>


<h4>track-id 1</h4>
<img src="


http://maps.googleapis.com/maps/api/staticmap?center=17.3625,78.4795&zoom=13&size=400x300&markers=color:red%7Clabel:s%7C17.3684,78.4797&markers=color:red%7Clabel:s%7C17.3645,78.4798&markers=color:red%7Clabel:s%7C17.3625,78.4795
&markers=color:red%7Clabel:s%7C17.3596,78.4803&markers=color:red%7Clabel:s%7C17.3576,78.48&markers=color:red%7Clabel:s%7C17.354,78.4804,&markers=color:red%7Clabel:s%7C17.3524,78.48&markers=color:red%7Clabel:s%7C17.3455,78.4803&markers=color:red%7Clabel:s%7C17.344,78.48&markers=color:red%7Clabel:s%7C17.3415,78.4803">
<h4>track-id 2</h4>

<img src="


http://maps.googleapis.com/maps/api/staticmap?center=18.9748,72.8239&zoom=13&size=400x300&markers=color:red%7Clabel:s%7C18.9748,72.8239&markers=color:red%7Clabel:s%7C18.9754,72.8223&markers=color:red%7Clabel:s%7C18.975,72.8195
&markers=color:red%7Clabel:s%7C18.9752,72.8156&markers=color:red%7Clabel:s%7C18.975,72.8118&markers=color:red%7Clabel:s%7C18.9751,72.8103,&markers=color:red%7Clabel:s%7C18.9753,72.808&markers=color:red%7Clabel:s%7C18.975,72.806">




</body>
</html>