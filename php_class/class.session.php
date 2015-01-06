<?php
/**
 * class handels the session of an user on a website
 */
class session{
	private $user = null;	
	private $userID = null;
	private $hashPWD =  null;
	
    /**
	 * starts a session
	 */
    public function startSession(){
        session_start();
		ob_start();
    }
	
	/**
	 * check the user ID of $_Session 
	 */
	function checkUserID (){
			
	}

	/**
	 * checks PWD during login
	 */
	function checkPWD(){
		
		
	}
	
	/**
	 * writes in $_Session
	 */
	function writeSession(){
		
	}
    
    /**
	 * ends session on website
	 */
    public function endSession(){
        
    }
 
	/**
	 * returns User
	 * @return user
	 */
	public function getUser() {
		return $this->user;
	}

	/**
	 * returns user ID
	 * @return int
	 */
	public function getUserID() {
		return $this->userID;
	}

	/**
	 * sets user
	 * @param user $user
	 */
	public function setUser($user) {
		$this->user = $user;
	}

	/**
	 * sets user ID
	 * @param int $userID
	 */
	public function setUserID($userID) {
		$this->userID = $userID;
	}

}
?>
