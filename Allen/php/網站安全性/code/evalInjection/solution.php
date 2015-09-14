<?php
$myvar="varname";
if(isset($_GET["fileValue"])){
	$fileValue=escapeshellarg($_GET["fileValue"]);
	eval("\$myvar=$fileValue;");
	echo "\$myvar=".$myvar;
	
}
?>