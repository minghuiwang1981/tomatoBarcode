<?php
require_once('SqlOperation.class.php');
require_once('SqlService.class.php');
$sqlService=new SqlService;


 $salt1 = "qm&h*";
 $salt2 = "pg!@";
 $forename = 'Min';
 $surname = 'Xu';
 $username = 'puppy';
 $password = 'dog';
 $tt = hash('ripemd128', "$salt1$password$salt2");
 //$sql="INSERT INTO users (forename,surname,username,password) VALUES ('$forename','$surname','$username','$tt')";
 //$res=$sqlOperation->SqlManage ($sql);
 //echo "$res<br/>";
 //$sql="DELETE FROM users Where surname='Xu'";
  //echo "$sql";
  //$sqlOperation->SqlManage ($sql);
  $sql="SELECT * FROM users WHERE username='$username'";
  $res=$sqlService->userverify($sql,$password);
  
  
?>