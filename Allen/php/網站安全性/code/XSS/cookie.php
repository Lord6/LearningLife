<?php
ob_start();
date_default_timezone_set('Asia/Taipei');
$expiredate=strtotime("1 January 2016");
setcookie("username","bss4515",$expiredate);
setcookie("password","7567525",$expiredate);
ob_end_flush();
?>