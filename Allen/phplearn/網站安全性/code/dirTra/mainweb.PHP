<?PHP
if(isset($_GET["file"])){
	
	@readfile(basename($_GET["file"]));
	echo(basename($_GET["file"]));
	
}
 


?>