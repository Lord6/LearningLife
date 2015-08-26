<?php
//sax

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




?>