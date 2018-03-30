<?php
interface Animals {
	public function  Eat();
	public function Drink();
	public function Sleep();
}

interface Bird {
	public function Fly();
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
	public function Eat() {
		echo "Eagle ate";
	}
}
?>