<!DOCTYPE html>
<html>
<head>
<title>
</title>
<link rel="stylesheet" type="text/css" href="sample_query.css">
</head>
<body>
<h1 style="text-align:center">Welcome to Login System </h1> 
<br/><br/>


<div class="fig1">
  <img src="gr1.jpg" class="img1" />
</div>
<div class="fig2">
</br>

<form name="frmUser" method="post" action="userverify.php">

<br/><br/><br/><br/>


            <label> Username </label> <input type="text" name="userName" class="full-width" required><br/><br/>

            <label>Password &nbsp; </label> <input type="password" name="password" class="full-width" ><br/><br/>
			
			<label>Checkcode </label><input type="text" name="checkcode" class="full-width" required> <img src="checkCode.php" onclick="this.src='checkCode.php?aa='+Math.random()"><br/><br/>

            <input type="submit" name="login" value="Login" class="full-width">
  </form>
  
 
 <?PHP
if (!empty($_GET['error'])){
	$error=$_GET['error'];
	if ($error==1){
		
		echo "<br/><font color='red' size='5'>Username or password was not right !!</font>";
		
	}	
	elseif($error==2){
		echo "<br/><font color='red' size='5'>Checkcode was not right !!</font>";
		
	}
}
?>
 <br/><br/><br/><br/><br/><br/><br/><br/>
</div>

<div class="fig3">

<image src="cornell.png" class="img2"/>
<image src="meio.png" class="img3"/>
<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span>&copy; Copyright <?php echo date ('Y'); ?> </span>

</div>

</body>
</html>
