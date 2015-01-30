<?php
//Session ungesetzt

if(isset($_POST["loginsubmit"])){
	$site->setSession(new session($site->getDB(), "mail_pwd", $_POST["email"], $_POST["pwd"] ));
	if($site->getSession()->checkPWD()){
		$site->getSession()->writeSession();
	} else{
		$site->setSession(null);
	}
}


//session gesetzt
if( !empty($_SESSION["UID"]) &&  is_numeric($_SESSION["UID"]) && !empty($_SESSION["HASH"])){
	$site.setSession( new session($site->getDB(), "id_hash", $_SESSION["UID"], $_SESSION["HASH"]));
	//if($site.session.checkUser() == true){
		$site.setUser($site.session.generateUser());
	//}else{
	//	$site.setSession(null); //important
	//}
}


?>
