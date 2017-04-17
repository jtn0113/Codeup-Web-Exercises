<?php 

class Rectangle {

	protected $height;
	protected $width;

	    public function __construct($height, $width){
	        $this->height = $height;
	        $this->width  = $width;
	    }

        public function setHeight($height){
	        $this->height = trim($height);
	    }

        public function setWidth($width){
	        $this->width = trim($width);
	    }

        public function getHeight(){
	        return $this->height;
	    }

        public function getWidth(){
	        return $this->width;
	    }

	    public function area() {
	    	return $this->getHeight() * $this->getWidth();
	    }

		public function perimeter() {
			return ($this->getHeight()*2) + ($this->getWidth()*2);
		}
}






