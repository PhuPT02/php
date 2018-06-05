<?php
class c_danhmuc extends controller
{
     function __construct() {
        $this->model = new m_danhmuc();
    }
    function ds_danhmuc(){
        $this->setdata($this->model->get_danhmuc());
        $this->render('danh_muc_danh_sach');
    }
    function them_danhmuc(){
        if(isset($_POST) && $_POST){
            unset($_POST['a']);
            if(isset($_POST['Ten'],$_POST['IdCha'],$_POST['Alias']) && $_POST['Ten']  && $_POST['Alias'] ){
                $_POST['TrangThai']= isset($_POST['TrangThai'])? '1':'0';
                $rs= $this->model->Them($_POST);
                if($rs){
                    $this->tb();
                }else{
                    $this->tb(2);
                }
            }else{
                $this->tb(2);
            }
        }
        $this->render('danh_muc_them');
    }
    function sua_danhmuc(){
      
        $id= isset($_GET['id'])? $_GET['id'] : false;
        $this->setdata($this->model->get_row($id));
        if($id && $this->data){
            if(isset($_POST) && $_POST){
                unset($_POST['a']);
                if(isset($_POST['Ten'],$_POST['IdCha'],$_POST['Alias']) && $_POST['Ten']  && $_POST['Alias'] ){
                    $_POST['TrangThai']= isset($_POST['TrangThai'])? '1':'0';
                    $rs= $this->model->Sua($id,$_POST);
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
            $this->render('danh_muc_sua');
        }else{
            $this->render('loi');
        }
    }
    function xoa_danhmuc(){
        $id= isset($_GET['id'])? $_GET['id'] : false;
        $this->setdata($this->model->get_row($id));
        if($id && $this->data){
            $rs=$this->model->Xoa($id);
            if($rs){
                echo "<script>location.href='?parameter=c_danhmuc&func=ds_danhmuc'</script>";
            }else{
                $this->render('loi');
            }
        }else{
            $this->render('loi');
        }
    }
    function loi404(){
        $this->render('loi');
    }
}


?>