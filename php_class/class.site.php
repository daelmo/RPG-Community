<?php

class site{
	private $db;
	private $session = null;
	private $path;
	private $ID;
	
	private $title;
	private $img;
	private $description;
	private $access;
	
	/**
	 * constructs a standard website
	 * @param type $ID
	 */
	public function __construct($ID) {
		$this->ID = $ID;
		$this->db = new DB();
		$this->db= $this->db->initDB(); 
		$this->initVar();
	}
	
	/**
	 * initialize variables from database
	 */
	protected function initVar(){
		$sql= "Select * from file where ID=$this->ID limit 1"; 
		$result = mysqli_query($this->db, $sql);
		//TODO if (mysqli_num_rows($result) == 0) {header("Location:http://localhost/Error/no_file.php");}
		$file= mysqli_fetch_object($result);
		//initialisiere
		$this->description = $file->meta_beschreibung;
		$this->title = $file->title;
		$this->access = $file->access;
	}
	
	/**
	 * gets location of file
	 * @return string
	 */
	public function getPath() {
		return $this->path;
	}
	
	/**
	 * gets ID of page
	 * @return int
	 */
	public function getID() {
		return $this->ID;
	}
	
	/**
	 * gets htmltitle of page
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * gets path to img for page
	 * @return string
	 */
	public function getImg() {
		return $this->img;
	}
	
	/**
	 * gets value for permission to access the website 
	 * @return int
	 */
	public function getAccess() {
		return $this->access;
	}

	/**
	 * sets path to image new
	 * @param string $img
	 */
	public function setImg($img) {
		$this->img = $img;
	}
	
	/**
	 * @return session-object
	 */
    public function getSession(){
		return $this->session;
	}
	
	/**
	 * sets session object
	 * @param session $session
	 */
	public function setSession($session){
		$this->session = $session;
	}

	/**
	 * gets description of page for html header
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}

}
?>