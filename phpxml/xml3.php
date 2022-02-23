<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("note.xml");

// print $xmlDoc->saveXML();
$x=$xmlDoc->documentElement;
foreach($x->childNodes as $item){
    echo $item->nodeName . "=" . $item->nodeValue ."<br>";
}
?>