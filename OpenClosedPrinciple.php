<?php
class Shape {

}

class Square extends Shape {
	protected $height;

	public function __construct($height = 1) {
		$this->height = $height;
	}

	public function setHeight($height){
		$this->height = $height;
	}
}
?>