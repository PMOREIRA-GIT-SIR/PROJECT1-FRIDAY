<?php

$result;

if (!isset($_GET['the_string'])) {
	$result ="erro";
} else {
	$result = strrev($_GET['the_string']);
}

echo $result;
?>