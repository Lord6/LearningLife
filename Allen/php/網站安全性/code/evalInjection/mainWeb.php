<?php
$myvar="varname";
if(isset($_GET["fileValue"])){
	$fileValue=$_GET["fileValue"];
	eval("\$myvar=$fileValue;");
	echo "\$myvar=".$myvar;
	
}
?>