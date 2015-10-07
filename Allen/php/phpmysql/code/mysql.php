<?php
/*
mysql_connect('主機名稱','使用者帳號','密碼')成功回傳link identifier(連線識別碼)
失敗回傳false;
*/
$link=mysql_connect('localhost','root','allen5769');
mysql_set_charset('utf8',$link);
$db_selected=mysql_select_db('practice',$link);
$result=mysql_query('select * from student');
	if(!$link){
	$msg='無法建立連線'.'<br/>';
	$msg.='錯誤訊息'.mysql_error().'<br/>';
	die($msg);
   
	}
	if(!$result){
		echo '執行失敗:'. mysql_error();
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
	echo "查詢筆數為:".$num_rows;
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
MYSQL_ASSOC:傳回關聯陣列
MYSQL_NUM:傳回數字陣列
MYSQL_BOTH:傳回同時雍有關聯與數字的陣列
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
		echo"索引:".$row->id;
		echo"姓名:".$row->name;
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