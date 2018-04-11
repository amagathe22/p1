<?php

$login = $_POST['login'];
$password = $_POST['password'];

include "Model/user.php";
include "Model/model.php";

$model = new Model();
$user = $model->getUserByEmail($login);

if (password_verify($password, $user->getPassword())){
	session_start();
	echo("1");
	$_SESSION["user"]=serialize($user);
	echo("2");
	header("Location: index.php?page=accueil");
}else {
	/*header("Location: index.php?page=login");*/
	include "Vue/error.php";
}
?>