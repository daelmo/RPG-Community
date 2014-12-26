<?php
class session{
	private $user;	
    //start session
    function startSession(){
        session_start();
		ob_start();
    }
    
    //end session
    function endSession(){
        
    }
    
    
}


?>
