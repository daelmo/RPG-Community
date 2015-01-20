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
	
	/** returns name of RPG
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/** returns description of RPG
	 * @return string
	 */
	public function getBeschreibung() {
		return $this->beschreibung;
	}
	
	/** returns owner ID
	 * @return int
	 */
	public function getInhaber() {
		return $this->inhaber;
	}	
}
?>
