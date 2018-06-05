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
	
}
 ?>