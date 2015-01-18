<?php
/** class describes a user 
 * 
 * @author Josephine Rehak
 */
class user{
	
	private $vorname;
	private $nachname;
	private $id;
	private $birth;
	private $email;
	private $aktiv;
	private $beitritt;
	private $rang;
	private $img;
	private $lng;
	
	/** constructs a user objekt to save user data*/
	function __construct($id){
		$this->initVar();
		
		
	}
	
	/** initializes values*/
	function initVar(){
		$sql= "Select * from member where id=$this->userID";
		$result = parent::$db->execute($sql);
		$this->vorname = $vorname;
		$this->nachname = $nachname;
		$this->birth = $birth;
		$this->rang = $rang;
	}
	
	/** gets name of user */
	function getName(){
		return $vorname . " " . $nachname;
	}
	
	
	
	
}

