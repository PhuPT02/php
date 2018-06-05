<?php echo $this->thongbao?>
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">THÊM Banner !</h4>
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
                                <label class="col-2 col-form-label">Title</label>
                                <div class="col-7">
                                    <input type="text" class="form-control" name='Title'>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Nội dung</label>
                                <div class="col-7">
                                    <input type="text" class="form-control" name='Descr'>
                                </div>
                            </div>
                            
                        <div class="form-group row">
					<label class="col-2 col-form-label">Hình Một</label>
				<div class="col-10">
					<input type="hidden" class="form-control" name="Hinh"  value="" id="Hinh"> 
					<img src="" style="with:150px;height:150px" id="img_Hinh" /><button type="button" onclick="openfinder('Hinh')">Chọn hình</button>
				</div>
				</div>
                            <div class="row">
                                <div class="col-8"></div>
                                <div class="col-4">
                                    <a href="?parameter=c_banner&func=ds_banner" class="btn btn-primary btn-custom waves-effect w-md m-b-5">Danh sách</a>
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