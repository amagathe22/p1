<?php

$login = $_POST['login'];
$password = $_POST['password'];

include "Model/user.php";
include "Model/model.php";

$model = new Model();
$user = $model->getUserByEmail($login);

if ($user === null){
	header("Location: index.php?page=erreur_login");
	

}else if (password_verify($password, $user->getPassword())){
	session_start();	
	$_SESSION["user"]=serialize($user);
		
	if ($user->getType() == "candidat") {
		header("Location: index.php?page=accueil_candidat");
		
	}else {
		
		header("Location: index.php?page=accueil_entreprise");
		
	}
}else {
	/*header("Location: index.php?page=login");*/
	header("Location: index.php?page=erreur_login");
}
?>