<?php
session_start();
if(!isset($_SESSION["login"]) || $_SESSION["login"]!==true)
{
header("location:http://www.extrapaisa.tk");
}
?>
<html>
<head> <title> hiiii </title> </head>
<body>
<form method="post" action="formclick.php">
<!--<p> route_no</p><input type="text" name="route_no">-->
<p> liters of milk</p><input type="text" name="litrs_milk">
<select name="route_no">select
<option>6</option>
<option>7</option>
<option>8</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>14</option>
<option>15</option>



</select>
<input type="submit" style="align:center;" name="submit" value="submit">
</body>
</html>
