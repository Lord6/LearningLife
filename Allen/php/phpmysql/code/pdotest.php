<?php
try {
$dsn='mysql:host=localhost;dbname=practice;';
$user='root';
$password='allen5769';


$pdo=new PDO($dsn,$user,$password);

$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$pdo->query('set character set utf8');

$pdo->query('select * from student');
while($row=$pdo->query('select * from student')){
	
	foreach($row as $record){
		echo $record;
	}
	
}
/*
//bindParam�ϥΰݸ��ѼƥΪk
//$sql='select * from student where number>? and english>?';

//�ϥΩR�W�ѼƥΪk
$sql='select * from student where number>:number and english>:english';
$reslut=$pdo->prepare($sql);
$number=1;
$english=50;
//$reslut->bindParam(1,$number,PDO::PARAM_INT);
//$reslut->bindParam(2,$english,PDO::PARAM_INT);
$reslut->bindParam(':number',$number,PDO::PARAM_INT);
$reslut->bindParam(':english',$english,PDO::PARAM_INT);
$reslut->execute();
//prepare�iexecute�h������ۦPquerys
$number=2;
$english=30;
$reslut->bindParam(':number',$number,PDO::PARAM_INT);
$reslut->bindParam(':english',$english,PDO::PARAM_INT);
$reslut->execute();
while($row=$reslut->fetch(PDO::FETCH_ASSOC)){
	
	foreach($row as $record){
		echo $record;
	}
	
}
*/
}
catch(PDOException $e){
	
	echo'�o�Ϳ��~:'.$e->getMessage();
}


?>