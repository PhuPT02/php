<?php
class m_danhmuc extends database 
{
    var $table='tt_danhmuc';
    function getAllRow(){
        $sql="select * from ".$this->table." where TrangThai=1";
        $this->sql($sql);
        return $this->loadAllRow();
    }
    function timcon($ma){
        $sql ="select * from tt_danhmuc where TrangThai=1  and ".$ma."=IdCha";
        $this->sql($sql);
        $rs =$this->loadAllRow();
        if(count($rs)>=1){
            return 0;
        }
        return 1;

    }
}

?>