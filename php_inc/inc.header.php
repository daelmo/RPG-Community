<?php
//get all classfiles
require_once 'php_class/class.rpg.php';
require_once 'php_class/class.db.php';
require_once 'php_class/class.user.php';
require_once 'php_class/class.session.php';
require_once 'php_class/class.site.php';

//get all subclasses
require_once 'php_class/class.mainsite.php';
require_once 'php_class/class.slider.php';


//properties code warnings
error_reporting(E_ALL);

//Session
	session_start();

//configures include path
//set_include_path("RPG-Community/");
//ini_set('include_path', '/opt/lampp/htdocs/RPG-Community/');



?>


