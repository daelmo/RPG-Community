<?php

/**
 * class holds and handels an RPG
 * 
 * @author Josephine Rehak
 */
class rpg{
	/** stores name of RPG*/
	private $name; 
	/** stores description of RPG*/
	private $beschreibung; 
	/** stores ID of RPG owner */
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
	 * @return string
	 */
	public function getBeschreibung() {
		return $this->beschreibung;
	}
	
	/**
	 * returns owner ID
	 * @return int
	 */
	public function getInhaber() {
		return $this->inhaber;
	}
	
	/**
	 * sets name of RPG
	 * @param string $name
	 */
	public function setName($name) {
		$this->name = $name;
	}
	
	/**
	 * sets description of RPG
	 * @param string $beschreibung
	 */
	public function setBeschreibung($beschreibung) {
		$this->beschreibung = $beschreibung;
	}

	/**
	 * sets owner of RPG
	 * @param int $inhaber
	 */
	public function setInhaber($inhaber) {
		$this->inhaber = $inhaber;
	}

	
}


?>
