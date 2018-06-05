<?php
class c_quantri extends controller
{
	var $par;
    public function __construct() {
        $this->model = new m_quantri();
    }
    function ds_quantri(){
        $this->setdata($this->model->get_danhsach());
        $this->render('quan_tri_danh_sach');
    }
    function them_quantri(){
		if(isset($_POST) && $_POST){
			$kt= $this->setdata($this->model->get_tk($_POST['TaiKhoan']));
			if(!$this->data){
				if(isset($_POST['Ten'],$_POST['TaiKhoan'],$_POST['PassWord']) && $_POST['Ten'] && $_POST['TaiKhoan'] && $_POST['PassWord']){
					$_POST['TrangThai']= isset($_POST['TrangThai'])? '1':'0';
					$_POST['PassWord']= md5($_POST['PassWord']);
					$rs=$this->model->Them($_POST);
					if($rs){
						$this->tb(1);
					}else{
						$this->tb(2);
					}
				}else{
					$this->tb(2);
				}
			}else{
				echo "<script>$.Notification.autoHideNotify('error', 'top right', 'Thất bại','Tài khoản trùng.')</script>";
			}
			
		}
		$this->render('quan_tri_them');
	}
	function sua_quantri(){
		$id = isset($_GET['id'])? $_GET['id']: false;
		$this->setdata($this->model->get_row($id));
		if($id && $this->data){
			if(isset($_POST) && $_POST){
				if(isset($_POST['Ten'],$_POST['TaiKhoan'],$_POST['PassWord']) && $_POST['Ten'] && $_POST['TaiKhoan'] && $_POST['PassWord']){
					$_POST['TrangThai']= isset($_POST['TrangThai'])? '1':'0';
					$_POST['PassWord']= md5($_POST['PassWord']);
					$_POST['PassWord']= $_POST['PassWord'] != $_POST['SETPASS'] ? $_POST['PassWord'] : md5($_POST['SETPASS']);
					unset($_POST['SETPASS']);
					$rs=$this->model->Sua($id,$_POST);
					if($rs){
						$this->tb(1);
					}else{
						$this->tb(2);
					}
				}else{
					$this->tb(2);
				}
			}
			$this->setdata($this->model->load_id($id));
			$this->render('quan_tri_sua');
		}else{
			$this->render('loi');
		}
	}
	function xoa_quantri(){
		$id=isset($_GET['id'])? $_GET['id']: false;
		$this->setdata($this->model->get_row($id));
		if($id && $this->data){
			$rs=$this->model->Xoa($id);
			if($rs){
				echo "<script>location.href='?parameter=c_quantri&func=ds_quantri'</script>";
			}else{
				$this->render('loi');
			}
		}else{
			$this->render('loi');
		}
	}
	function dangnhap(){
		$this->model->dangnhap($_POST);
	}
	function quyen_quantri(){
		$id= isset($_GET['id'])? $_GET['id'] : false;
		$rs = $this->model->get_row($id);
		if($rs){
			$this->par=$id;
			$this->setdata($this->model->ds_chucnang());
			if(isset($_POST) && $_POST){
				if($this->model->xoa_quyen($id) && $this->model->them_quyen($_POST)){
					
				}
				
				 
			}
			$this->render('quyen');
		}else{
			$this->render('loi');
		}
	}
	function loi404(){
        $this->render('loi');
    }

}

?>