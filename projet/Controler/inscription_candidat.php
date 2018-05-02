<?php
$nom = $_POST['name'];
$mail = $_POST['email'];
$age = $_POST['age'];
$p_act = $_POST['profession'];
$prenom = $_POST['firstname'];
$adresse = $_POST['adresse'];
$telephone = $_POST['phone'];
$password = $_POST["psw"];
$type = "candidat";


include "Model/user.php";
include "Model/candidat.php";
include "Model/model.php";
$model = new Model();
$pass = password_hash($password, PASSWORD_DEFAULT);
$createdUser = new User($mail,$pass,$type);
$user = $model->getUserByEmail($createdUser->getMail());



if ($user==null){    
    $model->createUser($createdUser);
    $createdCandidat = new Candidat($nom,$adresse,$prenom,$telephone,$age,$p_act,$mail);
    $model->createCandidat($createdCandidat);
	header("location: index.php?page=created");
}else {
	header("location: index.php?page=existing");
}
?>