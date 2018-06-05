<?php
class c_tintuc extends controller
{
    var $dequy;
    public function __construct() {
        $this->model = new m_tintuc();
    }
    function ds_tintuc(){
        $this->setdata($this->model->get_ds_tintuc());
        $this->render('tin_tuc_danh_sach');
    }
    function them_tintuc(){
        if($_POST){
        if(isset($_POST,$_POST['Ten'],$_POST['NoiDung']) && $_POST && $_POST['Ten'] && $_POST['NoiDung'] ){
            $_POST['TrangThai']= isset($_POST['TrangThai'])? '1' : '0';
            
            if($this->model->Them($_POST)){
                $this->thongbao = "<script>$.Notification.autoHideNotify('success', 'top right', 'Thành công','Thao tác tiêp.')</script>";
            }else{
                $this->thongbao="<script>$.Notification.autoHideNotify('error', 'top right', 'Thất bại','Vui lòng thao tác lại.')</script>";
            }
        }else{
            $this->thongbao="<script>$.Notification.autoHideNotify('error', 'top right', 'Thất bại','Vui lòng thao tác lại.')</script>";
        }
    }
        $this->render('tin_tuc_them');
    }
    function sua_tintuc(){
        $id= isset($_GET['id'])? $_GET['id']: false;
        $this->setdata($this->model->get_id($id));
        if($id && $this->data){
        if($_POST && isset($_POST)){
            if(isset($_POST,$_POST['Ten'],$_POST['NoiDung']) && $_POST && $_POST['Ten'] && $_POST['NoiDung'] ){
                $_POST['TrangThai']= isset($_POST['TrangThai'])? '1' : '0';
              
                if($this->model->Sua($id, $_POST)){
                    $this->thongbao = "<script>$.Notification.autoHideNotify('success', 'top right', 'Thành công','Thao tác tiêp.')</script>";
                }else{
                    $this->thongbao="<script>$.Notification.autoHideNotify('error', 'top right', 'Thất bại','Vui lòng thao tác lại.')</script>";
                }
            }else{
                $this->thongbao="<script>$.Notification.autoHideNotify('error', 'top right', 'Thất bại','Vui lòng thao tác lại.')</script>";
            }
        }
            $this->setdata($this->model->load_id($id));
            $this->render('tin_tuc_sua');
    }else{
        $this->render('loi');
    }
    }

    function xoa_tintuc(){
       echo  $id=isset($_GET['id'])? $_GET['id']: false;
        $this->setdata($this->model->get_id($id));
        if($id || $this->data){
           $rs= $this->model->Xoa($id);
           if($rs){
               echo "<script>location.href='?parameter=c_tintuc&func=ds_tintuc'</script>";
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