<?php
class Shape {
	public function Area() {}
}

class Square extends Shape {
	protected $height;

	public function __construct($height = 1) {
		$this->height = $height;
	}

	public function setHeight($height) {
		$this->height = $height;
	}

	public function getHeight() {
		return $this->height;
	}

	public function Area() {
		return $this->height*$this->height;
	}
}

class Rectangle extends Shape {
	
}

?>