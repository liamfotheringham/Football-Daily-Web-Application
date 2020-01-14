 <html>
<head>
</head>
<body>

<?php

$xml = simplexml_load_file("http://feeds.bbci.co.uk/sport/football/rss.xml") ;
// var_dump($xml) ;
$xsl = simplexml_load_file("../model/reddevils.xsl") ;
$proc = new XSLTProcessor() ;
$proc->importStyleSheet($xsl);
$result = $proc->transformtoXML($xml) ;
echo $result;

?>

</body>
</html>
