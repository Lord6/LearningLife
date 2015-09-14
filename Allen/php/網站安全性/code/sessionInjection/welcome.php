<?PHP
session_start();
session_regenerate_id(true);
echo session_id();
echo "<br/>";
if(isset($_GET["username"])&& isset($_GET["password"])){
	$_SESSION["username"]=$_GET["username"];
	$_SESSION["password"]=$_GET["password"];
	
}


if(isset($_SESSION["username"])&& isset($_SESSION["password"])&& isset($_SESSION["item"])){
	echo $_SESSION["username"]."<br/>";
	echo $_SESSION["password"]."<br/>";
	echo $_SESSION["item"]."<br/>";

}



?>