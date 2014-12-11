<?php
//get all classfiles
require_once 'php_class/class.rpg.php';
require_once 'php_class/class.db.php';
require_once 'php_class/class.user.php';
require_once 'php_class/class.session.php';
require_once 'php_class/class.file.php';

//create Session
$session =  new session();
$session.start();

//create Database
$db = new DB();

//properties code warnings
error_reporting(E_ALL);


//CREATE FILE
require_once 'php_inc/inc.htmlhead.php';
require_once 'php_inc/inc.htmlmenu.php';


?>
