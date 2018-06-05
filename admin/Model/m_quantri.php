<?php 
class m_quantri extends database
{
	var $table ='tt_quantri';

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
		$sql='select * from tt_quantri order by Ma DESC';
		$this->sql($sql);
		return $this->loadAllRow();
	}
	function get_row($id,$table='tt_quantri'){
		return parent::get_id($id,$table);
	}
	function dangnhap($data){
		$val='';
		$data['PassWord']= isset($data['PassWord']) ? md5($data['PassWord']) : false;
		foreach ($data as $key => $value) {
			$val .= "`".$key."` = '".$value."' and ";
		}
		$val= rtrim($val,' and ');
		 $sql= 'select * from '.$this->table.' where '.$val;
		$this->sql($sql);
		$rs=$this->loadAllRow();
		if(count($rs)===1){
			$time= time()+864000;
			$_SESSION['Ten']= $rs[0]->Ten;
			$_SESSION['Ma']= $rs[0]->Ma;
			$_SESSION['TrangThai']= true;
			setcookie('Ten',$rs[0]->Ten,$time);
			setcookie('Ma',$rs[0]->Ma,$time);
			setcookie('TrangThai',true,$time);
			return 1;
		}else
			return 0;
		
	}
	function get_tk($tk){
		 $sql= "select * from tt_quantri where TaiKhoan= '".$tk."'";
		$this->sql($sql);
		$rs= $this->loadRow();
		if($rs)
			return 1;
		return 0;
	}
	function load_id($ma,$table='tt_quantri'){
		return parent::load_id($ma,$table);
	}
	function ds_chucnang(){
		$sql="select * from tt_chucnang";
		$this->sql($sql);
		return $this->loadAllRow();
	}
	function tim_chucnang($macn, $id){
		$sql='SELECT * FROM tt_chucnangquantri WHERE MaQuanTri='.$id.' AND MaChucNang='.$macn;
		$this->sql($sql);
		$rs= $this->loadAllRow();
		if( count($rs) >=1) {
			return 1;
		}
		return 0;
	}
	function xoa_quyen($id){
		return parent::delete_quyen($id);
	}
	function them_quyen($data){
		return parent::insert1($data,'tt_chucnangquantri');
		
	}

}

 ?>