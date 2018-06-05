<?php echo $this->thongbao;?>
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">PHÂN QUYỀN</h4>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title">Input Types</h4>
            <div class="row">
                <div class="col-12">
                    <div class="p-20">
                        <form method='post' class="form-horizontal" role="form">
                            
                            <?php 
                          
                            foreach ($this->data as  $value) {
                              ?>
                            <div class="form-group row">
                                <label class="col-2 col-form-label"><?php echo @$value->Ten?></label>
                                <div class="col-7">
                                    <div class="switchery-demo">
                                      <input type="checkbox" name="<?php echo $value->Ma?>" <?php if($this->model->tim_chucnang($value->Ma,$this->par)) echo 'checked'  ?>  value="<?php echo @$this->par?>"  data-plugin="switchery" data-color="#00b19d"/>
                                            
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                            <div class="row">
                                <div class="col-8"></div>
                                <div class="col-4">
                                    <a href="?parameter=c_quantri&func=ds_quantri" class="btn btn-primary btn-custom waves-effect w-md m-b-5">Danh sách</a>
                                    <button type="submit" class="btn btn-primary btn-custom waves-effect w-md m-b-5" name="them" value="them">Thực hiện</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <!-- end row -->
        </div>
        <!-- end card-box -->
    </div>
    <!-- end col -->
</div>