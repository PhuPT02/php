<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">DANH SÁCH BANNER</h4>
            <ol class="breadcrumb float-right">
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
                        <th>KeyWord</th>
                        <th>Description</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(isset($this->data) && !empty($this->data)){
                        foreach ($this->data as $value) {
                            ?>
                            <tr>
                               <td><?php echo $value->KeyWord?></td>
                               <td><?php echo $value->Description?></td>
                               <td class='text-center'>
                                <div class="btn-group btn-group-sm">

                                    <button type="button" class="btn btn-warning"><a href="?parameter=c_banner&func=sua_banner&id=<?php echo $value->Ma ?>"> &nbsp Sửa &nbsp </a></button>
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