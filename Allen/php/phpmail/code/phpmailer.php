<?php
require("PHPMailer/_acp-ml/modules/phpmailer/class.phpmailer.php"); 
$mail = new PHPMailer(true);
$mail->IsSMTP();
$mail->SMTPAuth = true; // turn on SMTP authentication
//這幾行是必須的
$mail->CharSet = "big5";
$mail->SMTPDebug = 1;
$mail->Username = "huangwei4515@gmail.com";
$mail->Password = "@hlcjl657692";
//這邊是你的gmail帳號和密碼

$mail->FromName = "黃翊展";
// 寄件者名稱(你自己要顯示的名稱)
$webmaster_email = "huangwei4515@gmail.com"; 
//回覆信件至此信箱


$email="test08192015@gmail.com";
// 收件者信箱
$name="wei";
// 收件者的名稱or暱稱
$mail->From = $webmaster_email;


$mail->AddAddress($email,$name);
$mail->AddReplyTo($webmaster_email,"Squall.f");
//這不用改

$mail->WordWrap = 50;
//每50行斷一次行

$mail->AddAttachment("simpleOK.txt");
$mail->AddAttachment("pearmail.jpg");
// 附加檔案可以用這種語法(記得把上一行的//去掉)

$mail->IsHTML(true); // send as HTML

$mail->Subject = "信件標題"; 
// 信件標題
$mail->Body = "信件內容";
//信件內容(html版，就是可以有html標籤的如粗體、斜體之類)
$mail->AltBody = "信件內容"; 
//信件內容(純文字版)

if(!$mail->Send())
{
	echo "寄信發生錯誤：" . $mail->ErrorInfo;
	//如果有錯誤會印出原因
  }



?>