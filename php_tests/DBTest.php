<?php

class DBTest extends PHPUnit_Framework_TestCase{
	
	protected function setUp() {
		include '/opt/lampp/htdocs/RPG-Community/php_class/class.db.php';
		include_once '/opt/lampp/lib/php/PHPUnit/Autoload.php';
		
	}
	
	function test_connect(){
		$db = new DB();
		assertNull($db->db); 
	}
	
}
?>