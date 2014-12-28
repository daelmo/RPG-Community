<?php
class DB{
	
	function __construct(){}
	
	public function initDB() {
		$db = mysqli_connect("localhost", "root", "", "rpg") or die("Fehler bei der Datenbankverbindung");
		return $db;
	}
	
	public function closeDB(){
		return mysqli_close($db);
	}
	

}

?>