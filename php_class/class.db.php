<?php
/**
 * class handels all interactions with database
 * 
 * @author Josephine Rehak 
 */
class DB{

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
	 * @param db $db
	 * @param string $sql
	 */
	public function execute($db, $sql){
		mysqli_query($db, $sql) or die("Invalid SQL!");
	}
}

?>