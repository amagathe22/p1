<?php

session_start();

if (!$_SESSION["user"]){
	header("Location: index.php?page=login");
}


include_once "Model/user.php";

$user = unserialize($_SESSION["user"]);



include_once "Model/model.php";
include_once "Model/candidat.php";


$model = new Model();
$candidat = $model->getCandidatByEmail($user->getMail());


?>

<div style="padding: 4cm">
        <h1 style="text-align: center; color:darkblue; font-family:calibri">PROFIL CANDIDAT</h1>
        <h2 style="color:darkblue; font-family:calibri">NOM: <?php echo ($candidat->getNom()) ?>  </h2>
        <h2 style="color:darkblue; font-family:calibri">PRÉNOM: <?php echo ($candidat->getPrenom()) ?>  </h2>
        <h2 style="color:darkblue; font-family:calibri">AGE: <?php echo ($candidat->getAge()) ?> ans </h2>
        <h2 style="color:darkblue; font-family:calibri">PROFESSION ACTUELLE: <?php echo ($candidat->getP_act()) ?>  </h2>
        <h2 style="color:darkblue; font-family:calibri">ADRESSE: <?php echo ($candidat->getAdresse()) ?> </h2>
        <h2 style="color:darkblue; font-family:calibri">TÉLÉPHONE: <?php echo ($candidat->getTelephone()) ?> </h2>
        <form action="index.php?action=logout" method="post">
                <input type="submit" value="déconnexion">
        </form>
        <br><br>
        <form action="index.php?page=offre" method="post">        
                <input type="submit" value="afficher les offres">
        </form>
</div>
