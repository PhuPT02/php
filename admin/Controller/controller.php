<?php 
class Controller 
{
	var $data;
	var $thongbao;
	function render($view){
		if(file_exists('View/'.$view.'.php'))
			include_once 'View/'.$view.'.php';
	}
	function setdata($data){
		$this->data=$data;
	}
	function tb($tb=1){
		if($tb==1){
			$this->thongbao="<script>$.Notification.autoHideNotify('success', 'top right', 'Thành công','Thao tác tiêp.')</script>";
		}else{
			$this->thongbao="<script>$.Notification.autoHideNotify('error', 'top right', 'Thất bại','Vui lòng thao tác lại.')</script>";
		}
	}
}
 ?>