<?php
/*


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
*/


class User 
{
	public $email;
	private $id;
	private $password;
	public $type;

	
	function __construct($email,$pass,$type){
	
		$this->email=$email;
		$this->password=$pass;
		$this->type=$type;
	}
	public function getMail(){
		return $this->email;
	}
	function setMail($email){
		$this->mail=$email;
	}
	function getPassword(){
		return $this->password;
	}
	function setPassword($password){
		$this->password=$pass;
	}
	public function getType(){
		return $this->type;
	}
	public function setType($type){
		$this->type=$type;
	}

}
?>
