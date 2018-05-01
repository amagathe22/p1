<?php

session_start();

if (!$_SESSION["user"]){
	header("Location: index.php?page=login");
}


include_once "Model/user.php";

$user = unserialize($_SESSION["user"]);
$name = $user->getName()


?>

<div style="padding: 4cm">
        <h1 style="text-align: center; color:darkblue; font-family:calibri">PROFIL ENTREPRISE</h1>
        <h2 style="color:darkblue; font-family:calibri">ENTREPRISE: <?php echo $name; ?></h2>
        <h2 style="color:darkblue; font-family:calibri">ADRESSE: </h2>
        <h2 style="color:darkblue; font-family:calibri">DESCRIPTION: </h2>
        <h2 style="color:darkblue; font-family:calibri">ANNÉE: </h2>
        <form action="index.php?action=logout" method="post">
                <input type="submit" value="deconnexion">
        </form>
        <form action="index.php?page=poster_offre" method="post">        
                <input type="submit" value="poster offre">
        </form>
        <form action="index.php?page=accès_candidature" method="post">        
                <input type="submit" value="accéder aux candidatures">
        </form>
</div>