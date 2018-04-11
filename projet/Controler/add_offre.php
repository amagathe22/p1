<?php
$lieu_de_travail = $_POST['name'];
$description = $_POST['mail'];
$date_de_parution = ;
$date_de_debut = $_POST["date_de_debut"];
$entreprise = $_POST["entreprise"];
/*$entreprise = ; il s'agit ici de choper l'atribut entreprise */
include "Model/user.php";
include "Model/model.php";
$model = new Model();

$createdOffre = new Offre($date_de_debut,$description,$entreprise,$date_de_parution,$lieu_de_travail);
$model->createOffre($createdOffre);
include_once "Vue/created_offre.php";
