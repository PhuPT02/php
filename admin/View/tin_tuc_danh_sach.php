<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">DANH SÁCH BLOG</h4>
            <ol class="breadcrumb float-right">
                <button class='btn btn-primary btn-lg'><a href="?parameter=c_tintuc&func=them_tintuc"> <span style='color:yellow' >Thêm</span> </a> </button>
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
                        <th>Tiêu Đề</th>
                        <th>Danh Mục</th>
                        <th>Trạng Thái</th>
                        <th>Ngày Tạo</th>
                        <th>Chức năng</th>
                    </tr>
                </thead
                <tbody>
                    <?php
                       if(isset($this->data) && !empty($this->data)){
                            foreach ($this->data as $value) {
                    ?>
                    <tr>
                        <td><?php echo $value->Ten?></td>
                        <td><?php echo @$this->model->get_id_danhmuc($value->MaDanhMuc)?></td>
                        <td>
                            <?php 
                                if($value->TrangThai==1){
                                    echo 'Hiện';
                                }else{
                                    echo 'Ẩn';
                                }
                            ?>
                        </td>
                        <td><?php echo $value->NgayTao?></td>
                        <td class='text-center'>
                            <div class="btn-group btn-group-sm">
                            <!-- <button type="button" class="btn btn-info"><a href="?parameter=c_tintuc&func=chi_tiet_tintuct&id=<?php echo $value->Ma ?>">Chi Tiết</a></button> -->
                            <button type="button" class="btn btn-warning"><a href="?parameter=c_tintuc&func=sua_tintuc&id=<?php echo $value->Ma ?>"> &nbsp Sửa &nbsp </a></button>
                            <button type="button" class="btn btn-danger"><a href="?parameter=c_tintuc&func=xoa_tintuc&id=<?php echo $value->Ma?>"> &nbsp Xóa &nbsp</a></button>
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