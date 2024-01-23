<?php

namespace App;

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