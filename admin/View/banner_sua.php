<?php echo $this->thongbao?>
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">SỬA Banner !</h4>
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
                                <label class="col-2 col-form-label">KeyWord</label>
                                <div class="col-7">
                                    <textarea name="KeyWord" id="KeyWord" cols="100" rows="3"><?php echo @$this->data->KeyWord?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Description</label>
                                <div class="col-7">
                                    <textarea name="Description" id="Description" cols="100" rows="3"><?php echo @$this->data->Description?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Index</label>
                                <div class="col-7">
                                    <textarea name="NoiDung" id="Description" cols="100" rows="10"><?php echo @$this->data->NoiDung?></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-2 col-form-label">Địa chỉ</label>
                                <div class="col-7">
                                    <textarea name="DiaChi" id="DiaChi" cols="100" rows="3"><?php echo @$this->data->DiaChi?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Liên hệ</label>
                                <div class="col-7">
                                    <textarea name="LienHe" id="LienHe" cols="100" rows="3"><?php echo @$this->data->LienHe?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Hinh</label>
                                <div class="col-7">
                                    <textarea name="Hinh" id="Hinh" cols="100" rows="3"><?php echo @$this->data->Hinh?></textarea>
                                </div>
                            </div>
                           <div class="row">
                            <div class="col-8"></div>
                            <div class="col-4">
                                <a href="?parameter=c_banner&func=ds_banner" class="btn btn-primary btn-custom waves-effect w-md m-b-5">Danh sách</a>
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