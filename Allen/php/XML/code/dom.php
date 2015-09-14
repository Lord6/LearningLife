<html>
<head>
<meta charset="utf-8"/>
</head>
</html>
<?php
//DOM

$dom=new DOMDocument();
$dom->load("testXML.xml");
$root= $dom->documentElement;
$firstChild=$root->firstChild;
$nextNode=$firstChild->nextSibling;
echo $root->nodeName.$nextNode->nodeValue;
$Student=$dom->createElement("Student");
$root->appendChild($Student);

$id=$dom->createElement("id");
$id->nodeValue="4";
$Student->insertBefore($id,$Student->firstChild);

$number=$dom->createElement("number");
$number->nodeValue="4";
$Student->appendChild($number);

$name=$dom->createElement("name");
$name->nodeValue="hill";
$Student->appendChild($name);

$sex=$dom->createElement("sex");
$sex->nodeValue="F";
$Student->appendChild($sex);

$date=$dom->createElement("date");
$date->nodeValue="&date;";
$Student->appendChild($date);

$Del=$root->getElementsByTagName('Student')->item(1);
$result=$root->removeChild($Del);
$dom->save('testXML.xml');




//sax
/*
//元素開始事件處理
function elementStartHandler($parser,$name,$attrs){
	echo"<tr>";
	echo"<td align='left'>".$name."</td>";
}
//元素結束的處理事件處理
function elementEndHandler($parser,$name){
	echo"</tr>";
}
//解析元素資料時的事件處理
function characterDataHandler($parser,$value){
	echo"<td>".$value."</td>";
	
}
$parser=xml_parser_create('utf-8');
xml_set_element_handler($parser,"elementStartHandler","elementEndHandler");//設定元素開始與結束的處理
xml_set_character_data_handler($parser,"characterDataHandler"); //設定解析元素資料時的事件處理
		
$file="testXML.xml";
if($fp=fopen($file,"r")){
	$data=fread($fp,filesize($file));
	echo"<table><tr><th width='140'>元素名稱</th><th width='190'>元素數值</th>";
	
	if(!xml_parse($parser,$data,feof($fp)))   //解析XML文件
		die(xml_error_string(xml_get_error_code($parser)));
	echo "</table>";
}
else
{
	die("無法開啟");
}
xml_parser_free($parser);

*/
//simplexml
/*
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
*/
?>