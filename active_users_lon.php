<?php
require 'config.php';
$lon=array();
$ap1="SELECT * FROM user_loc";
$ap2=mysqli_query($ap,$ap1);
$i=0;
while($ap3=mysqli_fetch_assoc($ap2))
{
$lon[$i]=$ap3["lon"];
$i++;
}

echo json_encode($lon);


?>
