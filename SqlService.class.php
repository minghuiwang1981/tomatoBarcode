<?php
require_once('SqlOperation.class.php');

class SqlService{
	  
	  public $isSuccess = 0;
	  
	  public function userVerify ($sql, $password) {
	  $isSuccess=$this->isSuccess;
	  $salt1 = "qm&h*";
	  $salt2 = "pg!@"; 
	  $token = hash('ripemd128', "$salt1$password$salt2");
      $sqlOperation=new SqlOperation;
	  //res=$sqlOperation->SqlQuery ($sql);
	  //echo "res";
	  $res=$sqlOperation->SqlQuery ($sql); 
      $passwd=$res[0]["password"];
	  if ($token == $passwd) {
                $isSuccess = 1;
            }
	    return $isSuccess;
		$res->free();	
	  }
	  
	  public function barcodeCheck ($sql){
		 $sqlOperation=new SqlOperation;
		 $res=$sqlOperation->SqlQuery ($sql);	  
		  return $res; 
       	$res->free();		  
	  }
	  
   
      public function operateSample ($sql){
		 $sqlOperation=new SqlOperation;
		 $res=$sqlOperation->SqlManage ($sql);	 
		 return $res;
         $res->free();		 
	  }
	   

		public function sanitizeString($var)
			 {
			 $var = stripslashes($var);
			 $var = strip_tags($var);
			 $var = htmlentities($var);
			 return $var;
			 }
		public function sanitizeMySQL($var)
			 { 
			 $sqlOperation=new SqlOperation;
			 $var = $sqlOperation->StringPurify($var);
			 //echo "$var";
			 $var = $this->sanitizeString($var);
			 return $var;
			 }
}
?>