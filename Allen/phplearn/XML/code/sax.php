<?php
//sax

//�����}�l�ƥ�B�z
function elementStartHandler($parser,$name,$attrs){
	echo"<tr>";
	echo"<td align='left'>".$name."</td>";
}
//�����������B�z�ƥ�B�z
function elementEndHandler($parser,$name){
	echo"</tr>";
}
//�ѪR������Ʈɪ��ƥ�B�z
function characterDataHandler($parser,$value){
	echo"<td>".$value."</td>";
	
}
$parser=xml_parser_create('utf-8');
xml_set_element_handler($parser,"elementStartHandler","elementEndHandler");//�]�w�����}�l�P�������B�z
xml_set_character_data_handler($parser,"characterDataHandler"); //�]�w�ѪR������Ʈɪ��ƥ�B�z
		
$file="testXML.xml";
if($fp=fopen($file,"r")){
	$data=fread($fp,filesize($file));
	echo"<table><tr><th width='140'>�����W��</th><th width='190'>�����ƭ�</th>";
	
	if(!xml_parse($parser,$data,feof($fp)))   //�ѪRXML���
		die(xml_error_string(xml_get_error_code($parser)));
	echo "</table>";
}
else
{
	die("�L�k�}��");
}
xml_parser_free($parser);




?>