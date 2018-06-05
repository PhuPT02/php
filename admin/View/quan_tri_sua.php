<?php echo $this->thongbao?>
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">THÊM QUẢN TRỊ !</h4>
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
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Tên quản trị</label>
                                <div class="col-7">
                                    <input type="text" class="form-control" name='Ten' value="<?php echo $this->data->Ten?>">
                                </div>
                                <div class='col-3'>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" <?php if($this->data->TrangThai==1) echo 'checked'?> name='TrangThai'>
                                        <label class="custom-control-label" for="customCheck1">Hiện/Ẩn</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Tài khoản</label>
                                <div class="col-7">
                                    <input type="text" class="form-control" name='TaiKhoan' value="<?php echo @$this->data->TaiKhoan?>" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">PassWord</label>
                                <div class="col-7">
                                    <input type="password" class="form-control" name='PassWord' value="<?php echo @$this->data->PassWord?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">SET PASSWORD</label>
                                <div class="col-7">
                                    <input type="password" class="form-control" name='SETPASS' value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-2">Ngày tạo</label>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <input type="text" class="form-control datepicker" placeholder="mm/dd/yyyy" name='NgayTao' value="<?php echo @$this->data->NgayTao?>" >
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="ion-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- input-group -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8"></div>
                                <div class="col-4">
                                    <a href="?parameter=c_quantri&func=ds_quantri" class="btn btn-primary btn-custom waves-effect w-md m-b-5">Danh sách</a>
                                    <button type="submit" class="btn btn-primary btn-custom waves-effect w-md m-b-5" name="sua" value="sua">Sửa</button>
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