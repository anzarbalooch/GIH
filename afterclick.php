<?php
session_start();
require 'config.php';
if(!isset($_SESSION["login"]) || $_SESSION["login"]!==true)
{
header("location:http://www.extrapaisa.tk");
}
?>
<?php
$ap1="SELECT * FROM vehicle";
$ap2=mysqli_query($ap,$ap1);
if(!$ap2)
{
die(mysqli_error($ap));
}
$i=0;
while($ap3=mysqli_fetch_assoc($ap2))
{
$_SESSION["capacity".$i]=$ap3["capacity"];
$_SESSION["reg_no".$i]=$ap3["reg_no"];
$_SESSION["status".$i]=$ap3["status"];
$i++;
}
echo $_SESSION["reg_no0"];
$ap4="SELECT SUM(quantity) AS sum
FROM collect_req
WHERE r_id='14'";  
$anu=mysqli_query($ap,$ap4);
$sum_raw=mysqli_fetch_assoc($anu);
$sum=$sum_raw["sum"];
echo $sum;

//for($i=0; $i<5; $i++)
$verify=$_SESSION["capacity0"];
if($sum==$verify)
{
$temp=$_SESSION["reg_no0"];
if($_SESSION["status0"]==0)
{
$update ="UPDATE vehicle SET status='1' WHERE reg_no='$temp'";

$update33=mysqli_query($ap,$update);
if(!$update33)
{
die(mysqli_error($ap));
}
}
}
else
{

echo "hi";

}





//}
mysqli_close($ap);
?>








 



