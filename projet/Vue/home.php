<?php

session_start();

if (!$_SESSION["user"]){
	header("Location: index.php?page=login");
}


include_once "Model/user.php";

$user = unserialize($_SESSION["user"]);
$name = $user->getName();

?>

<div style="padding: 4cm">
        <h1 style="text-align: center; color:darkblue; font-family:calibri">PROFIL CANDIDAT</h1>
        <h2 style="color:darkblue; font-family:calibri">NOM: <?php echo $name; ?></h2>
        <form action="index.php?action=logout" method="post">        
                <input type="submit" value="deconnexion">
        </form>
        <form action="index.php?page=offre" method="post">        
                <input type="submit" value="afficher offre">
        </form>
</div>
