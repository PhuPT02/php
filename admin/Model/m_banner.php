<?php 
/**
* 
*/
class m_banner extends database
{
	var $table ='t_banner';

	function Them($data){
		return parent::insert($data,$this->table);
	}
	function Xoa($ma){
		return parent::delete($ma,$this->table);
	}
	function Sua($ma,$data){
		return parent::update($ma,$data,$this->table);
	}
	function get_danhsach(){
		$sql='select * from t_banner order by Ma DESC';
		$this->sql($sql);
		return $this->loadAllRow();
	}
	function get_id($ma,$table='t_banner'){
		return parent::get_id($ma,$table);
	}
	function load_id($ma,$table='t_banner'){
		return parent::load_id($ma,$table);
	}
}
 ?>