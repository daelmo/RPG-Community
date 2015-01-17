<?php
//Session ungesetzt
if(!is_empty($_POST["submit"]) && !is_empty($_POST["email"]) && !is_empty($_POST["pwd"])){
	$site.setSession(new session("mail_pwd", $_POST["mail"], $_POST["pwd"] ));
	if($site.getSession.checkPWD()){
		$site.getSession.writeSession();
		//Location
	} else{
		$site.setSession(null);
	}
}


//session gesetzt
if(is_numeric($_SESSION["UID"]) && !is_empty($_SESSION["UID"]) && !is_empty($_SESSION["HASH"])){
	$site.setSession( new session("id_hash", $_SESSION["UID"], $_SESSION["HASH"]));
	if($site.session.checkUser() == true){
		$site.setUser($site.session.generateUser());
		$site.session.startSession();
	}else{
		$site.setSession(null); //important
	}
}


?>
