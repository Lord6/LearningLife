<?PHP
session_start();
	ECHO $_SESSION["username"];
	ECHO $_SESSION["password"];
	$_SESSION["item"]=77777;
	ECHO $_SESSION["item"];
?>