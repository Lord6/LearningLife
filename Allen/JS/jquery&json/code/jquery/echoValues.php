<?php
$word= $_REQUEST["word"];
$values="";
if ($word !== "") {
	switch ($word) {
    case "a":
      $values="1";
        break;
    case "b":
      $values="2";
        break;
    case "c":
      $values="3";
        break;
}
	
}
echo $values ;
echo "thx,ajax" ;
?>