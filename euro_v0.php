<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>Euro Millions Key Generator</title>
		<link rel="stylesheet" href="em_style.css"/>
	</head>
	<body>
		<?php
		 	echo "<h1>".date("l jS \of F Y h:i:s A")."</h1>";
		?>
		<div class="zona2">
				<h1>EURO MILLIONS</h1>
		
		<ul class="numbers">
			<?php
				for($n = 0 ; $n < 5; $n++) {
					$numero = rand(1,50);
					echo "<li> $numero </li>";
					//echo '<li> $numero </li>';
				}
			?>
				
			<!--
			<li>2</li>
			<li>13</li>
			<li>15</li>
			<li>18</li>
			<li>22</li> 
			-->
		</ul>
		<ul class="stars">
			<?php
			for($n = 0 ; $n < 2; $n++) {
					$numero = rand(1,11);
					echo "<li> $numero </li>";
					//echo '<li> $numero </li>';
				}
			?>
			<!--
			<li>6</li>
			<li>11</li>
			-->
		</ul>
		</div>
	</body>
</html>