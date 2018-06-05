<?php 
class m_danhmuc extends database
{
	var $table ='tt_danhmuc';

	function Them($data){
		return parent::insert($data,$this->table);
	}
	function Xoa($ma){
		return parent::delete($ma,$this->table);
	}
	function Sua($ma,$data){
		return parent::update($ma,$data,$this->table);
	}
	function get_row($id,$table='tt_danhmuc'){
		return parent::get_id($id,$table);
	}
	function get_danhmuc(){
		$sql='select * from tt_danhmuc order by Ma DESC';
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
	function load_id($ma,$table='tt_danhmuc'){
		return parent::load_id($ma,$table);
	}
}

 ?>