<?php
//simplexml

$file='testXML.xml';
if(file_exists($file)){
	$root=simplexml_load_file($file);
	 $create=$root->addChild('Student');
	 $create->addChild('id','5');
	 $create->addChild('number','5');
	 $create->addChild('name','Ken');
	 $create->addChild('sex','M');
     $create->addChild('date','&date;');
	echo $root->asXML("testXML.xml");
}
else
{
	
	die("error");
}

?>