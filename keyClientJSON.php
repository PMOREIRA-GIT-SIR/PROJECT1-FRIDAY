<?php
 $jsonkeystr = file_get_contents("http://alunos.estg.ipvc.pt/~pmoreira/KEYSERVER/KeyServerJSON.php");
 $jsonkeystr2 = file_get_contents("http://localhost/SIR1213/EM_KEYGEN_FRI/keyServerJSON.php");
 
 //var_dump($jsonkeystr);
 //var_dump($jsonkeystr2);
 function json2html($json) {
 	// descodificar para um objecto PHP
 	$jsonobj = json_decode($json);
	
	// a chave em XHTML
	$html = new SimpleXMLElement("<div/>");
	
	// lista dos numeros
	$uln = $html->addChild("ul");
	//$html->ul[0] === $uln
	$uln->addAttribute("class","numbers");
	
	foreach($jsonobj->numbers as $thenumber) {
		$uln->addChild("li",$thenumber);
	}
	
	// lista das estrelas
	$html->addChild("ul");
	$html->ul[1]->addAttribute("class","stars");
	foreach($jsonobj->stars as $thestar) {
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
			echo json2html($jsonkeystr);
			echo json2html($jsonkeystr2);
		?>
		
	</body>
</html>