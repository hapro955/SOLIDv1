<?php
class Student {
	protected $name;
	protected $age;
	
	public function __construct($name = "student", $age = "18") {
		$this->name = $name;
		$this->age = $age;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function getName() {
		return $this->name;
	}

	public function setAge($age) {
		$this->age = $age;
	}

	public function getAge() {
		return $this->age;
	}
}

class MySayName extends Student {
	public function DisplayName() {
		echo "Name: ".$this->getName()."\n";
	}
}

class MySayAge extends Student {
	public function DisplayAge() {
		echo "Age: ".$this->getAge()."\n";
	}
}

$studentName = new MySayName();
$studentName->setName('Ha');
$studentName->DisplayName();

$studentAge = new MySayAge();
$studentAge->setAge(23);
$studentAge->DisplayAge();

?>