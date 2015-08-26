<html>
<head>
<title>test</title>
</head>
<body>
<div id="content">
<h1>test</h1>
<h1>test2</h1>


</div>

<script>
   var element = document.evaluate( 'count(//h1)' ,document, null, XPathResult.NUMBER_TYPE, null ).numberValue;
   alert(element);
</script>

</body>
</html>



<?php
$xml = simplexml_load_file("person.xml");

$result = $xml->xpath("//name");

print_r($result);

?>