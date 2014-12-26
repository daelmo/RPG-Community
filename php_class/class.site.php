<?php

class site{
	private static $db;
	private static $session;
	private static $description;
	private static $img;
	
	public function __construct() {
		$this->session=new session();
		$this->db = new DB();
		initVar();
	}
	
	public function initVar(){
		$this->img = img;
	}
    
	public function setImage(){
		$this->img = $img;
	}
	
	public static function getImage() {
		return self::$img;
	}	
	
    public function getSession(){
		return $this->session;
	}
	
	public function setSession($session){
		$this->session = $session;
	}
	
	public function getDb() {
		return $this->db;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setDb($db) {
		$this->db= $db;
	}

	public function setDescription($description) {
		$this->description = $description;
	}


}


?>