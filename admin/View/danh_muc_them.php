<?php echo $this->thongbao?>
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">THÊM DANH MỤC !</h4>
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
                                <label class="col-2 col-form-label">Tên danh mục</label>
                                <div class="col-7">
                                    <input type="text" class="form-control" name='Ten'  id="Ten" onchange="stralias('Ten','Alias')"  >
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
                                    <select class=" custom-select mt-3" name='IdCha'>
                                        <option value='0'>root</option>
                                        <?php  $this->model->dequy($this->model->get_danhmuc()); ?>
                                    </select>
                                </div>
                                <div class='col-3'>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2"  name='a'  >
                                        <label class="custom-control-label" for="customCheck2">Danh sách ?</label>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Đường dẫn</label>
                                <div class="col-7">
                                    <input type="text" class="form-control" name='DuongDan'>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-2">Ngày tạo</label>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <input type="text" class="form-control datepicker" placeholder="mm/dd/yyyy" name='NgayTao'>
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
                                    <input type="text" class="form-control" name='Keyword'>
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
                                    <input type="text" class="form-control" name='Alias' id="Alias">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8"></div>
                                <div class="col-4">
                                    <a href="?parameter=c_danhmuc&func=ds_danhmuc" class="btn btn-primary btn-custom waves-effect w-md m-b-5">Danh sách</a>
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
<script type="text/javascript">
    $(document).ready(function(){
        $('input[type="checkbox"]#customCheck2').click(function(){
            if($(this).prop("checked") == true){
                var alias = $('#Alias').val();
                var asli = 'tin-tuc-' + alias;
                $('#Alias').val(asli);
            }else if($(this).prop("checked") == false){
                var alias = $('#Alias').val();
                var asli = alias.substr(8);
                $('#Alias').val(asli);
            }
        });
    });
</script>