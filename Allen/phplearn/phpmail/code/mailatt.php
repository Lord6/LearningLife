<?php 
$file ="pearmail.jpg";
$file_size = filesize($file);
$handle = fopen($file, "r");
$content = fread($handle, $file_size);
fclose($handle);
$content = chunk_split(base64_encode($content));
$uid = md5(uniqid(time()));
$name = basename($file);
$from_name="hunag";
$from_mail="bss4515@hotmail.com";
$replyto="huangwei4515@gmail.com";
// header
$header = "From: ".$from_name." <bss4515@hotmail.com>\r\n";
$header .= "Reply-To: ".$replyto."\r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";
$message="ssdsd";
$subject="ssss";
$mailto="huangwei4515@gmail.com";
// message & attachment
$nmessage = "--".$uid."\r\n";
$nmessage .= "Content-type:text/plain; charset=iso-8859-1\r\n";
$nmessage .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
$nmessage .= $message."\r\n\r\n";
$nmessage .= "--".$uid."\r\n";
$nmessage .= "Content-Type: application/octet-stream; name=\"".$filename."\"\r\n";
$nmessage .= "Content-Transfer-Encoding: base64\r\n";
$nmessage .= "Content-Disposition: attachment; filename=\"pearmail.jpg\"\r\n\r\n";
$nmessage .= $content."\r\n\r\n";
$nmessage .= "--".$uid."--";

if (mail($mailto, $subject, $nmessage, $header)) {
    return true; // or use booleans here
} else {
  return false;
}
?>