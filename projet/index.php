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
		case 'accueil':
			checkLoggedIn();
			showPage("Vue/home.php");			
			break;
		case 'login':			
			showPage("Vue/login.html");
			break;
		case "offre":
			checkLoggedIn();
			showPage("Vue/vue_offre.php");
			break;
		case "inscription":
			showPage("Vue/inscription.html");
			break;
		default:
			checkLoggedIn();			
			showPage("Vue/home.php");
			break;
	}
}else if ($action) {
	switch ($action) {
		case 'inscription':
			include_once "Controler/inscription.php";
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
		default:
			include "Vue/home.php";
			break;
	}
}else {
	checkLoggedIn();
	showPage("Vue/home.php");
}
	
?>