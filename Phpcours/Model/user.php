<?php

/**
* 
*/
class User 
{
	private $name;
	private $mail;
	private $id;
	private $password;

	function __construct($name,$mail,$pass)
	{
		$this->name=$name;
		$this->mail=$mail;
		$this->password=$pass;
	}

	function getName(){
		return $this->name;
	}
	function getMail(){
		return $this->mail;
	}
	function setName($name){
		$this->name=$name;
	}
	function setMail($mail){
		$this->mail=$mail;
	}
	function getPassword(){
		return $this->password;
	}
	function setPassword($pass){
		$this->password=$pass;
	}


}


?>