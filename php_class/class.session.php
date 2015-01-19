<?php
/**
 * class handels the session of an user on a website
 * 
 * @author Josephine Rehak
 */
class session{
	private $userID = null;
	private $hashPWD = null;
	protected $salt = "Salz"; // I will change that before use ^^
	
	/**
	 *  creates session out of mail and pwd or hash and id */
	function __construct($string, $ident, $passw) {
		switch ($string):
			case ("id_hash"):
				$this->userID = $ident;
				$this->hashPWD = $passw;
				break;
			
			case ("mail_pwd"):	
				$sql = "Select id from member where mail=".$ident ." limit 1";
				$result = parent::$db->execute($sql); 
				$this->userID = mysqli_result($result, 0);
				$this->hashPWD = hash($passw);
				break;
		endswitch;	
	}
	
	function hash($pwd){
		$hash = md5($salt . $pwd);
		return $hash;
	}
	
    /** starts a session*/
    public function startSession(){
        session_start();
		ob_start();
    }
	
	/**check the user of $_Session */
	function checkUser (){
		if(is_numeric($_SESSION["UID"])){
			$sql = "Select id, pwd from member where id = " . $_SESSION["UID"];
			$result = parent::$db->execute($sql);
			$check = mysqli_fetch_object($result);
			if (($this->hashPWD == $check->pwd) && ($this->userID == $check->id) ){
				return true;
			}else{
				return false;
			}
		}else{
			destroySession();
		}
		
	}

	/** checks PWD during login
	 * @return boolean */
	function checkPWD(){
		$sql = "Select id, pwd from member where id =$this->userID";
		$result = parent::$db->execute($sql);
		$check = mysqli_fetch_object($result);
		if (($this->hashPWD == $check->pwd) && ($this->userID == $check->id) ){
			return true;
		}
	return false;
	}
	
	/** generates user after checked session for site */
	function generateUser(){
		$user = new user($this->userID);
		return $user;
	}
	
	/**writes in $_Session
	 * @param int $id 
	 * @param string $hash passwordhash	 */
	function writeSession($id, $hash){
		$_SESSION["UID"] = $id;
		$_SESSION["HASH"] = $hash;
	}
    
    /** ends session on website*/
    public function destroySession(){
        session_destroy();
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
