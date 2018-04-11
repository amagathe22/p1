<?php

$login = $_POST['login'];
$password = $_POST['password'];

include "Model/user.php";
include "Model/model.php";

$model = new Model();
$user = $model->getUserByEmail($login);


if (password_verify($password, $user->getPassword())){
	session_start();
	$_SESSION["user"]=serialize($user);
	header("Location: index.php?page=accueil");
}else {
	header("Location: index.php?page=login");
}

?>