<?php 
class m_chucnang extends database
{
	var $table ='tt_chucnang';

	function Them($data){
		return parent::insert($data,$this->table);
	}
	function Xoa($ma){
		return parent::delete($ma,$this->table);
	}
	function Sua($ma,$data){
		return parent::update($ma,$data,$this->table);
	}
	function phan_quyen($id){
		$sql='SELECT cn.* FROM tt_chucnangquantri cnqt JOIN tt_quantri qt on qt.Ma = cnqt.MaQuanTri JOIN tt_chucnang cn on cn.Ma= cnqt.MaChucNang WHERE  cn.TrangThai=1 and qt.TrangThai=1 and cnqt.MaQuanTri='.$id;
		$this->sql($sql);
		return $this->loadAllRow();
	}
	function get_chucnang1(){
		$sql='select * from tt_chucnang  order by Ma DESC';
		$this->sql($sql);
		return $this->loadAllRow();
	}
	function get_row($id,$table='tt_chucnang'){
		return parent::get_id($id,$table);
	}
	function load_id($ma,$table='tt_chucnang'){
		return parent::load_id($ma,$table);
	}
}


 ?>