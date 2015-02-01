<?php
//Session ungesetzt
if(isset($_POST['loginsubmit']) && isset($_POST['pwd']) && isset($_POST['email']) && $_POST["email"]!= ""){
	$site->setSession( new session($site->getDB(), "mail_pwd", $_POST["email"], $_POST["pwd"] ));
	if($site->getSession()->checkPWD()){
		$site->getSession()->writeSession();
	} else{
		$site->setSession(null);
	}
}


//session gesetzt
if(isset($_SESSION["UID"]) &&  is_numeric($_SESSION["UID"]) && isset($_SESSION["HASH"])){
	$site->setSession(new session($site->getDB(), "id_hash", $_SESSION["UID"], $_SESSION["HASH"]));
	if($site->getSession()->checkUser() == true){
		$site->setUser($site->getSession()->generateUser());
	}else{
		$site->setSession(NULL); //important
	}
}


?>
