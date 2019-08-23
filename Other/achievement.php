<?php
$xml= new DOMDocument;
$xml->load('videos/achievement/achievement.xml');

$xsl = new DOMDocument;
$xsl->load('videos/achievement/achievement.xsl');

$processing = new XSLTProcessor;
$processing->importStyleSheet($xsl);

echo $processing->transformToXML($xml);
 ?>