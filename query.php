<?php
require_once('SqlOperation.class.php');
require_once('SqlService.class.php');
require_once ('commonFunction.php');
userloginCheck();

$sqlOperation=new SqlOperation;
$sqlService=new SqlService;

if (isset($_POST['scan']) && isset($_POST['barcode'])){
 $barcode = $sqlService->sanitizeMySQL($_POST['barcode']);

 $query = "SELECT * FROM tomato_barcode WHERE Barcode='$barcode'";
 $res=$sqlService->barcodeCheck($query);

  
if(count($res)!=0){
	
		echo <<<_END
		<html>
		<head>
		<link rel="stylesheet" type="text/css" href="sample_query.css">
		</head>
		<body>
		<div class="fig5">
		<span><h1>You're lucky, this sample was found in the database!!!!!!!!</h1></span>
		</div>
		</body>
		</html>	
		_END;	
	  
	  
  //echo $res[0]['Barcode'];
  //echo "<br/>";
  //echo $res[0]['Construct_ID'];
		echo <<<_END
		<html>
		<head>
		<link rel="stylesheet" type="text/css" href="sample_query.css">
		</head>
		<body>
		<div class="fig4">
		<table cellpadding="10" cellspacing="5" bgcolor="#eeeeee" width="550px" >
		<th colspan="2" align="center" style='font-size:28px'>The detail information of sample</th>
		<tr><td>Barcode:</td><td>{$res[0]['Barcode']}</td></tr>
		<tr><td>Construct_ID:</td><td>{$res[0]['Construct_ID']}</td></tr>
		<tr><td>Plant_ID:</td><td>{$res[0]['Plant_ID']}</td></tr>
		<tr><td>Genotype:</td><td>{$res[0]['Genotype']}</td></tr>
		<tr><td>Target:</td><td>{$res[0]['Target']}</td></tr>
		<tr><td>Promotor:</td><td>{$res[0]['Promotor']}</td></tr>
		<tr><td>Location:</td><td>{$res[0]['Location']}</td></tr>
		</table> 
		<a href="sample_query.php"><h2>Return</h2></a>
		</div>
		</body>
		</html>
		_END;
		exit();
}
 if(count($res)==0){
		echo <<<_END
		<html>
		<head>
		<link rel="stylesheet" type="text/css" href="sample_query.css">
		</head>
		<body>
		<div class="fig5">
		<span><h1>This sample was not recorded in the database, would you want to add it to the database?</h1></span>
		<br/><br/><br/><br/><br/>
		<a href="sample_query.php"><h2>Return to scan page</h2></a>
		</div>
		</body>
		</html>	
		_END;	
		exit();	  
}
   
}
 

elseif (isset($_POST['add']) && isset($_POST['barcode'])){
	$sampls = $_POST['barcode'];
		echo <<<_END
		<div,class="fig4">
		 <form action="sample_add.php" method="post">
		 <table class="center" cellpadding="10" cellspacing="5" bgcolor="#eeeeee" width="550px" >
		 <tr><td>Barcode:</td><td><input type="text" name="barcode" value="$sampls"></td></tr>
		 <tr><td>Construct_ID:</td><td><input type="text" name="conid" value="null"></td></tr>
		 <tr><td>Plant_ID:</td><td><input type="text" name="plaid" value="null"></td></tr>
		 <tr><td>Genotype:</td><td><input type="text" name="genot" value="null"></td></tr>
		 <tr><td>Target:</td><td><input type="text" name="targt" value="null"></td></tr>
		 <tr><td>Promotor:</td><td><input type="text" name="promt" value="null"></td></tr>
		 <tr><td>Location:</td><td><input type="text" name="locat" value="null"></td></tr>
		 <tr><td colspan="2"><input type="submit" value="ADD RECORD" name="summit">&nbsp;&nbsp;<a href="sample_query.php"><h4>Return</h4></a></td></tr>
		 </table>
		 </form>
		 </div>
		_END;
	
}

/***The script for deleting data***/
elseif(isset($_POST['delete']) && isset($_POST['barcode'])){
$barcode = $sqlService->sanitizeMySQL($_POST['barcode']);
 $query = "DELETE FROM tomato_barcode WHERE Barcode='$barcode'";
 $sqlService=new SqlService;
 $res=$sqlService->operateSample($query);
  if ($res){echo "some error happened here";}
 header("Location: sample_query.php");	
}





?>
