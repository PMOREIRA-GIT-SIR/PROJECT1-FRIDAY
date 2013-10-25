<?php
include_once 'CKeyGen.php';
header("Content-type:text/xml");
$kg = new CKeyGen();
echo $kg->key2XML();
?>