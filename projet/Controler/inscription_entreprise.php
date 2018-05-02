<?php
$nom = $_POST['nom'];
$mail = $_POST['email'];
$annee = $_POST['annee'];
$adresse = $_POST['adresse'];
$description = $_POST['description'];
$password = $_POST["psw"];
$type = "entreprise";


include "Model/user.php";
include "Model/entreprise.php";
include "Model/model.php";
$model = new Model();
$pass = password_hash($password, PASSWORD_DEFAULT);
$createdUser = new User($mail,$pass,$type);
$user = $model->getUserByEmail($createdUser->getMail());



if ($user==null){    
    $model->createUser($createdUser);
    $createdEntreprise = new Entreprise($nom,$adresse,$description,$annee,$mail);
    $model->createEntreprise($createdEntreprise);
    /*include_once "Vue/created.php";*/
    header("location: index.php?page=created");
}else {
    /*include_once "Vue/existing.php";*/
    header("location: index.php?page=existing");
}
?>