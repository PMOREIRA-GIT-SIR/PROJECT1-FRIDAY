<?php
include_once 'CKeyGen.php';
header("Content-type:application/json");
$kg = new CKeyGen();
echo $kg->key2JSON();
?>