<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">DANH SÁCH CHỨC NĂNG</h4>
            <ol class="breadcrumb float-right">
                <button class='btn btn-primary btn-lg'><a href="?parameter=c_chucnang&func=them_chucnang"> <span style='color:yellow' >Thêm</span> </a> </button>
            </ol>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <table id="selection-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tên</th>
                        <th>Ngày Tạo</th>
                        <th>Trạng Thái</th>
                        <th>ICon</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                       if(isset($this->data) && !empty($this->data)){
                            foreach ($this->data as $value) {
                    ?>
                    <tr>
                        <td><?php echo $value->Ten?></td>
                        <td><?php echo $value->NgayTao?></td>
                        <td>
                            <?php 
                                if($value->TrangThai==1){
                                    echo 'Hiện';
                                }else{
                                    echo 'Ẩn';
                                }
                            ?>
                        </td>
                        <td><i class="<?php echo $value->Icon?>"></i></td>
                        <td class='text-center'>
                            <div class="btn-group btn-group-sm">
                            <!-- <button type="button" class="btn btn-info"><a href="?parameter=c_blog&func=chi_tiet_blogt&id=<?php echo $value->Ma ?>">Chi Tiết</a></button> -->
                            <button type="button" class="btn btn-warning"><a href="?parameter=c_chucnang&func=sua_chucnang&id=<?php echo $value->Ma ?>"> &nbsp Sửa &nbsp </a></button>
                            <button type="button" class="btn btn-danger"><a href="?parameter=c_chucnang&func=xoa_chucnang&id=<?php echo $value->Ma?>"> &nbsp Xóa &nbsp</a></button>
                            </div>
                        </td>
                    </tr>
                    <?php } } ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- end row -->