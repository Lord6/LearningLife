<?php
$word= $_REQUEST["word"];
$student=array();
$values="";
$student[0]=array("name"=>"Tom","tel"=>"0911134","sex"=>"m");
$student[1]=array("name"=>"mary","tel"=>"7567562","sex"=>"f");

if ($word !== "") {
	switch ($word) {
    case "a":
      $values=$student[0];
        break;
    case "b":
      $values=$student[1];
        break;
   
    }	
}
echo json_encode($values);   
?>