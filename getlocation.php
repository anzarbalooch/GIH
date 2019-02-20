<?php
session_start();
$_SESSION["uid"]=1;
?>
<!DOCTYPE html>
<html>
<head>
<title> hello </title>
</head>
<body>
<script>
window.onload=getLocation();
var x = document.getElementById("hi");
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.watchPosition(showPosition);
  } else {
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}
function showPosition(position) {
    var lat=position.coords.latitude; 
    var lon=position.coords.longitude;
    var link="savelocation.php?lat="+lat+"&lon="+lon;
    var req = new XMLHttpRequest();
    req.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("hi2").innerHTML = this.responseText;
      }
    };
    req.open("GET",link, true);
    req.send();

 x.innerHTML="Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
}
    
</script>
<p id="hi"> hi</p>
<p id="hi2"> hi</p>
</body>
</html>
