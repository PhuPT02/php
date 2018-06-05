<?php echo $this->thongbao?>
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">THÊM TIN TỨC !</h4>
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
                                <label class="col-2 col-form-label">Tiêu đề</label>
                                <div class="col-7">
                                    <input type="text" class="form-control" name='Ten' id="Ten"  onchange="stralias('Ten','Alias')"  >
                                </div>
                                <div class='col-3'>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked name='TrangThai'>
                                        <label class="custom-control-label" for="customCheck1">Hiện/Ẩn</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Chọn danh mục</label>
                                <div class="col-7">
                                    <select class=" custom-select mt-3" name='MaDanhMuc'>
                                        <option value='0'>root</option>
                                        <?php  $this->model->dequy($this->model->get_ds_danhmuc()); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Nội dung</label>
                                <div class="col-10">
                                    <textarea class="form-control" rows="5" name="NoiDung" id="NoiDung"></textarea>
                                    <script>CKEDITOR.replace('NoiDung');</script>
                                </div>
                            </div>

                               <div class="form-group row">
					<label class="col-2 col-form-label">Hình đại diện</label>
				<div class="col-10">
					<input type="hidden" class="form-control" name="Hinh"  value="" id="Hinh"> 
					<img src="" style="with:150px;height:150px" id="img_Hinh" /><button type="button" onclick="openfinder('Hinh')">Chọn hình</button>
				</div>
				</div>
                            <div class="form-group row">
                                <label class="control-label col-sm-2">Ngày tạo</label>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <input type="text" class="form-control datepicker" placeholder="mm/dd/yyyy" name='NgayTao' value="<?php echo date('Y/m/d')?>" >
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="ion-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- input-group -->
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">KeyWord</label>
                                <div class="col-7">
                                    <input type="text" class="form-control" name='KeyWord'>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Descrtion</label>
                                <div class="col-7">
                                    <input type="text" class="form-control" name='Descr'>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Alias</label>
                                <div class="col-7">
                                    <input type="text" class="form-control" name='Alias' id="Alias" >
                                </div>
                            </div>
                            <input type="hidden" class="form-control" name='TacGia' value="<?php echo $_SESSION['Ten']?>" >
                            <div class="row">
                                <div class="col-8"></div>
                                <div class="col-4">
                                    <a href="?parameter=c_tintuc&func=ds_tintuc" class="btn btn-primary btn-custom waves-effect w-md m-b-5">Danh sách</a>
                                    <button type="submit" class="btn btn-primary btn-custom waves-effect w-md m-b-5" name="them" value="them">Thêm</button>
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