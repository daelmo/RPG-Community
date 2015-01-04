<?php


/**
 * class stands for start page 
 * 
 * @author Josephine Rehak
 */
class mainsite extends site{

	private $slider;
	
	/**
	 * constructor wich uses parent constructor to get data from database
	 * @param int $ID
	 */
	public function __construct($ID) {
		parent::__construct($ID);
		$this->slider = new slider();
	}
	
	/**
	 * returns slider 
	 * @return slider
	 */
	public function getSlider() {
		return $this->slider;
	}

	/**
	 * sets slider
	 * @param string $slider
	 */
	public function setSlider($slider) {
		$this->slider = $slider;
	}


}
?>