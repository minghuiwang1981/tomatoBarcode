<?php
require_once('SqlOperation.class.php');
require_once('SqlService.class.php'); 
session_start();
$isSuccess = 0;
if (count($_POST) > 0 && isset($_POST['login']) && !empty($_POST['userName']) && !empty($_POST["password"])) {
	
    $userName = $_POST['userName'];
	$password = $_POST["password"];
	$checkcode = $_POST["checkcode"];
	$_SESSION["user"] = $userName;
    // Login time is stored in a session variable
    $_SESSION["last_activity"] = time();
	
	echo $_SESSION['checkcode'];
	echo "<br>";
	echo $checkcode;
	
	if ($checkcode!=$_SESSION['checkcode']){
		header("Location: index.php?error=2");
		exit();
		
	}
    //$_SESSION['checkcode']=$checkcode;
	
    $sql = "SELECT * FROM users WHERE username='$userName'";
	$sqlService=new SqlService;
	$res=$sqlService->userVerify($sql,$password);
	$isSuccess =$res;
    if ($isSuccess == 0) {
    header("Location: index.php?error=1");
    exit();	
 
  } else {
        header("Location:  ./sample_query.php?userName=$userName&checkcode=$checkcode");
		
    }
}
else {
	 header("Location: index.php?error=1");

        exit();
	
}
   
?>