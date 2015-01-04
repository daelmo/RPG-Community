<?php

/**
 * class holds and handels an RPG
 * 
 * @author Josephine Rehak
 */
class rpg{
	private $name;
	private $beschreibung;
	private $inhaber;
	
	/**
	 * returns name of RPG
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * returns description of RPG
	 * @return type
	 */
	public function getBeschreibung() {
		return $this->beschreibung;
	}

	public function getInhaber() {
		return $this->inhaber;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function setBeschreibung($beschreibung) {
		$this->beschreibung = $beschreibung;
	}

	public function setInhaber($inhaber) {
		$this->inhaber = $inhaber;
	}

	
}


?>
