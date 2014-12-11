<?php

class site{
	private static $db;
	private static $session;
	private static $description;
	
	public static function __construct() {
		$this->session=new session;
		$this->db = new DB();
	}
    
    public static function getSession(){
		return $this->session;
	}
	
	public static function setSession($session){
		$this->session = $session;
	}
	
	public static function getDb() {
		return $this->db;
	}

	public static function getDescription() {
		return self::$description;
	}

	public static function setDb($db) {
		self::$db = $db;
	}

	public static function setDescription($description) {
		self::$description = $description;
	}


}


?>