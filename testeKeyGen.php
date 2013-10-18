<?php
include_once 'CKeyGen.php';

$ex = new CExtractor(3,10,20);

$k = $ex->extractor();

var_dump($k);
?>