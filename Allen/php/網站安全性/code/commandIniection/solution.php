<?php
$fileValue=($_GET["fileValue"]);

if(isset($_GET["fileValue"]))
{
	
	if($fileValue==1){	
	
	system("dir D:\java");
   
	}
	
	else{
		echo injection;
	}
}
else{
	
	echo error;
}
?>