<?php

/**
 * class handels all interactions with database
 * 
 * @author Josephine Rehak 
 */
class DB{
	
	function __construct(){}
	
	/**
	 * initalizes database connection
	 * @return database-object
	 */
	public function initDB() {
		$db = mysqli_connect("localhost", "root", "", "rpg") or die("Fehler bei der Datenbankverbindung");
		return $db;
	}
	
	/**
	 * closes database connection
	 * @return boolean
	 */
	public function closeDB(){
		return mysqli_close($db);
	}
	
	/**
	 * executes and proofs SQL strings
	 * @param type $db
	 * @param string $sql
	 */
	public function execute($db, string $sql){
		mysqli_query($db, $sql) or die("Invalid SQL!");
	}
}

?>