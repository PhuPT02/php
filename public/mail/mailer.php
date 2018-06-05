<?php
// Nhập các lớp PHPMailer vào không gian tên toàn cục
// Đây phải ở đầu kịch bản chứ không phải bên trong một hàm
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';


function sendmail($nguoi_nhan,$noi_dung,$tieu_de,$html=true){
$mail = new PHPMailer(true);                              // Đệ `true` cho phép ngoại lệ

$rs='';
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 //  Bật đầu ra gỡ lỗi tiết
    $mail->isSMTP();                                      //     Đặt mailer để sử dụng SMTP
    $mail->Host = 'smtp.gmail.com';  //     Chỉ định máy chủ SMTP chính và sao lưu
    $mail->SMTPAuth = true;                               //Bật xác thực SMTP
    $mail->Username = 'phutestlamweb@gmail.com';                 //   Tên người dùng SMTP
    $mail->Password = 'mtjalziyvxxiafom';                           //     Mật khẩu SMTP
    $mail->SMTPSecure = 'tls';                            //    Bật mã hóa TLS, `ssl` cũng được chấp nhận
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('susaneat911@yahoo.com', 'Stan Stanart');     // ten chia se
       // Thêm người nhận, ten tl
    $mail->addAddress('susaneat911@yahoo.com');               //Tên là tùy chọn
    $mail->addReplyTo($nguoi_nhan, 'Khach'); // mail ngta tl. ten nguoi dc nhan
    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Thêm tệp đính kèm
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //  Tên tùy chọn

    //Content
    $mail->isHTML($html);                                  // Set email format to HTML
    $mail->Subject = $tieu_de;              // tieu de
    $mail->Body    = $nguoi_nhan.'---'.$noi_dung; // noi dung
    $mail->AltBody = '';
//$mail->ErrorInfo
    $mail->send();
   return true;
} catch (Exception $e) {
    return false;
}
}


