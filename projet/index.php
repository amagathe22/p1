<?php

$page = $_GET["page"];
$action = $_GET["action"];

function showPage($page){
	include_once "Vue/header.html";
	include_once $page;
	include_once "Vue/footer.html";
}

function checkLoggedIn(){
	session_start();
	if (!$_SESSION["user"]){
		header("Location: index.php?page=login");
	}
}

if ($page) {
	switch ($page) {
		case 'accueil_candidat':
			checkLoggedIn();
			showPage("Vue/home_candidat.php");			
			break;
		case 'accueil_entreprise':
			checkLoggedIn();
			showPage("Vue/home_entreprise.php");			
			break;
		case 'login':			
			showPage("Vue/login.html");
			break;
		case "offre":
			checkLoggedIn();
			/*showPage("Controler/offre.php");*/
			showPage("Vue/vue_offre.php");
			break;
		case "inscription":
			showPage("Vue/inscription_.html");
			break;
		case "poster_offre":
			showPage("Vue/poster_offre.php");
			break;
		case "created_offre":
			showPage("Vue/created_offre.php");
			break;
		case "erreur_login":
			showPage("Vue/erreur_login.php");
			break;
		case "created":
			showPage("Vue/created.php");
			break;
		case "existing":
			showPage("Vue/existing.php");
			break;
		case "postuler":
			showPage("Vue/pagerecrutement.php");
			break;
		default:
			checkLoggedIn();			
			showPage("Vue/login.html");
			break;
	}
}else if ($action) {
	switch ($action) {
		case 'inscription_entreprise':
			include_once "Controler/inscription_entreprise.php";
			break;
		case 'inscription_candidat':
			include_once "Controler/inscription_candidat.php";
			break;
		case 'login':
			include_once "Controler/login.php";
			break;
		case 'logout':
			include_once "Controler/logout.php";
			break;
		case 'offre':
			include_once "Controler/offre.php";
			break;
		case 'add_offre':
			include_once "Controler/add_offre.php";
			break;
		default:
			include "Vue/home.php";
			break;
	}
}else {
	checkLoggedIn();
	showPage("Vue/home.php");
}
	
?>