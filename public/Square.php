<?php  

require_once 'Rectangle.php';

class Square extends Rectangle {

	public function perimeter() {
		if($this->height == $this->width) {
			return $this->height*4;
		} else {
			return "This is not a square";
		}
	}

}