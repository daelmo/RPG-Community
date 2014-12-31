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
	
	public function __construct($ID) {
		$this->ID = $ID;
		$this->db = new DB();
		$this->db= $this->db->initDB(); 
		$this->initVar();
	}
	
	public function initVar(){
		$sql= "Select * from file where ID=$this->ID limit 1"; 
		$result = mysqli_query($this->db, $sql);
		//TODO if (mysqli_num_rows($result) == 0) {header("Location:http://localhost/Error/no_file.php");}
		$file= mysqli_fetch_object($result);
		//initialisiere
		$this->description = $file->meta_beschreibung;
		$this->title = $file->title;
		$this->access = $file->access;
		
	}
	
	public function getPath() {
		return $this->path;
	}

	public function getID() {
		return $this->ID;
	}

	public function getTitle() {
		return $this->title;
	}

	public function getImg() {
		return $this->img;
	}

	public function getAccess() {
		return $this->access;
	}

	public function setPath($path) {
		$this->path = $path;
	}

	public function setID($ID) {
		$this->ID = $ID;
	}

	public function setTitle($title) {
		$this->title = $title;
	}

	public function setImg($img) {
		$this->img = $img;
	}

	public function setAccess($access) {
		$this->access = $access;
	}

	    
	public function setImage(){
		$this->img = $img;
	}
	
	public function getImage() {
		return $this->img;
	}	
	
    public function getSession(){
		return $this->session;
	}
	
	public function setSession($session){
		$this->session = $session;
	}
	
	public function getDb() {
		return $this->db;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setDb($db) {
		$this->db= $db;
	}

	public function setDescription($description) {
		$this->description = $description;
	}


}


?>