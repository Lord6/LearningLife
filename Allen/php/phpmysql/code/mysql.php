<?php
/*
mysql_connect('�D���W��','�ϥΪ̱b��','�K�X')���\�^��link identifier(�s�u�ѧO�X)
���Ѧ^��false;
*/
$link=mysql_connect('localhost','root','allen5769');
mysql_set_charset('utf8',$link);
$db_selected=mysql_select_db('practice',$link);
$result=mysql_query('select * from student');
	if(!$link){
	$msg='�L�k�إ߳s�u'.'<br/>';
	$msg.='���~�T��'.mysql_error().'<br/>';
	die($msg);
   
	}
	if(!$result){
		echo '���楢��:'. mysql_error();
		exit;
	
	}
	//mysql_fetch_row
	print('mysql_fetch_row');
	echo"<br/>";

	while($row=mysql_fetch_row($result)){
		print_r($row);
		echo"<br/>";
	
	}
	$num_rows=mysql_num_rows($result);
	mysql_free_result($result);
	echo "�d�ߵ��Ƭ�:".$num_rows;
	echo"<br/>";
	echo"<br/>";

	//mysql_fetch_assoc
	$result=mysql_query('select * from student');
	print('mysql_fetch_assoc');
	echo"<br/>";
	while($row=mysql_fetch_assoc($result)){
		$getKey = array_keys($row);
		for($i=0;$i<count($row);$i++){
		echo $row[$getKey[$i]]."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";	
		}
	  echo "<br/>";
	
	}
mysql_free_result($result);
echo "<br/>";


//mysql_fetch_array
	$result=mysql_query('select * from student');
	print('mysql_fetch_array');
	echo"<br/>";
//mysql_fetch_array($result,result_type)
/*
result_type
MYSQL_ASSOC:�Ǧ^���p�}�C
MYSQL_NUM:�Ǧ^�Ʀr�}�C
MYSQL_BOTH:�Ǧ^�P�ɹl�����p�P�Ʀr���}�C
*/
	while($row=mysql_fetch_array($result,MYSQL_BOTH )){
	      $getKey = array_keys($row);
		for($i=0;$i<count($row)/2;$i++){
			echo $row[$i]."<br/>";	
		}
		for($i=0;$i<count($row)/2;$i++){
			echo $row[$getKey[$i]]."<br/>";		
		}
	}
	mysql_free_result($result);
	echo"<br/>";

	//mysql_fetch_object
	$result=mysql_query('select * from student');
	print('mysql_fetch_object');
	echo"<br/>";
	while($row=mysql_fetch_object($result )){
		echo"����:".$row->id;
		echo"�m�W:".$row->name;
		echo"<br/>";
	}
	mysql_free_result($result);
	echo"<br/>";


	//mysql_result
	$result=mysql_query('select * from student');
	print('mysql_fetch_result');
	echo"<br/>";
	for($row=0;$row<4;$row++){

		for($column=0;$column<4;$column++){
			$data=mysql_result($result,$row,$column);
			echo $data."&nbsp"."&nbsp" ;
			if($column==3){
			
				echo"<br/>";
			}
		
	    }
    }
	mysql_free_result($result);
	echo"<br/>";
	mysql_query('insert into student(id,name,number,phone,english)values(\'\',\'TGI\',\'5\',\'0211111111\',\'35\')');
mysql_query('delete  FROM STUDENT where number="4"');
//mysql_query('create database demo');
//mysql_query('drop database demo');
//mysql_query('create table  demotb(english CHAR(10),ttr CHAR(10))');
//mysql_query('drop table demotb');
/*mysql_query('
ALTER TABLE STUDENT ADD SN INT'
);*/
/*mysql_query('
ALTER TABLE STUDENT change tel tel2 INT'
);*/
/*
mysql_query('
ALTER TABLE STUDENT modify  tel char(30)'
);*/
/*mysql_query('
ALTER TABLE STUDENT drop tel'
);*/
/*mysql_query('
update  STUDENT set tel2=\'xx\''
);*/

mysql_close($link);
?>