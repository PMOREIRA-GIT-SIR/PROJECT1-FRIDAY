<?php
 $xmlkeystr = file_get_contents("http://alunos.estg.ipvc.pt/~pmoreira/KEYSERVER/KeyServerXML.php");
 $xmlkeystr2 = file_get_contents("http://localhost/SIR1213/EM_KEYGEN_FRI/keyServerXML.php");
 //var_dump($xmlkeystr);
 function xml2html($xmls) {
 	// a chave em XML
 	$xml = new SimpleXMLElement($xmls);
	
	// a chave em XHTML
	$html = new SimpleXMLElement("<div/>");
	
	// lista dos numeros
	$uln = $html->addChild("ul");
	//$html->ul[0] === $uln
	$uln->addAttribute("class","numbers");
	foreach($xml->numbers->num as $thenumber) {
		$uln->addChild("li",$thenumber);
	}
	
	// lista das estrelas
	$html->addChild("ul");
	$html->ul[1]->addAttribute("class","stars");
	foreach($xml->stars->num as $thestar) {
		$html->ul[1]->addChild("li",$thestar);
	}
	
	return $html->asXML();
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
			echo xml2html($xmlkeystr);
			echo xml2html($xmlkeystr2);
		?>
		
	</body>
</html>