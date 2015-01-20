<?php
/** class describes a user 
 * 
 * @author Josephine Rehak
 */
class user{
	private $profil;
	private $id;
	
	public $vorname;
	public $nachname;
	public $birth;
	public $email;
	public $aktiv;
	public $beitritt;
	public $rang;
	public $img;
	public $lng;
	
	/** constructs a user objekt to save user data*/
	function __construct($id){
		$this->initVar($id);	
	}
	
	/** initializes values*/
	function initVar($id){
		$sql= "Select * from member where id=$id";
		$result = parent::$db->execute($sql);
		$user = mysqli_fetch_object($result);
		$this->vorname = $user->vorname;
		$this->nachname = $user->nachname;
		$this->birth = $user->birth;
		$this->rang = $user->rang;
		$this->img =$user->img;
		$this->email = $user->email;
		$this->aktiv = $user->aktiv;
		$this->beitritt = $user->beitritt;
	}
	
	/** gets name of user */
	function getName(){
		return $vorname . " " . $nachname;
	}
	
	/** delete user completely from system */
	function eraseUser(){
		
	}
	
	/** */
	function sendWarning(){
		
	}
	
	function givePoint(){
		
	} 
	
	function takePoint(){
		
	}
	
	function createUser(){
		
	}
	 
	
	
	
	
}

