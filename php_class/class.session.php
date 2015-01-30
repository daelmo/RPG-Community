<?php
/**
 * class handels the session of an user on a website
 * 
 * @author Josephine Rehak
 */
class session{
	private $userID = null;
	private $hashPWD = null;
	protected $salt = "rpg"; // I will change that before use ^^
	private $db = null;
	
		/** hashes passwords 
	 *	@param string $pwd Password
	 * 	@return string Hash */
	function myHash($pwd){
		$hash = md5("$this->salt"."$pwd");
		return $hash;
	}
	
	/** creates session out of mail and pwd or hash and id */
	function __construct($db, $string, $ident, $passw) {
		$this->db = $db;
		switch ($string):
			case ("id_hash"):
				$this->userID = $ident;
				$this->hashPWD = $passw;
				break;
			
			case ("mail_pwd"):	
				$email = htmlspecialchars($ident);
				$sql = "Select * from member where email='$email'";
				$result = $this->db->execute($sql); 
				$ergebnis = mysqli_fetch_object($result);
				$this->userID = $ergebnis->id;
				$this->hashPWD = $this->myHash($passw);
				break;
		endswitch;	
	}

	
	/**check the user of $_Session */
	function checkUser (){
		if(is_numeric($_SESSION["UID"])){
			$sql = "Select id, pwd from member where id=" . $_SESSION["UID"];
			$result = $db->execute($sql);
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
		echo "test";
		$sql = "Select id, pwd from member where id =$this->userID";
		$result = $this->db->execute($sql);
		$check = mysqli_fetch_object($result);
		$anz = mysqli_num_rows(result);
		if($anz == 0){return false;}
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
		header("Location:http://localhost/inde.php");
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

}
?>
