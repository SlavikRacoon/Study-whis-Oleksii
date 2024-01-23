<?php

require('vendor/autoload.php');

$user = new App\User;
var_dump($user->name);

$Butch_Cassidy = new App\Butch_Cassidy;
$Butch_Cassidy->Shoot();

$Suzy_Lafayette = new App\Suzy_Lafayette;
$Suzy_Lafayette->Property();

$Billy_Kid = new App\Billy_Kid;
$Billy_Kid->About_You();
