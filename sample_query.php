<?php
require_once ('commonFunction.php');
userloginCheck();
?>

<!DOCTYPE html>
<html>
<head>
<title>
</title>
<link rel="stylesheet" type="text/css" href="sample_query.css">
</head>
<body>

  </script>
<h1 style="text-align:center">Sample Information Inventory Management System </h1> 

<br/><br/>


<div class="fig1">
  <img src="gr1.jpg" class="img1" />
</div>
<div class="fig2">
<pre><code>
  <?PHP
  require_once ('commonFunction.php');
  if (!empty($_GET['userName'])){
	  echo "Welcome ".$_GET['userName']." login the system ";
	 lastLogintime();
  }
  
?>
 </code></pre>
</br></br></br></br>

  <form action="query.php" method="POST">
  <table class="center">
  <tr><td>Sample Barcode:<input type="text" name="barcode"  placeholder='Barcode information' value = "" onkeypress="return (event.key!='Enter')"></td>
  <td>Subsample:
  <select name="batch">
  <option value="sample1" selected> 1 </option>
  <option value="sample2"> 2 </option>
  <option value="sample3"> 3 </option>
  <option value="sample4"> 4 </option>
  <option value="sample5"> 5 </option>
  <option value="sample6"> 6 </option>
  <option value="sample7"> 7 </option>
  <option value="sample8"> 8 </option>
  <option value="sample9"> 9 </option>
  <option value="sample10"> 10 </option>
  <option value="sample11"> 11 </option>
  <option value="sample12"> 12 </option>
  <option value="sample13"> 13 </option>
  <option value="sample14"> 14 </option>
  <option value="sample15"> 15 </option>
  <option value="sample16"> 16 </option>
  <option value="sample17"> 17 </option>
  <option value="sample18"> 18 </option>
  <option value="sample19"> 19 </option>
  <option value="sample20"> 20 </option>
  </select>
</td></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>

 <tr><td colspan="2"><input type="submit" value="RETRIEVE" name="scan">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="ADD RECORD" name="add">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="CANCEL RECORD" name="delete"></td></tr>
  <br/>
  </table>
  </form>
  

 <br/><br/>

 <br/><br/><br/><br/><br/><br/> 
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




