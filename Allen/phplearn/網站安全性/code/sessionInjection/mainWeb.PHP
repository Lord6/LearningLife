<?php

session_start();
session_regenerate_id(true);
$_SESSION["item"]=10;
echo session_id();
?>
<html>
<body>
<form method="get" action="http://localhost/webinjection/sessionInjection/welcome.php">
<input type="text" name="username"/>
<input type="text" name="password"/>
<input type="submit" value="submit">
</form>
</body>
</html>
