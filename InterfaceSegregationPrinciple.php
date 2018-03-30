<?php
interface Animals {
	public function  Eat();
	public function Drink();
	public function Sleep();
}

interface Bird {
	public function Fly();
}

interface Fish {
	public function Swim();
}

class Dog implements Animals {
	public function Eat() {
		echo "Dog ate";
	}

	public function Drink() {
		echo "Dog drank";
	}

	public function Sleep() {
		echo "Dog sleep";
	}
}

class Eagle implements Animals, Bird {
	
}
?>