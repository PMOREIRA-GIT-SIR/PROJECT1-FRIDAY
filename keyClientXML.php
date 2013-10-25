<?php
 $xmlkeystr = file_get_contents("http://alunos.estg.ipvc.pt/~pmoreira/KEYSERVER/KeyServerXML.php");
 var_dump($xmlkeystr);
 function xml2html($xmls) {
 	// a chave em XML
 	$xml = new SimpleXMLElement($xmls);
	// a chave em XHTML
	$html = new SimpleXMLElement("<div/>");
	
	// (...)
 }
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
			// (...)
		?>
		
	</body>
</html>