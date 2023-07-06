<?php
function lastLogintime(){
	date_default_timezone_set('America/New_York');
	if (!empty ($_COOKIE['lastetime'])){
		echo "<br> You last time to login the system at ".$_COOKIE["lastetime"];
		setcookie("lastetime",date('Y-m-d H:i:s'),time()+7*24*3600);
	}
	else {
		echo "<br> This is your first time to login the system at ".date("Y-m-d H:i:s");
		setcookie("lastetime",date('Y-m-d H:i:s'),time()+7*24*3600);
		}
	
}

function userloginCheck(){
	session_start();
	#print_r($_SESSION);
	if (empty($_SESSION["user"])){
		
		header("Location: index.php?error=1");
        exit();	
	}
	if (isset($_SESSION['last_activity']) && time() - $_SESSION['last_activity'] > 900) {
		  session_unset(); // unset $_SESSION variable for the run-time
		  session_destroy(); // destroy session data in storage
		  header("Location: index.php"); // redirect to login page
	}
	$_SESSION['last_activity'] = time(); // update last activity time stamp
}
