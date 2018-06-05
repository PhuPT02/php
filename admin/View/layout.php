<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>STAN STANART</title>

<link href="../public/teamplate/adminteamplate/plugins/switchery/switchery.min.css" rel="stylesheet" />
<link href="../public/teamplate/adminteamplate/plugins/jquery-circliful/css/jquery.circliful.css" rel="stylesheet" type="text/css"
/>
<link href="../public/teamplate/adminteamplate/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../public/teamplate/adminteamplate/assets/css/icons.css" rel="stylesheet" type="text/css">
<link href="../public/teamplate/adminteamplate/assets/css/style.css" rel="stylesheet" type="text/css">

<!-- DataTables -->
<link href="../public/teamplate/adminteamplate/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"
/>
<link href="../public/teamplate/adminteamplate/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css"
/>
<!-- Responsive datatable examples -->
<link href="../public/teamplate/adminteamplate/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css"
/>

<!-- Multi Item Selection examples -->
<link href="../public/teamplate/adminteamplate/plugins/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css"
/>

<script src="../public/teamplate/adminteamplate/assets/js/modernizr.min.js"></script>

<!-- datepicker -->

<link href="../public/teamplate/adminteamplate/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet"
/>
<link href="../public/teamplate/adminteamplate/plugins/multiselect/css/multi-select.css" rel="stylesheet" type="text/css"
/>
<link href="../public/teamplate/adminteamplate/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="../public/teamplate/adminteamplate/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet"
/>
<link href="../public/teamplate/adminteamplate/plugins/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css"
    rel="stylesheet">
<link href="../public/teamplate/adminteamplate/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
<link href="../public/teamplate/adminteamplate/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

<!-- tong bao -->
<link rel="stylesheet" href="../public/teamplate/adminteamplate/plugins/morris/morris.css">

<script src="../public/teamplate/adminteamplate/assets/js/jquery.min.js"></script>
<script src="../public/teamplate/adminteamplate/assets/js/popper.min.js"></script>
<!-- Popper for Bootstrap -->
<script src="../public/teamplate/adminteamplate/assets/js/bootstrap.min.js"></script>
<script src="../public/teamplate/adminteamplate/assets/js/detect.js"></script>
<script src="../public/teamplate/adminteamplate/assets/js/fastclick.js"></script>
<script src="../public/teamplate/adminteamplate/assets/js/jquery.slimscroll.js"></script>
<script src="../public/teamplate/adminteamplate/assets/js/jquery.blockUI.js"></script>
<script src="../public/teamplate/adminteamplate/assets/js/waves.js"></script>
<script src="../public/teamplate/adminteamplate/assets/js/wow.min.js"></script>
<script src="../public/teamplate/adminteamplate/assets/js/jquery.nicescroll.js"></script>
<script src="../public/teamplate/adminteamplate/assets/js/jquery.scrollTo.min.js"></script>
<script src="../public/teamplate/adminteamplate/plugins/switchery/switchery.min.js"></script>
<!-- Notification js -->
<script src="../public/teamplate/adminteamplate/plugins/notifyjs/dist/notify.min.js"></script>
<script src="../public/teamplate/adminteamplate/plugins/notifications/notify-metro.js"></script>
<!--Custom main Js -->
<script src="../public/teamplate/adminteamplate/assets/js/jquery.core.js"></script>
<script src="../public/teamplate/adminteamplate/assets/js/jquery.app.js"></script>
<!-- ckf -->
<script src="../public/teamplate/adminteamplate/assets/js/ckf.js"></script>
<script src="../public/ckeditor/ckeditor.js"></script>
<script src="../public/ckfinder/ckfinder.js"></script>
<!-- canh bao -->
<link href="../public/teamplate/adminteamplate/plugins/sweet-alert/sweetalert2.min.css" rel="stylesheet" type="text/css"
/>

</head>
<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <a href="index.php" class="logo">
                        <i class="mdi mdi-radar"></i>
                        <span>WORLDTRADE</span>
                    </a>
                </div>
            </div>

            <!-- Button mobile view to collapse sidebar menu -->
            <nav class="navbar-custom">

                <ul class="list-inline float-right mb-0">

                    
                    <li class="list-inline-item dropdown notification-list" >
                        <span style="color:red;font-weight:150px;font-size:20px">Hi <?php echo $_SESSION['Ten']?> </span>
                    </li>
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                            aria-expanded="false">
                            <a href="logout.php" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout"></i>
                                <span>Logout</span>
                            </a>
                        </a>
                        
                              
                           

                            <!-- item-->
                            

                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-light waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
                    <li class="hide-phone app-search">
                        <form role="search" class="">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href="#">
                                <i class="fa fa-search"></i>
                            </a>
                        </form>
                    </li>
                </ul>

            </nav>

        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->

        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
                <!--- Divider -->
                <div id="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <?php 
                        foreach($this->data as $cn){
                        ?>
                        <li class="has_sub">
                            <a href="<?php echo $cn->DuongDan?>" class="waves-effect waves-primary">
                                <i class="<?php echo $cn->Icon?>"></i>
                                <span><?php echo $cn->Ten?></span>
                            </a>
                        </li>
                        <?php }?>
                      
                    </ul>

                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <!-- noi dung -->
                    <?php 
            		$parameter= isset($_GET['parameter'])?$_GET['parameter']:'c_tintuc';
                    $parameter= class_exists($parameter)? $parameter: 'c_tintuc';
                    $func=isset($_GET['func'])?$_GET['func']:'ds_tintuc';
                     $page= new $parameter();
                     if(method_exists($page,$func)){
                        $page->$func();
                     }else{
                         $page->loi404();
                     }
                 ?>
                    <!-- ket thuc noi dung -->
                       
                </div>
                <!-- end container -->
            </div>
            <!-- end content -->

            <footer class="footer">
                2018- Design: PhanPhu
                <!-- <span class="hide-phone">- sdt</span> -->
            </footer>

        </div>
    </div>
    <!-- END wrapper -->
    <script>
        var resizefunc = [];
    </script>


