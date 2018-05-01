<?php

include_once "Model/user.php";

class entreprise extends user
{
    private $nom; 
    private $adresse;      
    private $description; 
	private $annee;
	public $email; 

    function __construct($nom,$adresse,$description,$annee,$email)
	{
		$this->nom = $nom;
		$this->adresse = $adresse;
        $this->description = $description;
		$this->annee = $annee;
		$this->email = $email;
	}
	function getNom(){
		return $this->nom;
    }
    function setNom($nom){
        $this->nom = $nom;
    }
	function getAdresse(){
		return $this->adresse;
	}	
	function setAdresse($mail){
		$this->adresse=$adresse;
    }
    function getDescription(){
		return $this->description;
	}	
	function setDescription($description){
		$this->description=$description;
    }
    function getAnnee(){
		return $this->annee;
	}	
	function setAnnee($annee){
		$this->annee=$annee;
	}
	function getMail(){
		return $this->email;
	}	
	function setMail($mail){
		$this->email=$email;
	}
}
?>
