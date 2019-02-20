<?php
session_start();
require 'config.php';
$lat=$_GET["lat"];
$lon=$_GET["lon"];
$uid=$_SESSION["uid"];
$ap3="SELECT uid FROM user_loc WHERE uid='$uid'";
$ap4=mysqli_query($ap,$ap3);
if(mysqli_num_rows($ap4)==0)
{ 
$ap1="INSERT INTO user_loc(lat,lon,uid) VALUES('$lat','$lon','$uid')";
$ap2=mysqli_query($ap,$ap1);
if(!$ap2)
{

die(mysqli_error($ap));
}
}
else
{ 
$ap5="UPDATE user_loc SET lat='$lat' WHERE uid='$uid'";
$ap6="UPDATE user_loc SET lon='$lon' WHERE uid='$uid'";
mysqli_query($ap,$ap5);
mysqli_query($ap,$ap6);
mysqli_close($ap);}
?>
