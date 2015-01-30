<?php
/**
 * class handels all interactions with database
 * 
 * @author Josephine Rehak 
 */
class DB{
	private $db;

	/** initalizes database connection
	 * @return database-object */
	public function __construct() {
		$db = mysqli_connect("localhost", "root", "", "rpg") or die("Fehler bei der Datenbankverbindung");
		$this->db = $db; 
	}
	
	/** closes database connection
	 * @return boolean */
	public function closeDB(){
		return mysqli_close($db);
	}
	
	/** executes and proofs SQL strings
	 * @param string $sql */
	public function execute($sql){
		return mysqli_query($this->db, $sql)or die('Unable to run query:' . mysql_error());
	}
}

?>