<?php
session_start();
if(isset($_SESSION["login"]) || $_SESSION["login"]==true)
{
header("location: http://www.extrapaisa.tk/index.php");
}
?>

<?php
require 'config.php';
$uname=$_POST["fname"];
$email=$_POST["email"];
$mobile=$_POST["phn"];
$pass=$_POST["pass"];
$ap5=mysqli_query($ap,"SELECT email FROM clients WHERE email='$email'");
    if(mysqli_num_rows($ap5)==0)
        { 
$ap1="INSERT INTO clients (uname,email,pass,mobile) VALUES('$uname','$email','$pass','$mobile')";
$ap2=mysqli_query($ap,$ap1);

                         if(!$ap2)
        
                             {
                                 die(mysqli_error($ap));
                                 echo "registrationfailed:user already exists";
                             }

                         else
                                {
                                    echo "registration successfull";
                                    mysqli_close($ap);
                                 } 
                    

            }
    else
         {
              echo "user already exists";
          }

?>
