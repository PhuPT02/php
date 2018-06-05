<?php
class m_tintuc extends database
{

   
    function tintuc($id){ 
       $sql='SELECT tt.Ten, tt.Descr,tt.KeyWord,dm.Alias,tt.NoiDung FROM tt_tintuc tt JOIN tt_danhmuc dm on tt.MaDanhMuc= dm.Ma WHERE dm.TrangThai=1 and tt.TrangThai=1 and tt.MaDanhMuc='.$id.' order by tt.Ma DESC';
        $this->sql($sql);
        return $this->loadAllRow();
    }
    function get_idd($id,$a='tt_danhmuc'){
        return parent ::get_id($id, $a);
    }
    function get_id($id,$b='tt_tintuc'){
        return parent ::get_id($id, $b);
    }
    function ds_tintuc($id){
        $sql='SELECT dm.Ten as TenDM,tt.Ten,tt.Ma,tt.Alias,tt.NgayTao,tt.TacGia,tt.NoiDung,tt.Hinh,dm.Ten as TenDM,dm.Keyword,dm.Descr FROM tt_danhmuc dm JOIN tt_tintuc tt on dm.Ma = tt.MaDanhMuc WHERE tt.MaDanhMuc='.$id.' AND tt.TrangThai=1 and dm.TrangThai =1';
        $this->sql($sql);
        return $this->loadAllRow();
        
    }
    function chitiet($id){ 
        $sql='SELECT tt.Ten, tt.Descr,tt.KeyWord,dm.Alias,tt.NoiDung FROM tt_tintuc tt JOIN tt_danhmuc dm on tt.MaDanhMuc= dm.Ma WHERE dm.TrangThai=1 and tt.TrangThai=1 and tt.Ma='.$id.' order by tt.Ma DESC';
         $this->sql($sql);
         return $this->loadAllRow();
     }
}
?>