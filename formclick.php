<?php
session_start();
if(!isset($_SESSION["login"]) || $_SESSION["login"]!==true)
{
header("location:http://www.extrapaisa.tk");
}
?>
<?php
require 'config.php';
$route_id=$_POST["route_no"];
$capacity=$_POST["litrs_milk"];
$uid=$_SESSION["uid"];
$ap3="SELECT * FROM collect_req WHERE r_id='$route_id' AND uid='$uid'";
$ap4=mysqli_query($ap,$ap3);
$count=$ap5["quantity"];
if(mysqli_num_rows($ap4)==0)
{
$ap5=mysqli_fetch_assoc($ap4);
$capacity=$capacity+$count;
$ap1="INSERT INTO collect_req (quantity,r_id,uid) VALUES('$capacity','$route_id','$uid')";
$ap2=mysqli_query($ap,$ap1);

if(!$ap2)
{
die(mysqli_error($ap));
}
echo "congrats";
}

else
{

echo "you have already added for today";
//$r_id=array(6,7,8,10,11,12,14,15);
//var_dump($r_id);
//$j=0;
//for($i=0; $i<9; $i++)
//{
//$ap.$i="SELECT * FROM collect_req WHERE r_id=($r_id[$i])";
//$ap1="SELECT * FROM collect_req WHERE r_id=6";
//$ap2=mysqli_query($ap,$ap1);

//$count.$r_id[$i]=0;
//while($anup.$i=mysqli_fetch_assoc($anu.$i))
//{
    
 //$count.$r_id=$count.$r_id[0]+$anup.$i["capacity"];
 //}

//$_SESSION["count".$i]=$count.$r_id;
//}
//for($i=0; $i<9; $i++)
//{

//echo 'total litrs of milk requested for today for route_id'.$r_id.'is'.$_SESSION["count".$i];
//}


}


?>
