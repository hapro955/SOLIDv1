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
	protected $width;
	protected $length;

	public function __construct($width = 1, $length = 1) {
		$this->width = $width;
		$this->length = $length;
	}

	public function setWidth($width) {
		$this->width = $width;
	} 

	public function getWidth() {
		return $this->width;
	}

	public function setLength($length) {
		$this->length = $length;
	}

	public function getLength() {
		return $this->length;
	}
}

?>