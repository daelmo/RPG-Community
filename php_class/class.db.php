<?php
class DB{
	function __construct() {
		$db = mysqli_connect("localhost", "root", "", "rpg") or die("Fehler bei der Datenbankverbindung");
		return $db;
	}
	
	function closeDB(){
		return mysqli_close($db);
	}
	
	function getDB() {
		return $db;
	}

}

?>

