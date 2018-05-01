<?php

include_once "Model/user.php";

class candidat extends user
{
    private $nom; 
    private $adresse;      
    private $prenom; 
    private $telephone; 
    private $age; 
    private $p_act;
    public $email; 

    function __construct($nom,$adresse,$prenom,$telephone,$age,$p_act,$email)
	{
		$this->nom = $nom;
		$this->adresse = $adresse;
        $this->age = $age;
        $this->telephone= $telephone;
        $this->prenom = $prenom;
        $this->p_act = $p_act;
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


    function getAge(){
		return $this->age;
    }
    function setAge($age){
        $this->age = $age;
    }


    function getTelephone(){
		return $this->telephone;
    }
    function setTelephone($telephone){
        $this->telephone = $telephone;
    }


    function getPrenom(){
		return $this->prenom;
    }
    function setPrenom($prenom){
        $this->prenom = $prenom;
    }


    function getP_act(){
		return $this->p_act;
    }
    function setP_act($p_act){
        $this->p_act = $p_act;
    }
    function getMail(){
		return $this->email;
	}	
	function setMail($mail){
		$this->email=$email;
	}
   
}
?>