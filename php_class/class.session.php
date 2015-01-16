<?php
/**
 * class handels the session of an user on a website
 * 
 * @author Josephine Rehak
 */
class session{
	private $userID = null;
	private $hashPWD =  null;
	protected $salt = "Salz"; // I will change that before use ^^
	
	/**
	 *  creates user out of mail and pwd or hash and id */
	function __construct($string, $ident, $passw) {
		switch ($string):
			case ("id_hash"):
				$sql = "Select * from member where id=".$id ." limit 1";
				
				break;
			case ("mail_pwd"):
				break;
		endswitch;
		
	}
	
    /** starts a session*/
    public function startSession(){
        session_start();
		ob_start();
    }
	
	/**check the user of $_Session */
	function checkUser (){
		if(is_numeric($_SESSION["UID"])){
			$sql = "";
			
		}else{
			destroySession();
		}
		
	}

	/** checks PWD during login */
	function checkPWD(){
		
		
	}
	
	function generateUser(){
		
	}
	
	/**writes in $_Session
	 * @param int $id 
	 * @param string $hash passwordhash	 */
	function writeSession($id, $hash){
		$_SESSION["UID"] = $id;
		$_SESSION["HASH"] = $hash;
	}
    
    /** ends session on website*/
    public function endSession(){
        
    }

	/**returns user ID
	 * @return int */
	public function getUserID() {
		return $this->userID;
	}

	/**sets user ID
	 * @param int $userID */
	public function setUserID($userID) {
		$this->userID = $userID;
	}

}
?>
