<?php 
include_once('admin/system/database.php');
include_once('admin/system/autoload.php');
load();
?>
<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset=UTF-8>
    <meta charset="utf-8">
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href=public/teamplate/trangchu/assets/images/favicons/favicon.ico>
    <link rel=apple-touch-icon sizes=57x57 href=public/teamplate/trangchu/assets/images/favicons/apple-icon-57x57.png>
    <link rel=apple-touch-icon sizes=60x60 href=public/teamplate/trangchu/assets/images/favicons/apple-icon-60x60.png>
    <link rel=apple-touch-icon sizes=72x72 href=public/teamplate/trangchu/assets/images/favicons/apple-icon-72x72.png>
    <link rel=apple-touch-icon sizes=76x76 href=public/teamplate/trangchu/assets/images/favicons/apple-icon-76x76.png>
    <link rel=apple-touch-icon sizes=114x114 href=public/teamplate/trangchu/assets/images/favicons/apple-icon-114x114.png>
    <link rel=apple-touch-icon sizes=120x120 href=public/teamplate/trangchu/assets/images/favicons/apple-icon-120x120.png>
    <link rel=apple-touch-icon sizes=144x144 href=public/teamplate/trangchu/assets/images/favicons/apple-icon-144x144.png>
    <link rel=apple-touch-icon sizes=152x152 href=public/teamplate/trangchu/assets/images/favicons/apple-icon-152x152.png>
    <link rel=apple-touch-icon sizes=180x180 href=public/teamplate/trangchu/assets/images/favicons/apple-icon-180x180.png>
    <link rel=icon type=image/png sizes=192x192 href=public/teamplate/trangchu/assets/images/favicons/android-icon-192x192.png>
    <link rel=icon type=image/png sizes=32x32 href=public/teamplate/trangchu/assets/images/favicons/favicon-32x32.png>
    <link rel=icon type=image/png sizes=96x96 href=public/teamplate/trangchu/assets/images/favicons/favicon-96x96.png>
    <link rel=icon type=image/png sizes=16x16 href=public/teamplate/trangchu/assets/images/favicons/favicon-16x16.png>
    <link rel=manifest href=public/teamplate/trangchu/assets/images/favicons/manifest.html>
    <meta name=msapplication-TileColor content=#000000>
    <meta name=msapplication-TileImage content=public/teamplate/trangchu/assets/images/favicons/ms-icon-144x144.png>
    <meta name=theme-color content=#000000>
    <link rel=stylesheet href=public/teamplate/trangchu/assets/lib/bootstrap/dist/css/bootstrap.css>
    <link rel=stylesheet href=public/teamplate/trangchu/assets/lib/fontawesome/css/font-awesome.min.css>
    <link rel=stylesheet href=public/teamplate/trangchu/assets/lib/ionicons/css/ionicons.css>
    <link rel=stylesheet href=public/teamplate/trangchu/assets/lib/owlcarousel/owl-carousel/owl.carousel.css>
    <link rel=stylesheet href=public/teamplate/trangchu/assets/lib/owlcarousel/owl-carousel/owl.theme.css>
    <link rel=stylesheet href=public/teamplate/trangchu/assets/lib/FlexSlider/flexslider.css>
    <link rel=stylesheet href=public/teamplate/trangchu/assets/lib/magnific-popup/dist/magnific-popup.css>
    <link rel=stylesheet href="http://fonts.googleapis.com/css?family=Raleway:100,300,400">
    <link rel=stylesheet href="http://fonts.googleapis.com/css?family=Roboto:100,300,400">
    <link rel=stylesheet href=public/teamplate/trangchu/assets/css/main.css>
    <link rel=stylesheet href=public/teamplate/trangchu/assets/css/ie_fix.css>
    <script src=public/teamplate/trangchu/assets/lib/components-modernizr/modernizr.js></script>
    <script src=public/teamplate/trangchu/assets/lib/jquery/dist/jquery.js></script>
    <script src=public/teamplate/trangchu/assets/lib/bootstrap/dist/js/bootstrap.js></script>
    <link rel="stylesheet" href="public/teamplate/trangchu/assets/css/style.css">
    <link rel="stylesheet" href="public/teamplate/trangchu/assets/css/mycss.css">
    <link rel="stylesheet" href="public/teamplate/trangchu/assets/js/myscript.js">

</head>

<body data-spy=scroll data-target=#main-nav-collapse data-offset=100>
    <div class=page-loader>
        <div class=loader>Loading...</div>
    </div> 
    <?php
        $danhmuc = new c_danhmuc();
        $danhmuc->get_danhmuc2();
    ?>
 
 <!-- noidung -->
 <?php 
            		$parameter= isset($_GET['parameter'])?$_GET['parameter']:'c_chucnang';
                    // $parameter= class_exists($parameter)? $parameter: 'c_chucnang';
                    $func=isset($_GET['func'])?$_GET['func']:'loi404';
                     $page= new $parameter();
                    //  if(method_exists($page,$func)){
                        $page->$func();
                    //  }else{
                    //      $page->loi404();
                    //  }
                 ?>



<?php 
$danhmuc->footer();
?>

  
    <a id=totop href=#totop>
        <i class="fa fa-angle-double-up"></i>
    </a>
    <link rel="stylesheet" href="public">
    <script src=public/teamplate/trangchu/assets/lib/imagesloaded/imagesloaded.pkgd.min.js></script>
    <script src=public/teamplate/trangchu/assets/lib/isotope/dist/isotope.pkgd.min.js></script>
    <script src=public/teamplate/trangchu/assets/lib/owlcarousel/owl-carousel/owl.carousel.js></script>
    <script type=text/javascript src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src=public/teamplate/trangchu/assets/lib/waypoints/lib/jquery.waypoints.min.js></script>
    <script src=public/teamplate/trangchu/assets/lib/waypoints/lib/shortcuts/inview.min.js></script>
    <script src=public/teamplate/trangchu/assets/lib/FlexSlider/jquery.flexslider.js></script>
    <script src=public/teamplate/trangchu/assets/lib/simple-text-rotator/jquery.simple-text-rotator.js></script>
    <script src=public/teamplate/trangchu/assets/lib/jquery.mb.YTPlayer/dist/jquery.mb.YTPlayer.min.js></script>
    <script src=public/teamplate/trangchu/assets/lib/magnific-popup/dist/jquery.magnific-popup.js></script>
    <script src=public/teamplate/trangchu/assets/js/main.js></script>
</body>
</html>