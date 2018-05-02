<?php

session_start();

if (!$_SESSION["user"]){
	header("Location: index.php?page=login");
}


include_once "Model/user.php";
include_once "Model/model.php";
include_once "Model/entreprise.php";

$user = unserialize($_SESSION["user"]);

$model = new Model();
$entreprise = $model->getEntrepriseByEmail($user->getMail());
$_SESSION["entreprise"]=serialize($entreprise);




?>

<div style="padding: 4cm">
        <h1 style="text-align: center; color:darkblue; font-family:calibri">PROFIL ENTREPRISE</h1>
        <h2 style="color:darkblue; font-family:calibri">ENTREPRISE: <?php echo ($entreprise->getNom()) ?></h2>
        <h2 style="color:darkblue; font-family:calibri">ADRESSE: <?php echo ($entreprise->getAdresse()) ?></h2>
        <h2 style="color:darkblue; font-family:calibri">DESCRIPTION: <?php echo ($entreprise->getDescription()) ?> </h2>
        <h2 style="color:darkblue; font-family:calibri">ANNÉE: <?php echo ($entreprise->getAnnee()) ?> </h2>
        <form action="index.php?action=logout" method="post">
                <input type="submit" value="deconnexion">
        </form>
        <br> <br>
        <form action="index.php?page=poster_offre" method="post">        
                <input type="submit" value="poster offre">
        </form>
        <br><br>
        <form action="index.php?page=accès_candidature" method="post">        
                <input type="submit" value="accéder aux candidatures">
        </form>
</div>