<?php

session_start();

if (!$_SESSION["user"]){
	header("Location: index.php?page=login");
}


include_once "Model/user.php";

$user = unserialize($_SESSION["user"]);
$name = $user->getName();

?>

<h1>Bienvenue sur l'accueil</h1>
<h2>votre nom est : <?php echo $name; ?></h2>
