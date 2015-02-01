<?php
/** class describes a user 
 * 
 * @author Josephine Rehak
 */
class user{
	private $profil;
	private $id = NULL;
	private $db = NULL;
	
	public $vorname;
	public $nachname;
	public $birth;
	public $email;
	public $aktiv;
	public $beitritt;
	public $rang;
	public $img;
	public $lng;
	public $last_login;
	public $last_post;
	public $last_rpg;
	
	/** constructs a user objekt to save user data*/
	function __construct($db, $id){
		$this->db = $db;
		$this->initVar($id);	
	}
	
	/** initializes values*/
	function initVar($id){
		$sql= "Select * from member where id=$id";
		$result = $this->db->execute($sql);
		$user = mysqli_fetch_object($result);
		$this->vorname = $user->vorname;
		$this->nachname = $user->nachname;
		$this->birth = $user->gebtag;
		$this->rang = $user->typ;
		$this->img =$user->img;
		$this->email = $user->email;
		$this->aktiv = $user->status;
		$this->beitritt = $user->beitritt;
		$this->last_login = $user->last_login;
		$this->last_post = $user->last_post;
		$this->last_rpg = $user->last_rpg;
		
	}
	
	/** gets name of user */
	function getName(){
		return $this->vorname . " " . $this->nachname;
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
	 
	public function getID() {
		return $this->id;
	}


	
	
	
}

