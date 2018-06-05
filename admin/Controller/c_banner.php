<?php 
/**
* 
*/
class c_banner extends controller
{
	
	function __construct()
	{
		$this->model= new m_banner();
	}
	function ds_banner(){
		$this->setdata($this->model->get_danhsach());
		$this->render('banner_danh_sach');
	}
	function them_banner(){
		if(isset($_POST) && $_POST){
			//var_dump($_POST);die();
			if(isset($_POST['Hinh']) && $_POST['Hinh']){
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
		$this->render('banner_them');
	}
	function sua_banner(){
		$id= (isset($_GET['id']))? $_GET['id']:false;
		$this->setdata($this->model->get_id($id));
		if($id && $this->data ){
		if(isset($_POST) && $_POST){
			if(isset($_POST['NoiDung'],$_POST['DiaChi'],$_POST['LienHe'],$_POST['Hinh']) && $_POST['NoiDung'] && $_POST['DiaChi'] && $_POST['LienHe'] && $_POST['Hinh']){
				$rs=$this->model->sua($id,$_POST);
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
		$this->render('banner_sua');
	}else{
		$this->render('loi');
	}
	}
	function xoa_banner(){
		$id= isset($_GET['id']) ? $_GET['id']:false;
			$this->setdata($this->model->get_id($id));
			if($this->data && $id){
				if($this->model->Xoa($id))
					echo "<script>location.href='?parameter=c_banner&func=ds_banner'</script>";
			}else{
				$this->render('loi');
			}
	}
	function loi404(){
        $this->render('loi');
    }

}


 ?>