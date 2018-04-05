<?php


class Offre
{
    private $date_de_parution;
    private $description;
    private $date_de_debut;
    private $entreprise;
    private $lieu_de_travail;

    function __construct($date_de_debut,$description,$entreprise,$date_de_parution,$lieu_de_travail)
    {
        
       $this->date_de_parution = $date_de_parution;
       $this->description = $description;
       $this->date_de_debut = $date_de_debut;
       $this->entreprise = $entreprise;
       $this->lieu_de_travail = $lieu_de_travail;
    }

    function getDate_de_parution(){
		return $this->date_de_parution;
    }

    function getDescription(){
		return $this->description;
    }

    function getLieu_de_travail(){
		return $this->lieu_de_travail;
    }

    function getEntreprise(){
		return $this->entreprise;
    }

    function getDate_de_debut(){
		return $this->date_de_debut;
    }

    function setDate_de_parution($date_de_parution){
		$this->date_de_parution = $date_de_parution;
    }
    
    function setDescription($description){
		$this->description = $description;
    }
    
    function setDate_de_debut($date_de_debut){
		$this->date_de_debut = $date_de_debut;
    }
    
    function setEntreprise($entreprise){
		$this->entreprise = $entreprise;
    }
    
    function setLieu_de_travail($lieu_de_travail){
		$this->lieu_de_travail = $lieu_de_travail;
	}

}

?>