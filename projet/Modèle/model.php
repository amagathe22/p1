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
		$this->connexion->exec("INSERT INTO `user`( `nom`, `mail`) VALUES ('".$user->getName()."','".$user->getMail()."')");
	}
	function getUserByEmail($mail){

		$sql =  "SELECT * FROM `user` WHERE mail='".$mail."'";
		$user = null;
		include_once "Modèle/user.php";
	    foreach  ($this->connexion->query($sql) as $row) {
	    	$user = new User($row['nom'],$row['mail']);
	  	}
	  	return $user;
	}



	function createOffre($offre){
		$this->connexion->exec("INSERT INTO `offre`( `entreprise`, `description`,`parution`,`lieutravail`,`début`) VALUES ('".$offre->getEntreprise()."',   '".$offre->getDescription()."',   '".$offre->getDate_de_parution()."',   '".$offre->getLieu_de_travail()."',   '".$offre->getDate_de_debut()."')");
	}

	function getListOffre() {
		$list = array();		
		for ($i=0; $i <5 ; $i++){
			include_once "Modèle/offre.php";
			$offre = null;
			foreach  ($this->connexion->query($sql) as $row) {
				$offre = new Offre($row['début'],$row['description'],$row['entreprise'],$row['entreprise'],$row['parution'],$row['lieutravail']);}
			$list[i] = $offre;
			}
		return $list;

	}
}

?>