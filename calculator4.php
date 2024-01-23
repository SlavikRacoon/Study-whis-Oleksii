<?php

			$Drinks = (string) $_POST['Drinks'];
$result = 0;
switch ($Drinks) {
	case 'Water':
	$result = 0;
		break;

	case 'Whisky':
		$result = 2;
		break;

	case 'Tequila':
		$result = 4;
		break;

	case 'Beer':
		$result = 1;
		break;
	
	default:
		$result = 0;
		break;
}

$html = "<!DOCTYPE html>
<html>
<head>
	</head>
<body>
		<form action=\"./calculator4.php\" method=\"post\">
		<form>
		

  			<select name=\"Drinks\">
				<option>Water</option>
				<option>Whisky</option>
				<option>Tequila</option>
				<option>Beer</option>
				
			</select>;
			<br>
			<p>Price: $result  </p>
	<button type=\"submit\" name=\"submit\" value=\"submit\">pay the bill</button>
		</form>

		<p>PARAGRAF.</p>
<form action=\"index3.html\" method=\"get\">
	<button type=\"submit\" name=\"submit\" value=\"submit\">return</button>
</body>
</html>";

echo ($html);