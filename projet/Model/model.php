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
		    echo "Connected successfully"; 
	    }
		catch(PDOException $e)
	    {
	    	echo "Connection failed: " . $e->getMessage();
	    }

	}

	function createUser($user){
		$this->connexion->exec("INSERT INTO `user`( `name`, `mail`,`password`) VALUES ('".$user->getName()."','".$user->getMail()."','".$user->getPassword()."')");
	}
	function getUserByEmail($mail){

		$sql =  "SELECT * FROM `user` WHERE mail='".$mail."'";
		$user = null;
		include_once "Model/user.php";
	    foreach  ($this->connexion->query($sql) as $row) {
	    	$user = new User($row['name'],$row['mail'],$row['password']);
	  	}
	  	return $user;
	}



	function createOffre($offre){
		$this->connexion->exec("INSERT INTO `offre`( `entreprise`, `description`,`parution`,`lieutravail`,`début`) VALUES ('".$offre->getEntreprise()."',   '".$offre->getDescription()."',   '".$offre->getDate_de_parution()."',   '".$offre->getLieu_de_travail()."',   '".$offre->getDate_de_debut()."')");
	}

	function getListOffre() {
		$list = [];
		$sql = "SELECT * FROM `offre`";
		$offre =null;
		/*echo $sql; */		
		include_once "Model/offre.php";				
		foreach  ($this->connexion->query($sql) as $row) {			
			$offre = new Offre($row['debut'],$row['description'],$row['entreprise'],$row['parution'],$row['lieutravail']);
			array_push($list,$offre);
		}
		return $list;

		}
}

?>