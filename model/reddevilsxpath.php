<?php

$xml = simplexml_load_file("https://www.reddit.com/r/reddevils/new.rss") ;
//var_dump($xml) ;
$result = $xml -> xpath("/feed/entry[1]/title") ;
var_dump($result) ;

?>
