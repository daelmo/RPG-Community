<?php

/** class handels a single site
 * 
 * @author Josephine Rehak
 */

class site{
	private $db =null;
	private $session = null;
	private $user = null;
	private $ID;
	
	private $title;
	private $img;
	private $description;
	private $access;
	
	/** constructs a standard website
	 * @param int $ID*/
	public function __construct($ID) {
		$this->ID = $ID;
		$this->db = new DB();
	}
	
	/** initialize variables from database */
	protected function initVar(){
		$sql= "Select * from file where ID=$this->ID limit 1"; 
		$result = $this->db->execute($sql);
		//TODO if (mysqli_num_rows($result) == 0) {header("Location:http://localhost/Error/no_file.php");}
		$file= mysqli_fetch_object($result);
		$this->description = $file->meta_beschreibung;
		$this->title = $file->title;
		$this->access = $file->access;
	}
	
	/** gets ID of page
	 * @return int */
	public function getID() {
		return $this->ID;
	}
	
	/** gets htmltitle of page
	 * @return string */
	public function getTitle() {
		return $this->title;
	}

	/** gets path to img for page
	 * @return string */
	public function getImg() {
		return $this->img;
	}
	
	/** gets value for permission to access the website 
	 * @return int */
	public function getAccess() {
		return $this->access;
	}
	
	/** check if access to page is right
	 * @return boolean */
	public function proofAccess(){
		return false;
	}

	/** sets path to image new
	 * @param string $img */
	public function setImg($img) {
		$this->img = $img;
	}
	
	/** gets complete session
	 * @return session-object
	 */
    public function getSession(){
		return $this->session;
	}
	
	/** sets session object
	 * @param session $session */
	public function setSession($session){
		$this->session = $session;
	}

	/** gets description of page for html header
	 * @return string */
	public function getDescription() {
		return $this->description;
	}

	/** sets user
	 * @param user $user*/
	public function setUser($user) {
		$this->user = $user;
	}
	
	/** returns User
	 * @return user */
	public function getUser() {
		return $this->user;
	}
}
?>