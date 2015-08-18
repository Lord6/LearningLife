<?php
mb_internal_encoding("utf-8");
$header="From:".iconv("utf-8","big5","黃翊展")."<bss4515@hotmail.com>"."\n";
$header.="To:".iconv("utf-8","big5","黃一")."<test08182015@gmail.com>".iconv("utf-8",			"big5","黃二")."<test08192015@gmail.com>"."\n";
$header.="Cc:".iconv("utf-8","big5","黃三")."<test08202015@gmail.com>"."\n";
$header.="Bcc:".iconv("utf-8","big5","黃四")."<test08212015@gmail.com>"."\n";
$header.="MIME-V:1.0"."\n";
$header.="Content-type:text/plain; charset=utf-8";

$to="huangwei4515@gmail.com";
$subject=iconv("utf-8","big5","我在測試你知道嗎");
$body="是你寄了一封信，我才知道是怎麼回事"."\n"."當然你不曉得";

mail($to,$subject,$body,$header);

?>