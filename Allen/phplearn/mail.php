<?php
mb_internal_encoding("utf-8");
$header="From:".iconv("utf-8","big5","�����i")."<bss4515@hotmail.com>"."\n";
$header.="To:".iconv("utf-8","big5","���@")."<test08182015@gmail.com>".iconv("utf-8",			"big5","���G")."<test08192015@gmail.com>"."\n";
$header.="Cc:".iconv("utf-8","big5","���T")."<test08202015@gmail.com>"."\n";
$header.="Bcc:".iconv("utf-8","big5","���|")."<test08212015@gmail.com>"."\n";
$header.="MIME-V:1.0"."\n";
$header.="Content-type:text/plain; charset=utf-8";

$to="huangwei4515@gmail.com";
$subject=iconv("utf-8","big5","�ڦb���էA���D��");
$body="�O�A�H�F�@�ʫH�A�ڤ~���D�O���^��"."\n"."��M�A����o";

mail($to,$subject,$body,$header);

?>