
<html>
<head>
</head>
<body>
<form action="echoJson.php" method="get">
±b¸¹:<input type="text" name="account">
<br/>
±K½X:<input type="text" name="pwd">
<input type="submit" value="¶Ç°e">
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

