<?php
class user{
	
	private $vorname;
	private $nachname;
	private $id;
	private $birth;
	private $email;
	private $aktiv;
	private $beitritt;
	private $rang;
	private $img;
	private $lng;
	
	function __construct($vorname, $nachname, $birth, $rang){
		$this->vorname = $vorname;
		$this->nachname = $nachname;
		$this->birth = $birth;
		$this->rang = $rang;
	}
	
	function getName(){
		return $vorname . " " . $nachname;
	}
	
	
	
	
}

