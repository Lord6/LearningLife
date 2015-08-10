<?php
try {
$dsn='mysql:host=localhost;dbname=practice;';
$user='root';
$password='4515';


$pdo=new PDO($dsn,$user,$password);

$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$pdo->query('set character set utf8');
//bindParam使用問號參數用法
//$sql='select * from student where number>? and english>?';

//使用命名參數用法
$sql='select * from student where number>:number and english>:english';
$reslut=$pdo->prepare($sql);
$number=1;
$english=50;
//$reslut->bindParam(1,$number,PDO::PARAM_INT);
//$reslut->bindParam(2,$english,PDO::PARAM_INT);
$reslut->bindParam(':number',$number,PDO::PARAM_INT);
$reslut->bindParam(':english',$english,PDO::PARAM_INT);
$reslut->execute();
while($row=$reslut->fetch(PDO::FETCH_ASSOC)){
	
	foreach($row as $record){
		echo $record;
	}
	
}

while($row=$reslut->fetch(PDO::FETCH_ASSOC)){
	
	foreach($row as $record){
		echo $record;
	}
	
}
}
catch(PDOException $e){
	
	echo'發生錯誤:'.$e->getMessage();
}


?>