<?php

$name = $_POST['name'];
$mail = $_POST['mail'];
$password = $_POST["password"];

include "Model/user.php";
include "Model/model.php";

$model = new Model();

$pass = password_hash($password, PASSWORD_DEFAULT);

$createdUser = new User($name,$mail,$pass);
$user = $model->getUserByEmail($createdUser->getMail());
if ($user==null){
	$model->createUser($createdUser);
	include_once "Vue/created.php";
}else {
	include_once "Vue/existing.php";
}




?>