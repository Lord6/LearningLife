
<html>
<head>
</head>
<body>
<form action="echoJson.php" method="get">
�b��:<input type="text" name="account">
<br/>
�K�X:<input type="text" name="pwd">
<input type="submit" value="�ǰe">
</form>
</body>
</html>
<?php
session_start();
if(isset($_SESSION["json"])){
	echo $_SESSION["json"]."<br>";
	$member = json_decode( $_SESSION["json"] );
	echo $member ->name . "<br>";
	echo $member ->tel . "<br>";
	echo $member ->sex . "<br>";;
}
?>

