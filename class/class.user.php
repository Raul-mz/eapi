<?php



class User {
	

	private static $user;
	private $Agent;
	private $userName;
	private $name;
	private $lastName;
	private $email;
	private $userID;
	public function __construct(){
		
		$this->Agent=0;
		$this->userName="s";
		$this->name=0;
		$this->lasNatme=0;
		$this->email=0;
		$this->userID=0;
	}
	
	public static function getInstance()
	{
		if (  !self::$user instanceof self)
		{
			self::$user = new self;
		}
		return self::$user;
	}
	
	public function setUserName($opt){
		$this->userName =$opt; 
	}
	public function setUserID($opt){
		$this->userID =$opt;
	}
	public function setName($opt){
		$this->name =$opt;
	}
	public function setLastName($opt){
		$this->lastName =$opt;
	}
	public function setIsAgent($opt){
		$this->Agent =$opt;
	}
	public function setEmail($opt){
		$this->email =$opt;
	}
	public function getUserName(){
		return $this->userName;
	}
	public function getUserID(){
		return $this->userID;
	}
	public function getName(){
		return $this->name;
	}
	public function getLastName(){
		return $this->lastName;
	}
	public function isAgent(){
		return $this->Agent;
	}
	public function getEmail(){
		return $this->email;
	}
}

?>