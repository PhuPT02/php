<?php 
class m_tintuc extends database
{
	var $table ='tt_tintuc';

	function Them($data){
		return parent::insert($data,$this->table);
	}
	function Xoa($ma){
		return parent::delete($ma,$this->table);
	}
	function Sua($ma,$data){
		return parent::update($ma,$data,$this->table);
	}
	function get_ds_tintuc(){
		$sql= 'select * from tt_tintuc order by Ma DESC';
		$this->sql($sql);
		return $this->loadAllRow();
	}
	function get_ds_danhmuc(){
		$sql='select * from tt_danhmuc';
		$this->sql($sql);
		return $this->loadAllRow();
	}
	function dequy($data,$parent=0,$text=''){
		foreach ($data as $key => $value) {
			if($value->IdCha==$parent){
				echo "<option value='".$value->Ma."'>".$text.$value->Ten."</opotion>";
				$id = $value->Ma;
				unset($data[$key]);
				$this->dequy($data,$id,$text.'-----| ');
			}
		}
	}
	function get_id($id,$table='tt_tintuc'){
		return parent::get_id($id,$table);
	}
	function laydanhsach($id){
		$sql='select * from tt_danhmuc where Ma='.$id;
		$this->sql($sql);
		return $this->loadRow();
	}
	function load_id($ma,$table='tt_tintuc'){
		return parent::load_id($ma,$table);
	}
	function get_id_danhmuc($id){
		$sql='select * from tt_danhmuc where Ma='.$id;
		$this->sql($sql);
		return $this->loadRow()->Ten;
	}
	
}
 ?>