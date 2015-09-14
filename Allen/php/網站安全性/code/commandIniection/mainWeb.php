<?php
$fileValue=$_GET["fileValue"];
if($_GET["fileValue"])
{
	
	system("dir ".$fileValue);
	
}
else{
	
	echo error;
}


?>