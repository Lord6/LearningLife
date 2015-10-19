<?php 	
	if(isset($_GET["account"])&& isset($_GET["pwd"]))
	{
		$jsonString="";
		$link=mysql_connect('localhost','root','allen5769');
		mysql_set_charset('utf8',$link);
		$db_selected=mysql_select_db('practice',$link);
		$result=mysql_query("select * from json_member where acount='".$_GET["account"]."' and 
		 password='".$_GET["pwd"]."'");
		$count=mysql_num_rows($result);
		if($count){
			 
			 
			while($row=mysql_fetch_assoc($result)){
			//name:huang      tel:767525      sex:f      
			$jsonString="{\"name\":\"".$row["name"]."\",\"tel\":\"".$row["tel"]."\",\"sex\":\"".$row["sex"]."\"}";
			}
			session_start();
			$_SESSION["json"]=$jsonString;
			print "<script lanuage='javascript'>location.href='http://localhost/jquery/login.php'</script>";
		}
		
	}

?>