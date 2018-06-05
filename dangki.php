<?php
require('public/mail/mailer.php');
if(isset($_POST['g-recaptcha-response'])){
    if(isset($_POST,$_POST['name'],$_POST['email'],$_POST['massage']) && $_POST['name'] && $_POST['email']&&$_POST['massage'] ){
        $secretKey="6Lem2FkUAAAAACl5VhBjd3fHCi-ZLnRHw1ROQgDe";
        $response=$_POST['g-recaptcha-response'];
        $userID=$_SERVER['REMOTE_ADDR'];
        $url="https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$userID";
        $content= file_get_contents($url);
        $rs= json_decode($content);
        if($rs->success){
            $mail= sendmail($_POST['email'],$_POST['massage'],$_POST['name']);
            if($mail){
                echo 'THÀNH CÔNG';
            }else{
                echo 'THẤT BẠI';
            }
        }else{
            echo 'THẤT BẠI';
        }
        

        
    }
    
}

?>