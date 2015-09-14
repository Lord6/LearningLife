<?php
$link=mysql_connect('localhost','root','allen5769');
mysql_set_charset('utf8',$link);
$db_selected=mysql_select_db('practice',$link);
$result=mysql_query('select * from member');



?>
<html>
<body>
<?php 
	while($row=mysql_fetch_assoc($result)){
	    echo "<a  href=\"delete.php?rowid=".$row["id"]."\">";
		echo $row["id"];
	    echo"</a>";
		echo"<br/>";
	
	
	}
?>
</body>
</html>
