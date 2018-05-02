<?php


class Offre
{
    
    private $description;
    private $parution;
    private $entreprise;
    private $adresse;

    function __construct($parution,$description,$entreprise,$adresse)
    {
        
      
       $this->description = $description;
       $this->parution = $parution;
       $this->entreprise = $entreprise;
       $this->adresse = $adresse;
    }

    function getParution(){
		return $this->parution;
    }

    function getDescription(){
		return $this->description;
    }

    function getAdresse(){
		return $this->adresse;
    }

    function getEntreprise(){
		return $this->entreprise;
    }

   

    function setParution($parution){
		$this->parution = $parution;
    }
    
    function setDescription($description){
		$this->description = $description;
    }
    
    
    
    function setEntreprise($entreprise){
		$this->entreprise = $entreprise;
    }
    
    function setAdresse($adresse){
		$this->adresse = $adresse;
	}

}

?>