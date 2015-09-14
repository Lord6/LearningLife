<?php
if(isset($_GET["username"])&& isset($_GET["password"])){  //check these parameter
	
	$link=mysql_connect('localhost','root','allen5769');
	mysql_set_charset('utf8',$link);
	$db_selected=mysql_select_db('practice',$link);
	$result=mysql_query("select id from member where username='".$_GET["username"]."' and 
						 password='".$_GET["password"]."'");
	$count=mysql_num_rows($result);
	if($count){
		echo "welcome";
	}
	else{
		print "<script lanuage='javascript'>location.href='http://localhost/webinjection/SQLInjection/mainWeb.php'</script>";
	}
}
else{
		print "<script lanuage='javascript'>location.href='http://localhost/webinjection/SQLInjection/mainWeb.php'</script>";
}








?>