<!DOCTYPE html>
<html>
<head>
	<title>Offre created</title>
</head>
<?php session_start(); ?>
<body>
<br><br><br><br><br><br><br><br>
<h1>L'offre est publiée</h1>
<form action="index.php?action=logout" method="post">
    <input type="submit" value="deconnexion">
</form>
<br><br>
<form action="index.php?page=accueil_entreprise" method="post">
    <input type="submit" value="retour">
</form>
</body>
</html>

