<?php
//session gesetzt
if(is_numeric($_SESSION["ID"]) && !is_empty($_SESSION["ID"])){
	$site.setSession( new session());
	if($site.session.checkID($_SERVER["ID"]) == true){
	$site.session.setUser(new user());
	$site.session.setUserID($_SESSION["ID"]);
	$site.session.startSession();
	}else{
		$site.setSession(null); 
	}
}


//Session ungesetzt
if($_POST["login"]){
	$site.setSession(new session());
	if($site.getSession.checkPWD() == true){
		$site.getSession.writeSession();
		//Location
	} else{
		$site.setSession(null);
	}
	
	
}
