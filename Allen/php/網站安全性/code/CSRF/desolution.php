<?php
session_start();
if(!isset($_SESSION["mberID"])){
	$_SESSION["mberID"]=md5(uniqid(rand(),true));
	
}
if(isset($_SESSION["mberID"])){
	if($_SESSION["mberID"]!=$_GET["mberID"]){
		unset($_GET);
		print "<script lanuage='javascript'>location.href='select.php'</script>";
	}
	
}
$link=mysql_connect('localhost','root','allen5769');
mysql_set_charset('utf8',$link);
$db_selected=mysql_select_db('practice',$link);
if(isset($_GET["delete"])){
	$result=mysql_query('delete  from member where id=\''.$_GET["getRowID"].'\'');
	print "<script lanuage='javascript'>location.href='select.php'</script>";
}


if(isset($_GET["rowid"])){
	$result=mysql_query('select * from member where id=\''.$_GET["rowid"].'\'');
}

?>
<html>
<body>
<form method="get" action="">
<?php 	
	while($row=mysql_fetch_assoc($result)){
	    echo "id=".$row["id"]."<br/>";
		echo "username=".$row["username"]."<br/>";
	    echo "password=".$row["password"]."<br/>";
	}
?>
<input type="hidden" value=<?php print $_GET["rowid"];?> name="getRowID"/>
<input type="hidden" value=<?php print $_SESSION["mberID"];?> name="mberID"/>
<input type="submit" value="delete" name="delete"/>
</form>
</body>
</html>
