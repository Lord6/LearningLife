<?php
mb_internal_encoding("utf-8");

$header="From:<huangwei4515@gmail.com>"."\n";
$header.="To:<bss4515@hotmail.com>"."\n";
$header.="MIME-Version:1.0"."\n";
$header.="Content-type: text/plain; charset=utf-8";

$body="hello";



$to="huangwei4515@gmail.com";
$subject="test";


mail($to,$subject,$body,$header);

?>