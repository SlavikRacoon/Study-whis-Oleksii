<?php



$nul1 = (int) $_POST['nul1'];
$nul2 = (int) $_POST['nul2'];
$operation_type = $_POST['operator'];


$result = 0;
switch ($operation_type) {
	case 'None':
		$result = "You need to choose right operation.";
		break;

	case 'Add':
		$result = $nul1 + $nul2;
		break;

	case 'Subtract':
		$result = $nul1 - $nul2;
		break;

	case 'Multiply':
		$result = $nul1 * $nul2;
		break;

	case 'Divide':
		if($nul2 == 0){
			$result = "You can not use 0 for division.";
		}else{
			$result = $nul1 / $nul2;
		}
		
		break;
	
	default:
		$result = "Incorect operator type.";
		break;
}

$html = "<!DOCTYPE html>
<html>
<head>
	<title>My Web Page</title>
</head>
		<title>Result php</title>
<body>
	<h1>Result</h1>
	<p>Result:  $result  </p>
		<form action=\"index.html\" method=\"get\">

		
			
			<button type=\"submit\" name=\"submit\" value=\"submit\">Go to main page</button>
		</form>

		<p>PARAGRAF.</p>

</body>
</html>";




echo ($html);

