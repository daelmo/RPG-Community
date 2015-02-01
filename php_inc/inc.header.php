<?php
//get all classfiles
require_once 'php_class/class.rpg.php';
require_once 'php_class/class.db.php';
require_once 'php_class/class.user.php';
require_once 'php_class/class.session.php';
require_once 'php_class/class.site.php';

//properties code warnings
error_reporting(E_ALL);

//Session
	session_start();

//configures include path
//set_include_path("RPG-Community/");
//ini_set('include_path', '/opt/lampp/htdocs/RPG-Community/');

	$site = new site($pageID);
		require_once 'php_inc/inc.loginhandler.php';
		
		//htmlhead
		$htmlHeadTpl["title"] = $site->getTitle();
		$htmlHeadTpl["description"] = $site->getDescription();
		include("php_tpl/tpl.htmlhead.php");
		
		//headline
		if($site->getUser() != NULL) $headlineTpl["name"] = $site->getUser()->getName();
		include("php_tpl/tpl.headline.php");
		
		include("php_tpl/tpl.menu.php");

?>


