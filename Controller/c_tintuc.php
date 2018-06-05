<?php
class c_tintuc extends COntroller
{
    public function __construct() {
        $this->model = new m_tintuc();
    }
    
    function tintuc(){
        $id= isset($_GET['id'])? $_GET['id'] : false;
    
        if($id && $this->model->get_idd($id)){
            $this->setdata($this->model->tintuc($id));
            $this->render('tin');
        }
    }
    function ds_tintuc(){
       
        $id= isset($_GET['id'])? $_GET['id']: false;
        
        if($id && $this->model->get_idd($id)){
            $this->setdata($this->model->ds_tintuc($id));
            $this->render('ds_tin');
        }
    }
    function chi_tiet_tintuc(){
        $id= isset($_GET['id'])? $_GET['id'] : false;
        if($id && $this->model->get_id($id)){
            $this->setdata($this->model->chitiet($id));
            $this->render('tin');
        }
    }
    
}
?>