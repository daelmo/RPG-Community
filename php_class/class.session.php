<?php
class session{
	private $user;	
    //start session
    public function startSession(){
        session_start();
		ob_start();
    }
    
    //end session
    public function endSession(){
        
    }
    
    
}


?>
