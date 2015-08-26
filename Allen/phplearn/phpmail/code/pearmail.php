<?php
include 'C:\AppServ\php5\PEAR\pear\Mail.php';
include'C:\AppServ\php5\PEAR\pear\mime.php';

$mime=new Mail_Mime("\n");
$mime->setTxtBody("error");
$html='<html><body><img src="pea" /><h1>imgg</h1></body></html>';
$mime->addHTMLImage('pearmail.jpg','image/jpeg','pea',true);
$mime->setHTMLBody($html);
$mime->addAttachment('simpleOK.txt','text/plain');
$to="huangwei4515@gmail.com";
$param["text_encoding"]="8bit";
$param["html_encoding"]="base64";
$param["head_charset"]="utf-8";
$param["text_charset"]="utf-8";
$param["html_charset"]="utf-8";
$body=$mime->get($param);
$header["From"]="<bss4515@hotmail.com>";
$header["To"]="<huangwei4515@gmail.com>";
$header["Subject"]="test";
$header=$mime->headers($header,TRUE);

$mail=Mail::factory('mail');
$result=$mail->send($to,$header,$body);
if(PEAR::isError($result))
	echo"cant e:".$result->getMessage();
else 
	echo"success";

/*
//pearmail無附檔
$From="wei<bss4515@hotmail.com>";
$hto="huang<huangwei4515@gmail.com>";
$Subject="testuknow";

$header=array("From"=>$From,"To"=>$hto,"Subject"=>$Subject);
$to="huangwei4515@gmail.com";
$body="test u";

$mail=Mail::factory('mail');
$result=$mail->send($to,$header,$body);
if(PEAR::isError($result))
	echo"cant e:".$result->getMessage();
else 
	echo"success";
*/
?>