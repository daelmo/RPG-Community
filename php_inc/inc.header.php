<?php
//get all classfiles
require_once 'php_class/class.rpg.php';
require_once 'php_class/class.db.php';
require_once 'php_class/class.user.php';

//create Session
session_start();
ob_start();

//create Database
$db = new DB();

//Einstellung Fehlermeldung
error_reporting(E_ALL);


require_once 'php_inc/inc.htmlhead.php';	

?>
