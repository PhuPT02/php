<?php 
/**
* 
*/
class c_chucnang extends controller
{
	
	function __construct()
	{
		$this->model= new m_chucnang();
	}
	function get_chucnang($id){
		$this->setdata($this->model->phan_quyen($id));
		$this->render('layout');
	}
	function ds_chucnang(){
		$this->setdata($this->model->get_chucnang1());
		$this->render('chuc_nang_danh_sach');
	}
	function them_chucnang(){
	if(isset($_POST) && $_POST){
		if(isset($_POST['Ten'],$_POST['DuongDan']) && $_POST['Ten'] && $_POST['DuongDan']){
			$_POST['TrangThai']= isset($_POST['TrangThai'])? '1': '0';
			$rs=$this->model->Them($_POST);
			if($rs){
				$this->tb();
			}else{
				$this->tb(2);
			}
		}else{
			$this->tb(2);
		}
	}
	$this->render('chuc_nang_them');
	}
	function loi404(){
		$this->render('loi');
	}
	function sua_chucnang(){
		$id= isset($_GET['id'])? $_GET['id']: false;
		$this->setdata($this->model->get_row($id));
		if($id && $this->data){
			if(isset($_POST) && $_POST){
				if(isset($_POST['Ten'],$_POST['DuongDan']) && $_POST['Ten'] && $_POST['DuongDan']){
					$_POST['TrangThai']= isset($_POST['TrangThai'])? '1': '0';
					$rs=$this->model->Sua($id,$_POST);
					if($rs){
						$this->tb();
					}else{
						$this->tb(2);
					}
				}else{
					$this->tb(2);
				}
			}
			$this->setdata($this->model->load_id($id));
			$this->render('chuc_nang_sua');
		}else{
			$this->render('loi');
		}
	}
	function xoa_chucnang(){
		$id= isset($_GET['id'])? $_GET['id']: false;
		$this->setdata($this->model->get_row($id));
		if($id && $this->data){
			$rs= $this->model->Xoa($id);
			if($rs){
				echo "<script>location.href='?parameter=c_chucnang&func=ds_chucnang'</script>";
			}else{
				$this->render('loi');
			}
		}else{
			$this->render('loi');
		}
	}
	
}


 ?>