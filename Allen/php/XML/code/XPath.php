<html>
<head>
<title>test</title>
</head>
<body>
<div id="content">
<h1>fdsf</h1>
<h1>fdgdfggg</h1>


</div>

<script>
//evaluate(xpathText,contextNode,namespaceURLMapper,resultType,result)
//contextNode : Reference to the node in which the search will take place. The node can be the document or any element in the document.
   var element = document.evaluate( 'count(//h1)' ,document.body, null, XPathResult.NUMBER_TYPE, null ).numberValue;
   alert(element);
</script>

</body>
</html>



<?php
$xml = simplexml_load_file("person.xml");

$result = $xml->xpath("//name");
foreach($result as $row){
	
	echo $row."\r";
}
//print_r($result);

?>