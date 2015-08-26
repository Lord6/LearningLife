<?php
$matchValue = $_REQUEST["matchValue"];
$index=$_REQUEST["index"];
$file='case2.xml';


$dom=new DOMDocument();
$dom->load("case2.xml");
$root= $dom->documentElement;
$root->getElementsByTagName("natrue")->item($index)->nodeValue =$matchValue;
$dom->save('case2.xml');

?>