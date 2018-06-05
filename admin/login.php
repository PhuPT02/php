<?php
session_start();
include_once('../admin/system/autoload.php');
include_once('../admin/system/database.php');
load();
 $qt = new c_quantri();
 $qt->dangnhap($_POST);
 if (isset($_COOKIE['Ten'],$_COOKIE['Ma'],$_COOKIE['TrangThai']) && $_COOKIE['Ten'] && $_COOKIE['Ma'] && $_COOKIE['TrangThai']== true ) {
    $_SESSION['Ten']=$_COOKIE['Ten'];
    $_SESSION['Ma']=$_COOKIE['Ma'];
    $_SESSION['TrangThai']=$_COOKIE['TrangThai'];
}
if(isset($_SESSION,$_SESSION['Ma'],$_SESSION['Ten'],$_SESSION['TrangThai']) && $_SESSION && $_SESSION['Ma'] && $_SESSION['Ten'] && $_SESSION['TrangThai']){
    header('location: index.php');
}

?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="../public/teamplate/adminteamplate/assets/images/favicon.ico">

        <title>STAN STANART</title>

        <link href="../public/teamplate/adminteamplate/switchery/switchery.min.css" rel="stylesheet" />

        <link href="../public/teamplate/adminteamplate/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../public/teamplate/adminteamplate/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="../public/teamplate/adminteamplate/assets/css/style.css" rel="stylesheet" type="text/css">

        <script src="../public/teamplate/adminteamplate/assets/js/modernizr.min.js"></script>
    </head>

    <body>

        <div class="wrapper-page">

            <div class="text-center">
                <a href="index-2.html" class="logo-lg">
                    <i class="mdi mdi-radar"></i>
                    <span>STAN STANART</span>
                </a>
            </div>

            <form class="form-horizontal m-t-20" action="" method='post'>

                <div class="form-group row">
                    <div class="col-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="mdi mdi-account"></i>
                                </span>
                            </div>
                            <input class="form-control" type="text" required="" placeholder="user" name="TaiKhoan">
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="mdi mdi-key"></i>
                                </span>
                            </div>
                            <input class="form-control" type="password" required="" placeholder="PassWord" name="PassWord">
                        </div>
                    </div>
                </div>
                <div class="form-group text-right m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-custom w-md waves-effect waves-light" type="submit">Log In
                        </button>
                    </div>
                </div>
            </form>
        </div>


        <script>
            var resizefunc = [];
        </script>

        <!-- Plugins  -->
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
        <script src="../public/teamplate/adminteamplate/switchery/switchery.min.js"></script>

        <!-- Custom main Js -->
        <script src="../public/teamplate/adminteamplate/assets/js/jquery.core.js"></script>
        <script src="../public/teamplate/adminteamplate/assets/js/jquery.app.js"></script>

        <link rel="stylesheet" href="../public/teamplate/adminteamplate/../public/teamplate/adminteamplate/assets">

    </body>

    </html>