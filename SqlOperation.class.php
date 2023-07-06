<?php

class SqlOperation{
	 public $hn = 'localhost';
     public $db = 'tomato';
     public $un = 'tomato';
     public $pw = 'tomato';
	 
		public function __construct(){
		$this->conn = new mysqli($this->hn, $this->un, $this->pw, $this->db);
		if (!$this->conn) die ("connection was failed!");
		}
		public	function  SqlQuery ($sql){
			 $arr=[];
			 $result=$this->conn->query($sql) ;
			 if (!$result) die ("Database access failed: " . $this->conn->error);
			 while ($row=$result->fetch_assoc()){
				 $arr[]=$row;	  
			 }
			 return $arr;
			 mysqli_result->free($result);
			 $this->conn->close();
		}

		public	function  SqlManage ($sql){
			
			 $result=$this->conn->query($sql);
			   
			 if (!$result) die($this->conn->error);
			 
             $this->conn->close();
			 
         }
		public function StringPurify ($strl){
			return $this->conn->real_escape_string($strl);
			
		}
	  	
}


?>




