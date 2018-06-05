<?php 
session_start();
if(!isset($_SESSION['TrangThai']) || $_SESSION['TrangThai'] != true)
    header('location: login.php');
require_once('system/database.php');
require_once('system/autoload.php');
load();
 ?>
 <?php 
$cn= new c_chucnang();
$cn->get_chucnang($_SESSION['Ma']);
?>
 