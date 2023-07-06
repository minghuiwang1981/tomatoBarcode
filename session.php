<?php
 
session_start();
 
// To check if the session is started.
if(isset($_SESSION["user"]))
{
 if(time()-$_SESSION["login_time_stamp"] >600)
 {
 session_unset();
 session_destroy();
 header("Location:userlogin.php");
 }
}
else
{
 header("Location:userlogin.php");
}
?>