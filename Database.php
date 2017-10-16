<?php

class Database{
	public $host = DB_HOST;
	public $user = DB_USER;
	public $pass = DB_PASS;
	public $dbname = DB_NAME;

	public $link;
	public $error;

// fucntion for connecting to the database
	public function __construct(){
		$this->connectDB();
	}
// function 
	private function connectDB(){
		$this->link = new mysqli($this->host,$this->user,$this->pass,$this->dbname);
		if(!$this->link){
			$this->error= "Connection Failed.!! ".$this->link->connect_error;
			return false;
		}
	}

// Data Insert Function

	public function insert($query){
		$insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
	  }


}


