<?php


abstract class Building {
	abstract public function Provide_Іervices ();
}

class Shop extends Building implements Sell { 

	private int $Colt_45 = 40;
	private int $Colt_Navy = 65;
	private int $Remington = 50;

	public function Provide_Іervices (){
		echo("\nOPEN Best guns in city! Bang!!!");
	}
	public function List_Price () {
			return "\nGUNS List\nColt_45 - {$this->Colt_45} bucks"."\nColt_Navy - {$this->Colt_Navy} Bucks"."\nRemington - {$this->Remington} Bucks";
	}
	
}

interface Sell {
	public function List_Price ();
}

class Sheriffs_Department extends Building {
	private int $Wanted = 3;
		public function Provide_Іervices (){
		echo ("Sheriff's Office");
		}
		public function New_Wanted_Write(string $puth, string $data) {
			file_put_contents($puth, $data);
		}
		public function New_Wanted_Read(string $puth) {
			return file_get_contents($puth);
		}
}

class Salun extends Building implements Sell {

	private int $Whisky = 2;
	private int $Tequila = 4;
	private int $Beer = 1; 

	public function Provide_Іervices (){
		echo("\nWELCOME ");
	}

	public function List_Price () {
		print( "\nBinge"."\nWhisky {$this->Whisky} bucks"."\nTequila {$this->Tequila} bucks"."\nBeer {$this->Beer} bucks");
	}
}

class Bank extends Building {
	public function Provide_Іervices (){
		echo("We take the best care of your money in the Wild West!");
	}
}

$shop = new Shop;
$sheriffs_Department = new Sheriffs_Department;
$salun = new Salun;
$bank = new Bank;

$building = $_POST['building'];

$result2 = 0;

switch ($building) {

	case 'Salun':

		
		$result2 = $salun->Provide_Іervices().$salun->List_Price();
		$html2 = "<!DOCTYPE html>
<html>
<head>
	</head>
<body>
<form action=\"./index3.html\" method=\"get\">
<button type=\"submit\" name=\"submit\" value=\"submit\">to choose</button>

</body>
</html>";
		echo ($html2);

	
		break;

	case 'Bank':
		
		$result2 = $bank->Provide_Іervices();
			

		break;

		case 'Sherif Depatment':
		
		$result2 = $sheriffs_Department->Provide_Іervices();
			

		break;

		case 'Shop':
		
		$result2 = $shop->Provide_Іervices().$shop->List_Price();
			

		break;

	default:
		$result2 = "Try agan";
		break;
}

$html2 = "<!DOCTYPE html>
<html>
<head>
	<title>Western</title>
</head>
<body>
	
		
			

			 <p>  $result2  </p>


			
			
		</form>

</body>
</html>";

echo($html2);