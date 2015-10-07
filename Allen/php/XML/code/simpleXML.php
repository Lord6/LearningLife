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
	 $root->asXML("testXML.xml");
	 foreach($root->children() as $element){
		 echo $element->getName()."<br/>";
		 foreach($element->children()as $child)
             echo $child->getName()."<br/>";  
     }
	
}
else
{
	
	die("error");
}

?>