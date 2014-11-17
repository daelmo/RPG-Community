<?php
class rpg{
	private $name;
	private $beschreibung;
	private $inhaber;
	
	public function getName() {
		return $this->name;
	}

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
