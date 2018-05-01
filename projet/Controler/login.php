<?php

$login = $_POST['login'];
$password = $_POST['password'];

include "Model/user.php";
include "Model/model.php";

$model = new Model();
$user = $model->getUserByEmail($login);
echo $user->getType();
echo $user->getMail();
echo "4444     ";
if ($user === null){
	include "Vue/error.php";

}else if (password_verify($password, $user->getPassword())){
	session_start();	
	$_SESSION["user"]=serialize($user);
		
	if ($user->getType() == "candidat") {
		header("Location: index.php?page=accueil_candidat");
		echo "124";
	}else {
		echo "123";
		header("Location: index.php?page=accueil_entreprise");
		echo "123";
	}
}else {
	/*header("Location: index.php?page=login");*/
	include "Vue/error.php";
}
?>