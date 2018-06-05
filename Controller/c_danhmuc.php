<?php
class c_danhmuc extends Controller
{
    function __construct(){
        $this->model = new m_danhmuc();
    }
    function get_danhmuc(){
        $this->setdata($this->model->getAllRow());
        $this->render('nav');
    }
    function get_danhmuc2(){
        $this->setdata($this->model->getAllRow());
        $this->render('nav2');
    }
    function footer(){
        $this->render('footer');
    }
}



?>