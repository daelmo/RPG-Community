<?php
class mainsite extends site{

	private $slider;
	
	public function __construct($ID) {
		parent::__construct($ID);
		$this->slider = new slider();
	}
	public function getSlider() {
		return $this->slider;
	}

	public function setSlider($slider) {
		$this->slider = $slider;
	}


}
?>