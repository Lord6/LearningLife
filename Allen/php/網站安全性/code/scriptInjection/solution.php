<?php

$link=mysql_connect('localhost','root','allen5769');
mysql_set_charset('utf8',$link);
$db_selected=mysql_select_db('practice',$link);
if (isset($_GET["txt"]))
{ 
    //*********
	$txt=htmlspecialchars($_GET["txt"]);
	//**********
	$result=mysql_query('insert into mes(msg) values(\''.$txt.'\')');
	
	//mysql_free_result($result);
}
$result=mysql_query('select msg from mes');

?>
<html>
<style>

</style>
<head>
</head>
<body>
<form method="get" action="">
<table class="tb">
<?php   while($row_result = mysql_fetch_assoc($result)){ 
echo"<tr>";
echo"<td>message</td>";
echo"<td>".$row_result["msg"]."</td>";
echo"</tr>";
}
mysql_free_result($result);
?>
</table>
<textarea name="txt" style="width:300px; height:300px;"></textarea>
<input type="submit" value="Submit" >
</form>
</body>
</html>