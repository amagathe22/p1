<?php


/**
* 
*/
class Model
{
	private $connexion;
	
	function __construct()
	{
		$servername = "localhost";
		$username = "root";
		$password = "root";

		try {
		    $conn = new PDO("mysql:host=$servername;dbname=formation_cfa", $username, $password);
		    // set the PDO error mode to exception
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $this->connexion=$conn;
		    //echo "Connected successfully"; 
	    }
		catch(PDOException $e)
	    {
	    	echo "Connection failed: " . $e->getMessage();
	    }

	}

	function createUser($user){
		$stmt = $this->connexion->prepare("INSERT INTO `user`( `nom`, `mail`,`password`) VALUES (:name,:mail,:password)");
		$stmt->bindParam(':name', $user->getName());
		$stmt->bindParam(':mail', $user->getMail());
		$stmt->bindParam(':password', $user->getPassword());
		$stmt->execute();
	}
	function getUserByEmail($mail){

		$sql =  "SELECT * FROM `user` WHERE mail='".$mail."'";
		$user = null;
		include_once "Model/user.php";
	    foreach  ($this->connexion->query($sql) as $row) {
	    	$user = new User($row['nom'],$row['mail'],$row['password']);
	  	}
	  	return $user;
	}
}

?>