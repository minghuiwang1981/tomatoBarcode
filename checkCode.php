<?php
session_start();
$checkcode="";
for ($i=0; $i<4;$i++){
	
	$checkcode.=dechex(rand(1,15));
}

$_SESSION['checkcode']=$checkcode;


$im=imagecreatetruecolor(60,20);

$red=imagecolorallocate($im,255,255,255);

for ($j=0;$j<20;$j++){
	
imageline($im,rand(0,50),rand(0,20),rand(0,50),rand(0,20),imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255)));
}
imagestring($im, rand(3,8),rand(0,15),rand(0,10),$checkcode,$red);
header("content-type: image/png");
imagepng($im);
imagedestroy($im);
echo $_SESSION['checkcode'];
?>