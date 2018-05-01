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
		    $conn = new PDO("mysql:host=$servername;dbname=linkedon", $username, $password);
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
		$this->connexion->exec("INSERT INTO `user`(  `email`,`mdp`,`type`) VALUES ('".$user->getMail()."','".$user->getPassword()."','".$user->getType()."')");
	}
	function getUserByEmail($email){

		$sql =  "SELECT * FROM `user` WHERE email='".$email."'";
		$user = null;
		include_once "Model/user.php";
	    foreach  ($this->connexion->query($sql) as $row) {
	    	$user = new User($row['email'],$row['mdp'],$row['type']);
	  	}
	  	return $user;
	}

	function getEntrepriseByEmail($email){

		$sql =  "SELECT * FROM `entreprise` WHERE email='".$email."'";
		$entreprise = null;
		include_once "Model/entreprise.php";
	    foreach  ($this->connexion->query($sql) as $row) {
	    	$entreprise = new Entreprise($row['nom'],$row['adresse'],$row['description'],$row['annee'],$row['email']);
	  	}
	  	return $entreprise;
	}


	function createCandidat($candidat){		
		$this->connexion->exec("INSERT INTO `candidat`(  `email` , `age`,`p_act`,`prenom`,`adresse`,`telephone`,`nom`) VALUES ('".$candidat->getMail()."','".$candidat->getAge()."','".$candidat->getP_act()."','".$candidat->getPrenom()."','".$candidat->getAdresse()."','".$candidat->getTelephone()."','".$candidat->getNom()."')");
	}

	function getCandidatByEmail($email){

		$sql =  "SELECT * FROM `candidat` WHERE email='".$email."'";
		$candidat = null;
		include_once "Model/candidat.php";
	    foreach  ($this->connexion->query($sql) as $row) {
	    	$candidat = new Candidat($row['nom'],$row['adresse'],$row['prenom'],$row['telephone'],$row['age'],$row['p_act'],$row['email']);
	  	}
	  	return $candidat;
	}

	function createEntreprise($entreprise){		
		$this->connexion->exec("INSERT INTO `entreprise`(  `email` , `nom`,`annee`,`description`,`adresse`) VALUES ('".$entreprise->getMail()."','".$entreprise->getNom()."','".$entreprise->getAnnee()."','".$entreprise->getDescription()."','".$entreprise->getAdresse()."')");
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