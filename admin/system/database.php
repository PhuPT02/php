<?php 
/**
* 
*/
class database 
{
	private $host ='localhost';
	private $user= 'root';
	private $password= '';
	private $data='van';
	private $conn;
	private $query;
	private $sql;
	
	function __construct()
	{
		$this->conn = mysqli_connect($this->host,$this->user,$this->password,$this->data) or die('can not connect');

		mysqli_query($this->conn,"SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
		mb_language('uni');
		mb_internal_encoding('UTF-8');
		mysqli_query($this->conn,"set names 'utf8'");
	}
	function __destruct(){
		if(!$this->conn){
			mysqli_close($this->conn);
		}
	}
	function var_dump($val){
		echo '<pre>',var_dump($val),'</pre>';die();
	}
	function query($sql){
		return mysqli_query($this->conn,$sql);
	}
	// Ham insert
	function insert($data,$table){
		unset($data['them']);
		$col='';
		$val='';
		foreach ($data as $key => $value) {
			$col .= '`'.$key.'`, ';
			$val .= "'".mysqli_real_escape_string($this->conn,$value)."', ";
		}
		$col = rtrim($col,' , ');
		$val = rtrim($val,' , ');
		// echo  $sql="insert into `".$table.'` ('.$col.") values (".$val.')';die();
	    $sql="insert into `".$table.'` ('.$col.") values (".$val.')';
		$rs=$this->query($sql);
		if($rs){
			return 1;
		}else{
			return 0;
		}
	}

	//ham update
	function update($ma,$data,$table){
		unset($data['sua']);
		// var_dump($data);die();
		$val='';
		foreach ($data as $key => $value) {
			$val .= "`".$key."` ='".mysqli_real_escape_string($this->conn,$value)."' ,";
		}
		$val= rtrim($val,' , ');
		$ma=mysqli_real_escape_string($this->conn,$ma);
		 $sql ="update `".$table."` SET ".$val." where Ma=".$ma;
		//  var_dump($sql);
		  //die();
		$rs=$this->query($sql);
		if($rs){
			return 1;
		}else{
			return 0;
		}
	}
	//datele
	function delete($ma,$table){
		$sql= "delete from `".$table."` where Ma=".mysqli_real_escape_string($this->conn,$ma);
		$rs=$this->query($sql);
		if($rs){
			return 1;
		}else{
			return 0;
		}
	}

	function sql($sql){
		$this->sql=$sql;
	}
	//lay danh sach
	function loadAllRow(){
		$result = mysqli_query($this->conn, $this->sql);
        if (!$result){
            die ('Câu truy vấn bị sai');
        }
        $return = array();
        while ($row = mysqli_fetch_object($result)){
            $return[] = $row;
        }
        mysqli_free_result($result);
        return $return;
	}

	//lay ra mot row
	function loadRow(){
		$result= mysqli_query($this->conn,$this->sql);
		if(!$result){
			die('cau truy van sai');
		}
		$row= mysqli_fetch_object($result);
		mysqli_free_result($result);
		return $row;
	}

	function get_id($id,$table){
		$id= mysqli_real_escape_string($this->conn,$id);
		 $sql='select * from '.$table.' where Ma='.$id;
		$this->sql($sql);
		$rs= $this->loadAllRow();
		//echo count($rs);die();
		if(count($rs)>=1){
			return 1;
		}
		return 0;
	}
	function load_id($id,$table){
		$id= mysqli_real_escape_string($this->conn,$id);
		 $sql='select * from '.$table.' where Ma='.$id;
		$this->sql($sql);
		$rs= $this->loadRow();
		return $rs;
		
	}
	function delete_quyen($id){
		$sql='DELETE FROM `tt_chucnangquantri` where MaQuanTri='.$id;
		$rs=$this->query($sql);
		if($rs){
			return 1;
		}else{
			return 0;
		}
	}
	function insert1($data,$table){
		unset($data['them']);
		$col='';
		$val='';
		foreach ($data as $key => $value) {
			$val .= "(".$key.",".$value."), ";
		}
		
		 $val = rtrim($val,' , '); 
		// echo  $sql="insert into `".$table.'` ('.$col.") values (".$val.')';die();
	       $sql="insert into `".$table."` (`MaChucNang`,`MaQuanTri`) values ".$val;
		$rs=$this->query($sql);
		if($rs){
			return 1;
		}else{
			return 0;
		}
	}
}
 ?>