<script src="../public/teamplate/adminteamplate/assets/js/jquery.min.js"></script>
<script src="../public/teamplate/adminteamplate/assets/js/popper.min.js"></script>
<!-- Popper for Bootstrap -->
<script src="../public/teamplate/adminteamplate/assets/js/bootstrap.min.js"></script>
<script src="../public/teamplate/adminteamplate/assets/js/detect.js"></script>
<script src="../public/teamplate/adminteamplate/assets/js/fastclick.js"></script>
<script src="../public/teamplate/adminteamplate/assets/js/jquery.slimscroll.js"></script>
<script src="../public/teamplate/adminteamplate/assets/js/jquery.blockUI.js"></script>
<script src="../public/teamplate/adminteamplate/assets/js/waves.js"></script>
<script src="../public/teamplate/adminteamplate/assets/js/wow.min.js"></script>
<script src="../public/teamplate/adminteamplate/assets/js/jquery.nicescroll.js"></script>
<script src="../public/teamplate/adminteamplate/assets/js/jquery.scrollTo.min.js"></script>
<script src="../public/teamplate/adminteamplate/plugins/switchery/switchery.min.js"></script>
<script src="../public/teamplate/adminteamplate/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script type="text/javascript" src="../public/teamplate/adminteamplate/plugins/multiselect/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="../public/teamplate/adminteamplate/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
<script src="../public/teamplate/adminteamplate/plugins/select2/js/select2.min.js" type="text/javascript"></script>
<script src="../public/teamplate/adminteamplate/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
<script src="../public/teamplate/adminteamplate/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
<script src="../public/teamplate/adminteamplate/plugins/moment/moment.js"></script>
<script src="../public/teamplate/adminteamplate/plugins/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<script src="../public/teamplate/adminteamplate/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="../public/teamplate/adminteamplate/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="../public/teamplate/adminteamplate/assets/pages/jquery.form-advanced.init.js"></script>
<!-- Custom main Js -->
<script src="../public/teamplate/adminteamplate/assets/js/jquery.core.js"></script>
<script src="../public/teamplate/adminteamplate/assets/js/jquery.app.js"></script>
<!-- Required datatable js -->
<script src="../public/teamplate/adminteamplate/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../public/teamplate/adminteamplate/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="../public/teamplate/adminteamplate/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="../public/teamplate/adminteamplate/plugins/datatables/buttons.bootstrap4.min.js"></script>
<!-- <script src="../public/teamplate/adminteamplate/plugins/datatables/jszip.min.js"></script> -->
<script src="../public/teamplate/adminteamplate/plugins/datatables/pdfmake.min.js"></script>
<script src="../public/teamplate/adminteamplate/plugins/datatables/vfs_fonts.js"></script>
<script src="../public/teamplate/adminteamplate/plugins/datatables/buttons.html5.min.js"></script>
<script src="../public/teamplate/adminteamplate/plugins/datatables/buttons.print.min.js"></script>

<!-- Key Tables -->
<script src="../public/teamplate/adminteamplate/plugins/datatables/dataTables.keyTable.min.js"></script>

<!-- Responsive examples -->
<script src="../public/teamplate/adminteamplate/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="../public/teamplate/adminteamplate/plugins/datatables/responsive.bootstrap4.min.js"></script>

<!-- Selection table -->
<script src="../public/teamplate/adminteamplate/plugins/datatables/dataTables.select.min.js"></script>

<!-- Notification js -->
<script src="../public/teamplate/adminteamplate/plugins/notifyjs/dist/notify.min.js"></script>
<script src="../public/teamplate/adminteamplate/plugins/notifications/notify-metro.js"></script>
<!-- Sweet Alert Js  -->
<script src="../public/teamplate/adminteamplate/plugins/sweet-alert/sweetalert2.min.js"></script>
<script src="../public/teamplate/adminteamplate/assets/pages/jquery.sweet-alert.init.js"></script>

<!-- Custom main Js -->

    <script type="text/javascript">
        $(document).ready(function () {

            // Default Datatable
            $('#datatable').DataTable();

            //Buttons examples
            var table = $('#datatable-buttons').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf']
            });

            // Key Tables

            $('#key-table').DataTable({
                keys: true
            });

            // Responsive Datatable
            $('#responsive-datatable').DataTable();

            // Multi Selection Datatable
            $('#selection-datatable').DataTable({
                select: {
                    style: 'multi'
                }
            });

            table.buttons().container()
                .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
        });

    </script>
</body>

</html>