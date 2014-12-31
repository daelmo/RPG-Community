<?php
class session{
	private $user = null;	
	private $userID = null;
	private $hashPWD =  null;
	
    //start session
    public function startSession(){
        session_start();
		ob_start();
    }
	
	function checkID (){
			
	}

	function checkPWD(){
		
		
	}
	
	function writeSession(){
		
	}
    
    //end session
    public function endSession(){
        
    }
 
	public function getUser() {
		return $this->user;
	}

	public function getUserID() {
		return $this->userID;
	}

	public function setUser($user) {
		$this->user = $user;
	}

	public function setUserID($userID) {
		$this->userID = $userID;
	}

}
?>
