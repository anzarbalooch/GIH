<?php
session_start();
require 'config.php';
$email=$_POST["email"];
$pass=$_POST['pass'];
$anu="SELECT uid,uname,email,pass FROM clients WHERE email='$email'";
$ap5=mysqli_query($ap,$anu);
echo $email;
echo $pass;
if(!$ap5)
{

echo "connection failed";

}
else
{
    if(mysqli_num_rows($ap5)==0)
        { 
          echo "user does not exist: please signup first";
        }
    else
        {
            $hashpass=password_hash($pass,PASSWORD_DEFAULT);
            
            $ap6=mysqli_fetch_assoc($ap5);
              if(password_verify($ap6["pass"],$hashpass))
               {
                    session_start();
                    $_SESSION["login"]= true;
                    $_SESSION["email"]= $ap6["email"];
                    $_SESSION["fname"]=$ap6["fname"];
                    $_SESSION["uid"]=$ap6["uid"];
                    header("location: http://www.extrapaisa.tk/form.php");
                 }
            else
                {
                     echo "the username or password is incorrect";
                 }
          }
}
mysqli_close($ap);

?>
