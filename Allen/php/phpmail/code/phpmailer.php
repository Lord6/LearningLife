<?php
require("PHPMailer/_acp-ml/modules/phpmailer/class.phpmailer.php"); 
$mail = new PHPMailer(true);
$mail->IsSMTP();
$mail->SMTPAuth = true; // turn on SMTP authentication
//�o�X��O������
$mail->CharSet = "big5";
$mail->SMTPDebug = 1;
$mail->Username = "huangwei4515@gmail.com";
$mail->Password = "@hlcjl657692";
//�o��O�A��gmail�b���M�K�X

$mail->FromName = "�����i";
// �H��̦W��(�A�ۤv�n��ܪ��W��)
$webmaster_email = "huangwei4515@gmail.com"; 
//�^�ЫH��ܦ��H�c


$email="test08192015@gmail.com";
// ����̫H�c
$name="wei";
// ����̪��W��or�ʺ�
$mail->From = $webmaster_email;


$mail->AddAddress($email,$name);
$mail->AddReplyTo($webmaster_email,"Squall.f");
//�o���Χ�

$mail->WordWrap = 50;
//�C50���_�@����

$mail->AddAttachment("simpleOK.txt");
$mail->AddAttachment("pearmail.jpg");
// ���[�ɮץi�H�γo�ػy�k(�O�o��W�@�檺//�h��)

$mail->IsHTML(true); // send as HTML

$mail->Subject = "�H����D"; 
// �H����D
$mail->Body = "�H�󤺮e";
//�H�󤺮e(html���A�N�O�i�H��html���Ҫ��p����B���餧��)
$mail->AltBody = "�H�󤺮e"; 
//�H�󤺮e(�¤�r��)

if(!$mail->Send())
{
	echo "�H�H�o�Ϳ��~�G" . $mail->ErrorInfo;
	//�p�G�����~�|�L�X��]
  }



?>