<?php 
session_start();
session_destroy();
setcookie('Ten','',time()-1);
setcookie('Ma','',time()-1);
setcookie('TrangThai','',time()-1);
header('location: index.php');
 ?>