<?php

abstract class Personage {
	abstract public function Property(); 
	abstract public function About_You(); 
}

class Butch_Cassidy extends Personage implements Bandit {

	public function Property(){
		echo("Property: You are the leader of a bandit group.");
	}
	public function Shoot (){
		echo("BANG! BANG!");
	}
	public function Rob_the_Bank (){
		echo("Bags of money!!!");
	}
	public function About_You(){
		echo("I am Butch Cassidy!");
	} 
}

class Suzy_Lafayette extends Personage {
	public function Property(){
		echo("Property: You have the fastest reload in the Wild West.");
	}
	public function About_You(){
		echo("I am Suzy Lafayette!");
	}
}

class Billy_Kid extends Personage {

	public function Property(){
		echo("Property: You own the fastest shooting in the Wild West.");
	}
	public function About_You(){
		echo("I am ! Billy Kid! ");
	}

}



interface Low {	
	public function Shoot ();
	public function wear_the_badge ();
}
interface Bandit {
	public function Shoot ();

	public function Rob_the_Bank ();
}


$Butch_Cassidy = new Butch_Cassidy;
$Suzy_Lafayette = new Suzy_Lafayette;
$Billy_Kid = new Billy_Kid;




$NickName = (string) $_POST['NickName'];

$character_selection = $_POST['character_selection'];

$result = 0;

switch ($character_selection) {

	case 'Butch Cassidy':
				$result = $Butch_Cassidy->About_You().$Butch_Cassidy->Property().$Butch_Cassidy->Shoot();
			
		break;

	case 'Billy Kid':
		
		$result = $Billy_Kid->About_You().$Billy_Kid->Property();

		break;

		case 'Suzy Lafayette':
		
		$result = $Suzy_Lafayette->About_You().$Suzy_Lafayette->Property();

		break;
	default:
		$result = "Try agan";
		break;
}




$html = "<!DOCTYPE html>
<html>
<head>
	<title>Western</title>
</head>
<body>
	
		
			

			 <p>  $result  </p>


			 <form action=\"./calculator3.php\" method=\"post\">
			  <p>We can go to building. Where we go?</p>
				<select name=\"building\">
				<option>Salun</option>
				<option>Bank</option>
				<option>Sherif Depatment</option>
				<option>Shop</option>
				</select>

			
			<button type=\"submit\" name=\"submit\" value=\"submit\">continue</button>
		</form>

</body>
</html>";

echo($html);

// abstract class Building {
// 	abstract public function Provide_Іervices ();
// }

// class Shop extends Building implements Sell { 

// 	private int $Colt_45 = 40;
// 	private int $Colt_Navy = 65;
// 	private int $Remington = 50;

// 	public function Provide_Іervices (){
// 		echo("\nOPEN Best guns in city! Bang!!!");
// 	}
// 	public function List_Price () {
// 			return "\nGUNS List\nColt_45 - {$this->Colt_45} bucks"."\nColt_Navy - {$this->Colt_Navy} Bucks"."\nRemington - {$this->Remington} Bucks";
// 	}
	
// }

// interface Sell {
// 	public function List_Price ();
// }

// class Sheriffs_Department extends Building {
// 	private int $Wanted = 3;
// 		public function Provide_Іervices (){
// 		var_dump("Sheriff's Office");
// 		}
// 		public function New_Wanted_Write(string $puth, string $data) {
// 			file_put_contents($puth, $data);
// 		}
// 		public function New_Wanted_Read(string $puth) {
// 			return file_get_contents($puth);
// 		}
// }

// class Salun extends Building implements Sell {

// 	private int $Whisky = 2;
// 	private int $Tequila = 4;
// 	private int $Beer = 1; 

// 	public function Provide_Іervices (){
// 		echo("\nWELCOME ");
// 	}

// 	public function List_Price () {
// 		return "\nBinge"."\nWhisky {$this->Whisky} bucks"."\nTequila {$this->Tequila} bucks"."\nBeer {$this->Beer} bucks";
// 	}
// }

// class Bank extends Building {
// 	public function Provide_Іervices (){
// 		echo("We take the best care of your money in the Wild West!");
// 	}
// }

// $shop = new Shop;
// $sheriffs_Department = new Sheriffs_Department;
// $salun = new Salun;
// $bank = new Bank;

// $building = $_POST['building'];

// $result2 = 0;

// switch ($building) {

// 	case 'Salun':
// 		$result2 = $salun->Provide_Іervices();
			
// 		break;

// 	case 'Bank':
		
// 		$result2 = $bank->Provide_Іervices();
			

// 		break;

// 		case 'Sherif Depatment':
		
// 		$result2 = $sheriffs_Department->Provide_Іervices();
			

// 		break;

// 		case 'Shop':
		
// 		$result2 = $shop->Provide_Іervices();
			

// 		break;

// 	default:
// 		$result2 = "Try agan";
// 		break;
// }

// $html2 = "<!DOCTYPE html>
// <html>
// <head>
// 	<title>Western</title>
// </head>
// <body>
	
		
			

// 			 <p>  $result2  </p>


// 			 <form action=\"./calculator.php\" method=\"post\">
			
			
// 		</form>

// </body>
// </html>";

// echo($html2);