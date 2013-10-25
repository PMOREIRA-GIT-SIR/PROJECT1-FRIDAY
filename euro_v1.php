<?php
include_once 'CKeyGen.php';
$kg = new CKeyGen();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>Euro Millions Key Generator</title>
		<link rel="stylesheet" href="em_style.css"/>
	</head>
	<body>

		<h1>EURO MILLIONS</h1>
		<?php
		echo $kg->key2XHTML();
		$kg->genKey();
		echo $kg->key2XHTML();
		?>
		
	</body>
</html>