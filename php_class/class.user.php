<?php
/** class describes a user */
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
	
	/** constructs a user objekt to save user data*/
	function __construct($vorname, $nachname, $birth, $rang){
		$this->vorname = $vorname;
		$this->nachname = $nachname;
		$this->birth = $birth;
		$this->rang = $rang;
	}
	
	/** initializes values*/
	function initVar(){
		
	}
	
	/** gets name of user */
	function getName(){
		return $vorname . " " . $nachname;
	}
	
	
	
	
}

