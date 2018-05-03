<?php
$adresse = $_POST['adresse'];
$description = $_POST['description'];
$parution = $_POST['email'];
$entreprise = $_POST["entreprise"];



include_once "Model/model.php";
include_once "Model/offre.php";
$model = new Model();
$createdOffre = new Offre($parution,$description,$entreprise,$adresse);
$model->createOffre($createdOffre);
header("location: index.php?page=created_offre");
