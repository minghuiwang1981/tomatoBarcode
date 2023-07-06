<?php
require_once('SqlOperation.class.php');
require_once('SqlService.class.php');
$sqlOperation=new SqlOperation;
$sqlService=new SqlService;


if (isset($_POST['barcode']) &&
 isset($_POST['conid']) &&
 isset($_POST['plaid']) &&
 isset($_POST['genot']) &&
 isset($_POST['targt']) &&
 isset($_POST['promt']) &&
 isset($_POST['locat']) &&
 isset($_POST['summit']))
 {
 $barcode = $sqlService->sanitizeMySQL($_POST['barcode']);
 $conid = $sqlService->sanitizeMySQL($_POST['conid']);
 $plaid = $sqlService->sanitizeMySQL($_POST['plaid']);
 $genot = $sqlService->sanitizeMySQL($_POST['genot']);
 $targt = $sqlService->sanitizeMySQL($_POST['targt']);
 $promt = $sqlService->sanitizeMySQL($_POST['promt']);
 $locat = $sqlService->sanitizeMySQL($_POST['summit']);

 $query = "INSERT INTO tomato_barcode VALUES" .
 "('$barcode', '$conid', '$plaid', '$genot', '$targt', '$promt','$locat')";
 
 $sqlService=new SqlService;
 $res=$sqlService->operateSample($query);

 header("Location: sample_query.php");
 
 }

?>